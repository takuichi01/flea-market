<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>商品の出品</title>
    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">
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
            <a href="{{ route('user.profile') }}" class="header-link">マイページ</a>
            <a href="{{ route('product.listing') }}" class="header-link header-link-exhibit">出品</a>
        </div>
    </div>
    <div class="container">
        <h2 class="title">商品の出品</h2>
        <form class="listing-form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-section">
                <label class="section-label">商品画像</label>
                <div class="image-upload-area">
                    <input type="file" name="product_image" id="product_image" style="display:none;">
                    <button type="button" class="btn-image" onclick="document.getElementById('product_image').click();">
                        画像を選択する
                    </button>
                </div>
            </div>
            <div class="form-section">
                <label class="section-label">商品詳細</label>
                <hr>
                <div class="category-area">
                    <div class="category-label">カテゴリー</div>
                    <div class="category-tags">
                        @foreach(['ファッション','電化','インテリア','レディース','メンズ','コスメ','本','ゲーム','スポーツ','キッチン','ハンドメイド','アクセサリー','おもちゃ','ベビー・キッズ']
                        as
                        $cat)
                        <label class="category-tag">
                            <input type="checkbox" name="categories[]" value="{{ $cat }}" style="display:none;">
                            <span>{{ $cat }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label for="condition">商品の状態</label>
                    <select id="condition" name="condition">
                        <option disabled hidden selected>選択してください</option>
                        <option>良好</option>
                        <option>目立った傷や汚れなし</option>
                        <option>やや傷や汚れあり</option>
                        <option>状態が悪い</option>
                    </select>
                </div>
            </div>
            <div class="form-section">
                <label class="section-label">商品名と説明</label>
                <hr>
                <div class="form-group">
                    <label for="name">商品名</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="brand">ブランド名</label>
                    <input type="text" id="brand" name="brand">
                </div>
                <div class="form-group">
                    <label for="description">商品の説明</label>
                    <textarea id="description" name="description" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">販売価格</label>
                    <input type="text" id="price" name="price" placeholder="¥">
                </div>
            </div>
            <button type="submit" class="btn-submit">出品する</button>
        </form>
    </div>
    <script src="{{ asset('js/listing.js') }}"></script>
</body>

</html>