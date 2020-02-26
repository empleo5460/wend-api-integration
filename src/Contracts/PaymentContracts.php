<?php

namespace wempleo\paymentapi\Contracts;

use Illuminate\Contracts\Foundation\Application;

class PaymentContracts
{
    /**
     * The payment instance.
     */
    protected $payment;

    /**
     * Create a new repository instance.
     *
     * @param Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}