<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      background-color: #2d197c;
      height: 100vh;
      width: 100vw;
      position: relative;
    }

    h1 {
      font-weight: bold;
      font-size: 24px;
    }

    .content {
      margin: 10px;
      width: 50vw;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
      background-color: #fff;
    }
  </style>
</head>

<body>
  <div class="content">
    <h1>@yield('title')</h1>
    @yield('content')
  </div>
</body>

</html>