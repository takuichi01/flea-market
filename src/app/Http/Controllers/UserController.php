<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Purchase;

class UserController extends Controller
{
    //
    public function profile()
    {
        $user = auth()->user();
        $listedProducts = Product::where('seller_id', $user->id)->get();
        $purchaseProducts = Product::whereIn('id', Purchase::where('buyer_id', $user->id)->pluck('product_id'))->get();
        return view('user.profile', compact('user', 'listedProducts', 'purchaseProducts'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('user.setting_profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->postcode = $request->input('postcode');
        $user->address = $request->input('address');
        $user->building = $request->input('building');

        // ファイルアップロード
        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = 'storage/' . $path; // DBには公開パスを保存
        }

        $user->save();

        return redirect()->route('user.profile')->with('success', 'プロフィールが更新されました。');
    }
}
