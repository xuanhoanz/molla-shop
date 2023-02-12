<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::query()->search()->paginate(10,['*'], 'page', null);

        return view('admin.customers.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->id = $request->id;
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->note = $request->note;

        $customer->save();
        return redirect()->action([CustomerController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customers.update', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->note = $request->note;

        $customer->save();
        return redirect()->action([CustomerController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);

        $customer->delete();
        return redirect()->action([CustomerController::class, 'index']);
    }
}
