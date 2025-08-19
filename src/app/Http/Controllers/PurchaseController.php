<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PurchaseRequest;


class PurchaseController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $user = auth()->user();
        $payment = request('payment');

        return view('purchase.purchase', compact('product', 'user', 'payment'));
    }

    public function store(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $user = auth()->user();

        DB::transaction(function () use ($user, $product) {
            Purchase::create([
                'buyer_id' => $user->id,
                'product_id' => $product->id,
                'price' => $product->price,
                'postcode' => $user->postcode,
                'address' => $user->address,
                'building' => $user->building,
            ]);

            $product->sold_flag = true;
            $product->save();
        });

        return redirect()->route('product.index');
    }
}
