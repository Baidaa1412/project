<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders =Order::paginate(8);
        return view ('Admin.orders')->with('orders', $orders);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Order ::create($input);
          return redirect('orders')->with('flash_message', ' order Addedd!');}



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return abort(404); // Handle category not found.
        }

        $input = $request->all();

        if ($request->hasFile('ImageURL')) {
            $file = $request->file('ImageURL');
            $fileName = $file->getClientOriginalName();
            $file->move('images', $fileName);
            $input['ImageURL'] = $fileName;
        }

        $order->update($input);
        return redirect('orders')->with('success', ' update done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id): RedirectResponse
{
    Order::destroy($id);
    return redirect('orders')->with('flash_message', 'order deleted!');
}
}
