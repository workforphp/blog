<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>视图传参</title>
</head>
<body>
{{--<h2>{{$data}}</h2>--}}
{{--<h2>{{$name}}</h2>--}}
{{--<h2>{{$heigh}}</h2>--}}
{{--<h2>{{$age}}</h2>--}}
<form action="get-valid" method="post">
    <input type="text" placeholder="输入验证码" name="valid">
    {{csrf_field()}}
    <img class="thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
    <button>提交</button>
</form>
</body>
</html>