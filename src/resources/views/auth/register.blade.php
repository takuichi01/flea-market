{{-- filepath: resources/views/register.blade.php --}}
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logo-gt"></span>
            <span>COACHTECH</span>
        </div>
    </div>
    <div class="container">
        <div class="title">会員登録</div>
        <form class="form" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">ユーザー名</label>
                <input type="text" id="name" name="name">
            </div>
            @if ($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
            @endif
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email">
            </div>
            @if ($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
            @endif
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password">
            </div>
            @if ($errors->has('password'))
            <div class="error">{{ $errors->first('password') }}</div>
            @endif
            <div class="form-group">
                <label for="password_confirmation">確認用パスワード</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn-submit">登録する</button>
        </form>
        <div class="login-link">
            <a href="{{ route('login') }}">ログインはこちら</a>
        </div>
    </div>
</body>

</html>