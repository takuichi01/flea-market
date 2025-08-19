{{-- filepath: resources/views/login.blade.php --}}
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logo-gt"></span>
            <span>COACHTECH</span>
        </div>
    </div>
    <div class="container">
        <div class="title">ログイン</div>
        <form class="form" action="{{ route('login') }}" method="POST">
            @csrf
            @if ($errors->has('auth'))
            @foreach ($errors->get('auth') as $error)
            <div class="error">{{ $error }}</div>
            @endforeach
            @endif
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email">
            </div>
            @if ($errors->has('email'))
            @foreach ($errors->get('email') as $error)
            <div class="error">{{ $error }}</div>
            @endforeach
            @endif
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password">
            </div>
            @if ($errors->has('password'))
            @foreach ($errors->get('password') as $error)
            <div class="error">{{ $error }}</div>
            @endforeach
            @endif
            <button type="submit" class="btn-submit">ログインする</button>
        </form>
        <div class="register-link">
            <a href="{{ route('register') }}">会員登録はこちら</a>
        </div>
    </div>
</body>

</html>