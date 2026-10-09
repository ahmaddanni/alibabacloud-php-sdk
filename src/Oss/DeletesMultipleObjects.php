<?php

declare(strict_types=1);

namespace Dew\Acs\Oss;

use Dew\Acs\Arr;
use Dew\Acs\Plugins\SignRequest;
use Dew\Acs\Result;
use Dew\Acs\XmlEncoder;
use GuzzleHttp\Psr7\Uri;
use Http\Promise\Promise;

/*
 * @method \Dew\Acs\Result deleteMultipleObjects(array $arguments = [])
 */
trait DeletesMultipleObjects
{
    /**
     * @param  array{
     *   bucket: string,
     *   body: array{
     *     Delete: array{
     *       Object: array{
     *         Key: string,
     *         VersionId?: string
     *       }[],
     *       Quiet: bool
     *     }
     *   }
     * }  $arguments
     * @return \Http\Promise\Promise
     */
    public function deleteMultipleObjectsAsync(array $arguments): Promise
    {
        $body = (new XmlEncoder())->encode($arguments['body']);

        $request = $this->newRequest('POST')
            ->withUri(new Uri(sprintf('https://%s.%s?delete', $arguments['bucket'], $this->endpoint)))
            ->withHeader('Content-MD5', base64_encode(hash('md5', $body, binary: true)))
            ->withHeader('Content-Type', 'application/xml')
            ->withBody($this->streamFactory->createStream($body));

        $signer = new AKSignature();
        $signer->setArguments($arguments);

        $client = $this->newClient($this->newStack()
            ->append(SignRequest::withSignature($signer, $this->config))
        );

        return $this->handleResponse($client->sendAsyncRequest($request))
            ->then(function (Result $result): Result {
                $decoded = $result->getDecodedData();
                $deleted = Arr::get($decoded, 'DeleteResult.Deleted');

                if (! is_array($decoded) || array_is_list($decoded)) {
                    return $result;
                }

                // Ensure that the "Deleted" field in the response payload
                // is a list for data consistency, even if there's only
                // one object under after decoding from XML document.
                $decoded['DeleteResult']['Deleted'] = [$decoded['DeleteResult']['Deleted']];

                return (new Result($decoded))->setResponse($result->getResponse());
            });
    }
}
