<?php

namespace Deep12650\NovaStripeManager\Clients;

use Illuminate\Support\Facades\Log;
use Exception;
use Stripe\Balance;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\FinancialConnections\Account;
use Stripe\Refund;

class StripeClient
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.stripe.secret');
    }

    public function listCustomers($options = [])
    {
        try {
            return Customer::all($options, ['api_key' => $this->apiKey]);
        } catch (Exception $e) {
        }
    }

    public function getCustomer($id)
    {
        try {
            return Customer::retrieve($id, ['api_key' => $this->apiKey]);
        } catch (Exception $e) {
        }
    }
}
