<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Customer;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    //
    public function index(CustomerService $customer_service)
    {
        return response()->json($customer_service->getCustomers());
    }

    public function store(Request $request, CustomerService $customer_service)
    {
        $this->validate($request, ['name' => 'required']);
        $customer_service->add($request->json('name'));
    }

    public function show($id)
    {
        return [];
    }

    public function update($id)
    {
        return [];
    }

    public function destroy($id)
    {
        return [];
    }

}
