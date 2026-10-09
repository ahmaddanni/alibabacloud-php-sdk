<?php

declare(strict_types=1);

namespace Dew\Acs\Oss;

trait SignsUrl
{
    public function urlToDownload(string $bucket, string $object, int $expires = 900): string
    {
        return $this->signUrl('GET', $bucket, $object, $expires);
    }

    /**
     * @param  array<string, string>  $headers
     */
    public function urlToUpload(string $bucket, string $object, int $expires = 900, array $headers = []): string
    {
        return $this->signUrl('PUT', $bucket, $object, $expires, $headers);
    }

    /**
     * @param  'GET'|'PUT'  $method
     * @param  array<string, string>  $headers
     */
    private function signUrl(string $method, string $bucket, string $key, int $expires, array $headers = []): string
    {
        $request = $this->requestFactory->createRequest(
            $method, $this->uriFactory->createUri(sprintf('https://%s.%s/%s',
                $bucket, $this->endpoint, $key
            ))
        );

        if ($headers !== []) {
            foreach ($headers as $name => $value) {
                $request = $request->withHeader($name, $value);
            }
        }

        $signer = new V4SignatureOnUrl();
        $signer->setArguments([
            'bucket' => $bucket,
            'key' => $key,
            'expires' => $expires,
        ]);

        $request = $signer->signRequest($request, $this->config);

        return (string) $request->getUri();
    }
}
