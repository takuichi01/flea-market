{{-- filepath: resources/views/verify-email.blade.php --}}
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>メール認証</title>
    <link rel="stylesheet" href="{{ asset('css/verify-email.css') }}">
</head>

<body>
    <div class="header">
        <div class="logo">
            <span class="logo-gt"></span>
            <span>COACHTECH</span>
        </div>
    </div>
    <div class="container">
        <div class="message">
            登録していただいたメールアドレスに認証メールを送付しました。<br>
            メール認証を完了してください。
        </div>
        <a href="#" class="btn-verify">認証はこちらから</a>
        <div class="resend-link">
            <a href="#">認証メールを再送する</a>
        </div>
    </div>
</body>

</html>