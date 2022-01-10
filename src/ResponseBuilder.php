<?php

namespace Swis\Guzzle\Fixture;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Swis\Http\Fixture\ResponseBuilder as BaseResponseBuilder;

class ResponseBuilder extends BaseResponseBuilder
{
    /**
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @throws \RuntimeException
     * @throws \Swis\Http\Fixture\MockNotFoundException
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function build(RequestInterface $request): Response
    {
        return new Response(
            $this->getMockStatusForRequest($request),
            $this->getMockHeadersForRequest($request),
            $this->getMockBodyForRequest($request)
        );
    }
}
