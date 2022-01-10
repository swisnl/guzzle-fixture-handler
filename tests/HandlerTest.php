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
    public function itCallsTheResponseBuilderOnInvoke()
    {
        $request = new Request('GET', new Uri('https://example.com'));
        /** @var \PHPUnit\Framework\MockObject\MockObject&\Swis\Http\Fixture\ResponseBuilderInterface $responseBuilder */
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
