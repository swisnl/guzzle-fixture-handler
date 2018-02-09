<?php

namespace Swis\Guzzle\Fixture\Tests;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Uri;
use PHPUnit\Framework\TestCase;
use Swis\Guzzle\Fixture\Handler;
use Swis\Http\Fixture\ResponseBuilderInterface;

class HandlerTest extends TestCase
{
    /**
     * @test
     */
    public function it_calls_the_response_builder_on_invoke()
    {
        $request = new Request('GET', new Uri('http://example.com'));
        /** @var \PHPUnit_Framework_MockObject_MockObject|\Swis\Http\Fixture\ResponseBuilderInterface $responseBuilder */
        $responseBuilder = $this->getMockBuilder(ResponseBuilderInterface::class)->getMock();
        $responseBuilder->expects($this->once())
            ->method('build')
            ->with($request)
            ->willReturn(new Response());

        $handler = new Handler($responseBuilder);
        /* @noinspection ImplicitMagicMethodCallInspection */
        $handler->__invoke($request, []);
    }
}
