<?php

namespace Rdtvaacar\LaravelPos\Integrators;

use Illuminate\Http\Client\Response;
use Rdtvaacar\LaravelPos\PaymentBuilder;

abstract class Pos
{
    protected PaymentBuilder $paymentBuilder;

    public function __construct(PaymentBuilder $paymentBuilder)
    {
        $this->paymentBuilder = $paymentBuilder;
    }

    /**
     * Charge customer for the given amount with given credit card.
     *
     * @return Response
     */
    abstract public function charge(): Response;
}
