<?php

namespace Deep12650\NovaStripeManager\Http;

use Illuminate\Routing\Controller;
use Deep12650\NovaStripeManager\Clients\StripeClient;

class StripeCustomersController extends Controller
{
    public function index()
    {
        return response()->json(['customers' => (new StripeClient)->listCustomers()]);
    }

    public function show($id)
    {
        $customer = (new StripeClient)->getCustomer($id);

        return response()->json(['customer' => $customer]);
    }
}
