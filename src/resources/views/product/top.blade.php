{{-- filepath: src/resources/views/product/top.blade.php --}}
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>商品一覧</title>
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logo-gt"></span>
            <span>COACHTECH</span>
        </div>
        <form method="GET" action="{{ route('product.index') }}" class="search-form">
            <input type="text" class="search-box" name="keyword" value="{{ request('keyword') }}"
                placeholder="なにをお探しですか？">
            <button type="submit" class="search-btn">検索</button>
        </form>
        <div class="header-links">
            @if (Auth::check())
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="header-link">ログアウト</button>
            </form>
            @else
            <a href="{{ route('login') }}" class="header-link">ログイン</a>
            @endif
            <a href="{{ route('user.profile') }}" class="header-link">マイページ</a>
            <a href="{{ route('product.listing') }}" class="header-link header-link-exhibit">出品</a>
        </div>
    </div>
    <div class="tab-area">
        <div class="tabs">
            <a href="{{ route('product.index', ['tab' => 'recommend', 'keyword' => request('keyword')]) }}"
                class="tab{{ request('tab') !== 'mylist' ? ' active' : '' }}">おすすめ</a>
            <a href="{{ route('product.index', ['tab' => 'mylist', 'keyword' => request('keyword')]) }}"
                class="tab{{ request('tab') === 'mylist' ? ' active' : '' }}">マイリスト</a>
        </div>
    </div>
    <hr class="tab-border">
    <div class="products">
        @foreach ($products as $product)
        <div class="product-card">
            <a href="{{ route('product.show', $product->id) }}">
                <div class="product-image" style="background-image: url('{{ $product->product_image }}');">
                    @if ($product->sold_flag)
                    <span class="sold-label">Sold</span>
                    @endif
                </div>
            </a>
            <div class="product-name">{{ $product->name }}</div>
            <div class="product-price">¥{{ number_format($product->price) }}</div>
        </div>
        @endforeach
    </div>
    </div>
</body>

</html>