<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Like;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ExhibitionRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->input('tab', 'recommend');
        $keyword = $request->input('keyword');

        if ($tab === 'mylist') {
            if (auth()->check()) {
                $likedProductIds = Like::where('user_id', auth()->id())->pluck('product_id');
                $query = Product::whereIn('id', $likedProductIds);
            } else {
                $query = collect();
            }
        } else {
            if (auth()->check()) {
                $query = Product::where('seller_id', '!=', auth()->id());
            } else {
                $query = Product::query();
            }
        }

        if ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }
        $products = $query->get();

        return view('product.top', compact('products'));
    }

    public function listing()
    {
        return view('product.listing');
    }

    public function store(ExhibitionRequest $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->seller_id = auth()->id();

        $categoryString = '';
        if ($request->has('categories')) {
            $categoryString = implode(',', $request->input('categories'));
        }
        $product->category = $categoryString;
        $product->brand = $request->input('brand');
        $product->condition = $request->input('condition');
        $product->sold_flag = false;

        if ($request->hasFile('product_image')) {
            $path = $request->file('product_image')->store('product_images', 'public');
            $product->product_image = 'storage/' . $path; // DBには公開パスを保存
        }

        $product->save();

        return redirect()->route('product.index')->with('success', '商品が登録されました。');
    }

    public function show($id)
    {
        $product = Product::find($id);
        $comments = Comment::where('product_id', $id)->with('user')->get();
        $likes = Like::where('product_id', $id)->get();
        $isLiked = Like::where('user_id', auth()->id())->where('product_id', $product->id)->exists();
        return view('product.detail', compact('product', 'comments', 'isLiked', 'likes'));
    }

    public function like(Request $request, $id)
    {
        $userId = auth()->id();
        $like = Like::where('user_id', $userId)->where('product_id', $id)->first();
        if ($like) {
            Like::where('user_id', $userId)->where('product_id', $id)->delete();
        } else {
            Like::create(['user_id' => $userId, 'product_id' => $id]);
        }
        return redirect()->back();
    }

    public function comment(CommentRequest $request, $id)
    {
        Comment::create([
            'product_id' => $id,
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
        ]);
        return redirect()->back();
    }
}
