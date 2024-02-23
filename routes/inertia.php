<?php

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Http\Requests\NovaRequest;

/*
|--------------------------------------------------------------------------
| Tool Routes
|--------------------------------------------------------------------------
|
| Here is where you may register Inertia routes for your tool. These are
| loaded by the ServiceProvider of the tool. The routes are protected
| by your tool's "Authorize" middleware by default. Now - go build!
|
*/

Route::name('nova-stripe-manager')->group(function () {
    Route::get('/', function () {
        return inertia('Tool');
    })->name('');

    Route::get('customers', function () {
        return inertia('Customers');
    })->name('.customers');

    Route::get('customers/{customerId}', function (string $customerId) {
        die($customerId);
        return inertia('CustomerDetail', [
            'customerId' => $customerId,
        ]);
    })->name('.customers.show');
});
