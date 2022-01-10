<?php

namespace Swis\Guzzle\Fixture;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Swis\Http\Fixture\ResponseBuilderInterface;

class Handler extends MockHandler
{
    /**
     * @var \Swis\Http\Fixture\ResponseBuilderInterface
     */
    protected ResponseBuilderInterface $responseBuilder;

    /**
     * @param \Swis\Http\Fixture\ResponseBuilderInterface $responseBuilder
     * @param array|null                                  $queue
     * @param callable|null                               $onFulfilled
     * @param callable|null                               $onRejected
     */
    public function __construct(
        ResponseBuilderInterface $responseBuilder,
        array $queue = null,
        callable $onFulfilled = null,
        callable $onRejected = null
    ) {
        $this->responseBuilder = $responseBuilder;
        parent::__construct($queue, $onFulfilled, $onRejected);
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array                              $options
     *
     * @throws \RuntimeException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function __invoke(RequestInterface $request, array $options): PromiseInterface
    {
        $this->append($this->responseBuilder->build($request));

        return parent::__invoke($request, $options);
    }
}
