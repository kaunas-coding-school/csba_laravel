<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return Address::all();
    }

    public function store(StoreAddressRequest $request)
    {
        try {
            $rules = (new StoreAddressRequest())->rules();
            $validatedData = $request->validate($rules);

            $address = Address::factory()->create($validatedData);
            $address->save();
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }

        return ['message' => "Stored"];
    }
}
