<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>購入手続き</title>
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logo-gt"></span>
            <span>COACHTECH</span>
        </div>
        <input type="text" class="search-box" placeholder="なにをお探しですか？">
        <div class="header-links">
            <a href="#" class="header-link">ログアウト</a>
            <a href="#" class="header-link">マイページ</a>
            <a href="#" class="header-link header-link-exhibit">出品</a>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <div class="product-area">
                <div class="product-image"><img src="{{ $product->product_image }}" alt="no image"></div>
                <div class="product-info">
                    <div class="product-name">{{ $product->name }}</div>
                    <div class="product-price">¥ {{ number_format($product->price) }}</div>
                </div>
            </div>
            <hr>
            <div class="form-area">
                <div class="form-group">
                    <label for="payment">支払い方法</label>
                    <form method="GET" action="{{ route('purchase.show', $product->id) }}">
                        <select id="payment" name="payment" onchange="this.form.submit()">
                            <option value="" disabled {{ empty($payment) ? 'selected' : '' }} hidden>選択してください</option>
                            <option value="store" {{ $payment=='store' ? 'selected' : '' }}>コンビニ払い</option>
                            <option value="credit" {{ $payment=='credit' ? 'selected' : '' }}>カード支払い</option>
                        </select>
                    </form>
                </div>
            </div>
            <hr>
            <div class="address-area">
                <div class="address-label">配送先</div>
                <div class="address-info">
                    <div class="address-postal">〒 {{ $user->postcode }}</div>
                    <div class="address-detail">{{ $user->address }} {{ $user->building }}</div>
                    <a href="{{ route('user.edit') }}" class="address-change">変更する</a>
                </div>
            </div>
            <hr>
        </div>
        <div class="right">
            <div class="summary-box">
                <div class="summary-row">
                    <span>商品代金</span>
                    <span>¥ {{ number_format($product->price) }}</span>
                </div>
                <div class="summary-row">
                    <span>支払い方法</span>
                    <span>
                        @if($payment == 'store')
                        コンビニ払い
                        @elseif($payment == 'credit')
                        カード支払い
                        @else
                        未選択
                        @endif
                    </span>
                </div>
            </div>
            <form action="{{ route('purchase.store', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn-purchase">購入する</button>
            </form>
        </div>
    </div>
</body>

</html>