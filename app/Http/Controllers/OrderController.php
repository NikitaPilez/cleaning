<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Service;

class OrderController extends Controller
{
    public function showForm()
    {
        $services = Service::get();

        return view('index.form', [
            'services' => $services,
        ]);
    }

    public function ordering(Request $request)
    {
        $service_id = Service::where('title', $request->service)->first()->id;

        $order = new Order;
        $order->name = $request->name; 
        $order->surname = $request->surname;  
        $order->phone = $request->telephone;   
        $order->email = $request->email;    
        $order->city = $request->city; 
        $order->street = $request->street;
        $order->date = $request->dateofbirth;
        $order->time = $request->datetime;
        $order->service_id = $service_id;
        $order->save();
        
        return response()->view('index.thanks', compact('order'), 200)->header("Refresh", "5;url=/");
    }
}
