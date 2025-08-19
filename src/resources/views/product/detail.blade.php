<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>商品詳細</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logo-gt"></span>
            <span>COACHTECH</span>
        </div>
        <input type="text" class="search-box" placeholder="なにをお探しですか？">
        <div class="header-links">
            <a href="#" class="header-link">ログイン</a>
            <a href="#" class="header-link">マイページ</a>
            <a href="#" class="header-link header-link-exhibit">出品</a>
        </div>
    </div>
    <div class="main">
        <div class="product-image" style="background-image: url('{{ $product->product_image }}')"></div>
        <div class="product-detail">
            <div class="product-title">
                <h2>{{ $product->name }}</h2>
                <div class="brand">{{ $product->brand }}</div>
                <div class="price">¥{{ number_format($product->price) }} <span class="tax">(税込)</span></div>
                <div class="icons">
                    <form action="{{ route('product.like', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" style="background:none;border:none;cursor:pointer;">
                            @if ($isLiked)
                            <span class="icon-star-yellow">★</span>
                            @else
                            <span class="icon-star">☆</span>
                            @endif
                        </button>
                    </form>
                    <span class="icon-count">{{ $likes->count() }}</span>
                    <span class="icon-comment">💬</span>
                    <span class="icon-count">{{ $comments->count() }}</span>
                </div>
                <a href="{{ route('purchase.show', $product->id) }}" class="btn-buy">購入手続きへ</a>
            </div>
            <div class="product-description">
                <h3>商品説明</h3>
                <p>{{ $product->description }}</p>
            </div>
            <div class="product-info">
                <h3>商品の情報</h3>
                <div class="info-row">
                    <span class="info-label">カテゴリー</span>
                    @foreach ($product->category_list as $category)
                    <span class="category-tag">{{ $category }}</span>
                    @endforeach
                </div>
                <div class="info-row">
                    <span class="info-label">商品の状態</span>
                    <span>{{ $product->condition }}</span>
                </div>
            </div>
            <div class="comments">
                <h3>コメント({{ $comments->count() }})</h3>
                @forelse ($comments as $comment)
                <div class="comment">
                    <div class="comment-user">
                        <span class="user-icon">{{ $comment->user->profile_image }}</span>
                        <span class="user-name">{{ $comment->user->name }}</span>
                    </div>
                    <div class="comment-text">{{ $comment->content }}</div>
                </div>
                @empty
                @endforelse

                @auth
                <form class="comment-form" action="{{ route('comment.store', $product->id) }}" method="POST">
                    @csrf
                    <label for="comment-input" class="comment-label">商品へのコメント</label>
                    <textarea id="comment-input" name="content" rows="5"></textarea>
                    @error('content')
                    <div class="error-message" style="color:red">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn-comment">コメントを送信する</button>
                </form>
                @else
                <label for="comment-input" class="comment-label">商品へのコメント</label>
                <div class="comment-login-message">
                    コメントを投稿するには<a href="{{ route('login') }}">ログイン</a>してください
                </div>
                @endauth
            </div>
        </div>
    </div>
</body>

</html>