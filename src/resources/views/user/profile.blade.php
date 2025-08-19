<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>プロフィール</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logo-gt"></span>
            <span>COACHTECH</span>
        </div>
        <input type="text" class="search-box" placeholder="なにをお探しですか？">
        <div class="header-links">
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" class="header-link">ログアウト</button>
            </form>
            <a href="{{ route('user.profile') }}" class="header-link">マイページ</a>
            <a href="{{ route('product.listing') }}" class="header-link header-link-exhibit">出品</a>
        </div>
    </div>
    <div class="profile-area">
        <div class="profile-image"><img src="{{ $user->profile_image }}"></div>
        <div class="profile-info">
            <div class="profile-name">{{ $user->name }}</div>
        </div>
        <a href="{{ route('user.edit') }}" class="btn-edit">プロフィールを編集</a>
    </div>
    <div class="tab-area">
        <a href="{{ route('user.profile', ['tab' => 'sell']) }}"
            class="tab{{ request('tab', 'sell') == 'sell' ? ' active' : '' }}">出品した商品</a>
        <a href="{{ route('user.profile', ['tab' => 'buy']) }}"
            class="tab{{ request('tab') == 'buy' ? ' active' : '' }}">購入した商品</a>
    </div>
    <hr class="tab-border">
    <div class="products">
        @if (request('tab', 'sell') == 'sell')
        @foreach ($listedProducts as $product)
        <div class="product-card">
            <div class="product-image"><img src="{{ $product->product_image }}" alt="商品画像"></div>
            <div class="product-name">{{ $product->name }}</div>
        </div>
        @endforeach
        @elseif (request('tab') == 'buy')
        @foreach ($purchaseProducts as $product)
        <div class="product-card">
            <div class="product-image"><img src="{{ $product->product_image }}" alt="商品画像"></div>
            <div class="product-name">{{ $product->name }}</div>
        </div>
        @endforeach
        @endif
    </div>
</body>

</html>