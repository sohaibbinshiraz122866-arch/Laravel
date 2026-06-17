<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    body { font-family: Arial, sans-serif; margin: 40px; }
    .box { max-width: 420px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
    label { display:block; margin-top: 12px; font-weight: 600; }
    input { width: 100%; padding: 10px; margin-top: 6px; box-sizing: border-box; }
    button { margin-top: 16px; width: 100%; padding: 10px; }
    .hint { color:#666; font-size: 13px; margin-top: 10px; }
  </style>
</head>
<body>
  <div class="box">
    <h2>Login</h2>

    @if (session('status'))
      <div style="padding:10px;background:#f0f8ff;border:1px solid #b3d4ff;border-radius:6px; margin-top:10px;">
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
      @csrf

      <label for="email">Email</label>
      <input id="email" type="email" name="email" required autofocus />

      <label for="password">Password</label>
      <input id="password" type="password" name="password" required />

      <button type="submit" onclick="event.preventDefault(); window.location='{{ url('/') }}';">Login</button>


      <div class="hint">
        Note: This is a placeholder UI. Add POST /login handling later if needed.
        <div style="margin-top:8px;">Don’t have an account? <a href="{{ url('/register') }}">Register</a></div>
      </div>
    </form>
  </div>
</body>
</html>


