<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>プロフィール設定</title>
    <link rel="stylesheet" href="{{ asset('css/setting_profile.css') }}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logo-gt"></span>
            <span>COACHTECH</span>
        </div>
        <input type="text" class="search-box" placeholder="なにをお探しですか？">
        <div class="header-links">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="header-link">ログアウト</button>
            </form>
            <a href="#" class="header-link">マイページ</a>
            <a href="#" class="header-link header-link-exhibit">出品</a>
        </div>
    </div>
    <div class="container">
        <h2 class="title">プロフィール設定</h2>
        <form class="profile-form" method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
            {{-- CSRFトークン --}}
            @csrf
            <div class="profile-image-area">
                <div class="profile-image">
                    @if($user->profile_image)
                    <img src="{{ asset($user->profile_image) }}" alt="プロフィール画像">
                    @endif
                </div>
                <input type="file" name="profile_image" id="profile_image" style="display:none;">
                <button type="button" class="btn-image"
                    onclick="document.getElementById('profile_image').click();">画像を選択する</button>
            </div>
            <div class="form-group">
                <label for="name">ユーザー名</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="postal">郵便番号</label>
                <input type="text" id="postcode" name="postcode" value="{{ $user->postcode }}">
            </div>
            <div class="form-group">
                <label for="address">住所</label>
                <input type="text" id="address" name="address" value="{{ $user->address }}">
            </div>
            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" id="building" name="building" value="{{ $user->building }}">
            </div>
            <button type="submit" class="btn-update">更新する</button>
        </form>
    </div>
</body>

</html>