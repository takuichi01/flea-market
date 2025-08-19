{{-- filepath: src/resources/views/user/change_address.blade.php --}}
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>住所の変更</title>
    <link rel="stylesheet" href="{{ asset('css/change_address.css') }}">
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
    <div class="container">
        <h2 class="title">住所の変更</h2>
        <form class="address-form">
            <div class="form-group">
                <label for="postal">郵便番号</label>
                <input type="text" id="postal" name="postal">
            </div>
            <div class="form-group">
                <label for="address">住所</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" id="building" name="building">
            </div>
            <button type="submit" class="btn-update">更新する</button>
        </form>
    </div>
</body>

</html>