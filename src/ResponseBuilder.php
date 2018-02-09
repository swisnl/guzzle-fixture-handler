<?php

namespace Swis\Guzzle\Fixture;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Swis\Http\Fixture\ResponseBuilder as BaseResponseBuilder;

class ResponseBuilder extends BaseResponseBuilder
{
    /**
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @throws \RuntimeException
     * @throws \Swis\Http\Fixture\MockNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|\GuzzleHttp\Psr7\Response
     */
    public function build(RequestInterface $request): ResponseInterface
    {
        $response = new Response(
            $this->getMockStatusForRequest($request),
            $this->getMockHeadersForRequest($request),
            $this->getMockBodyForRequest($request)
        );

        return $response;
    }
}
