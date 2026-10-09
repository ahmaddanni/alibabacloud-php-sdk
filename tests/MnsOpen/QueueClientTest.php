<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\MnsOpen;

use Dew\Acs\MnsOpen\QueueClient;
use Dew\Acs\MnsOpen\QueueException;
use GuzzleHttp\Psr7\Response;
use Http\Mock\Client;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(QueueClient::class)]
final class QueueClientTest extends TestCase
{
    public function test_send_message_sends_message_to_queue(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->sendMessage([
            'QueueName' => 'testing',
            'Message' => ['MessageBody' => 'foo'],
        ]);
        $request = $mock->getLastRequest();
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame($this->xml(<<<'XML'
        <Message>
            <MessageBody>foo</MessageBody>
        </Message>
        XML), (string) $request->getBody());
    }

    public function test_sends_message_sends_delay_message(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->sendMessage([
            'QueueName' => 'testing',
            'Message' => ['MessageBody' => 'foo', 'DelaySeconds' => 60],
        ]);
        $request = $mock->getLastRequest();
        $this->assertSame($this->xml(<<<'XML'
        <Message>
            <MessageBody>foo</MessageBody>
            <DelaySeconds>60</DelaySeconds>
        </Message>
        XML), (string) $request->getBody());
    }

    public function test_batch_send_message_sends_multiple_messages_to_queue(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->batchSendMessage([
            'QueueName' => 'testing',
            'Messages' => [
                'Message' => [
                    ['MessageBody' => 'foo'],
                    ['MessageBody' => 'bar'],
                ],
            ],
        ]);
        $request = $mock->getLastRequest();
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame($this->xml(<<<'XML'
        <Messages>
            <Message>
                <MessageBody>foo</MessageBody>
            </Message>
            <Message>
                <MessageBody>bar</MessageBody>
            </Message>
        </Messages>
        XML), (string) $request->getBody());
    }

    public function test_batch_send_message_sends_delayed_messages(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->batchSendMessage([
            'QueueName' => 'testing',
            'Messages' => [
                'Message' => [
                    ['MessageBody' => 'foo'],
                    ['MessageBody' => 'bar', 'DelaySeconds' => 60],
                ],
            ],
        ]);
        $request = $mock->getLastRequest();
        $this->assertSame($this->xml(<<<'XML'
        <Messages>
            <Message>
                <MessageBody>foo</MessageBody>
            </Message>
            <Message>
                <MessageBody>bar</MessageBody>
                <DelaySeconds>60</DelaySeconds>
            </Message>
        </Messages>
        XML), (string) $request->getBody());
    }

    public function test_receive_message_receives_message_from_queue(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->receiveMessage(['QueueName' => 'testing']);
        $request = $mock->getLastRequest();
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
    }

    public function test_receive_message_configures_long_polling_time(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->receiveMessage(['QueueName' => 'testing', 'waitseconds' => 10]);
        $request = $mock->getLastRequest();
        $this->assertSame('waitseconds=10', $request->getUri()->getQuery());
    }

    public function test_batch_receive_message_receives_multiple_messages_from_queue(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->batchReceiveMessage(['QueueName' => 'testing', 'numOfMessages' => 16]);
        $request = $mock->getLastRequest();
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame('numOfMessages=16', $request->getUri()->getQuery());
    }

    public function test_batch_receive_message_configures_long_polling_time(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->batchReceiveMessage(['QueueName' => 'testing', 'numOfMessages' => 16, 'waitseconds' => 10]);
        $request = $mock->getLastRequest();
        $this->assertSame('numOfMessages=16&waitseconds=10', $request->getUri()->getQuery());
    }

    public function test_delete_message_deletes_message_from_queue(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->deleteMessage(['QueueName' => 'testing', 'ReceiptHandle' => 'MbZj6wDWli+QEauMZc8ZRv37sIW2iJKq3M9Mx/KSbkJ0']);
        $request = $mock->getLastRequest();
        $this->assertSame('DELETE', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame('ReceiptHandle=MbZj6wDWli+QEauMZc8ZRv37sIW2iJKq3M9Mx/KSbkJ0', $request->getUri()->getQuery());
    }

    public function test_batch_delete_message_deletes_multiple_messages_from_queue(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->batchDeleteMessage([
            'QueueName' => 'testing',
            'ReceiptHandles' => [
                'ReceiptHandle' => [
                    '1-ODU4OTkzNDU5My0xNDM1MTk3NjAwLTItNg==',
                    '1-ODU4OTkzNDU5NC0xNDM1MTk3NjAwLTItNg==',
                    '1-ODU4OTkzNDU5NS0xNDM1MTk3NjAwLTItNg==',
                ],
            ],
        ]);
        $request = $mock->getLastRequest();
        $this->assertSame('DELETE', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame($this->xml(<<<'XML'
        <ReceiptHandles>
            <ReceiptHandle>1-ODU4OTkzNDU5My0xNDM1MTk3NjAwLTItNg==</ReceiptHandle>
            <ReceiptHandle>1-ODU4OTkzNDU5NC0xNDM1MTk3NjAwLTItNg==</ReceiptHandle>
            <ReceiptHandle>1-ODU4OTkzNDU5NS0xNDM1MTk3NjAwLTItNg==</ReceiptHandle>
        </ReceiptHandles>
        XML), (string) $request->getBody());
    }

    public function test_peek_message_peeks_message_from_queue(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->peekMessage(['QueueName' => 'testing']);
        $request = $mock->getLastRequest();
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame('peekonly=true', $request->getUri()->getQuery());
    }

    public function test_batch_peek_message_peeks_multiple_messages_from_queue(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->batchPeekMessage(['QueueName' => 'testing', 'numOfMessages' => 16]);
        $request = $mock->getLastRequest();
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame('peekonly=true&numOfMessages=16', $request->getUri()->getQuery());
    }

    public function test_change_message_visibility_updates_message_next_available_time(): void
    {
        [$mock, $queue] = $this->clients();
        $queue->changeMessageVisibility(['QueueName' => 'testing', 'ReceiptHandle' => 'MbZj6wDWli+QEauMZc8ZRv37sIW2iJKq3M9Mx/KSbkJ0', 'VisibilityTimeout' => 60]);
        $request = $mock->getLastRequest();
        $this->assertSame('PUT', $request->getMethod());
        $this->assertSame('example.com', $request->getUri()->getHost());
        $this->assertSame('/queues/testing/messages', $request->getUri()->getPath());
        $this->assertSame('receiptHandle=MbZj6wDWli+QEauMZc8ZRv37sIW2iJKq3M9Mx/KSbkJ0&visibilityTimeout=60', $request->getUri()->getQuery());
    }

    public function test_queue_exception_should_be_thrown_when_error_occurred(): void
    {
        [$mock, $queue] = $this->clients();
        $mock->setDefaultResponse(new Response(404, [], $this->xml(<<<'XML'
        <Error>
            <Code>MessageNotExist</Code>
            <Message>Message not exist.</Message>
        </Error>
        XML)));
        $this->expectException(QueueException::class);
        $this->expectExceptionMessage('Message not exist.');
        $queue->receiveMessage(['QueueName' => 'testing']);
    }

    /**
     * Render the XML document.
     */
    private function xml(string $document): string
    {
        $xml = new \DOMDocument();

        $xml->loadXML(<<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        $document
        XML, LIBXML_NOBLANKS);

        return $xml->saveXML();
    }

    /**
     * Create testing clients.
     *
     * @return array{0: \Http\Mock\Client, 1: \Dew\Acs\MnsOpen\QueueClient}
     */
    private function clients(): array
    {
        $mock = new Client();

        $queue = new QueueClient([
            'credentials' => [
                'key' => 'foo',
                'secret' => 'bar',
            ],
            'endpoint' => 'https://example.com',
            'http_client' => $mock,
        ]);

        return [$mock, $queue];
    }
}
