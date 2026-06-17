<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    body { font-family: Arial, sans-serif; margin: 40px; }
    .box { max-width: 480px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
    label { display:block; margin-top: 12px; font-weight: 600; }
    input { width: 100%; padding: 10px; margin-top: 6px; box-sizing: border-box; }
    button { margin-top: 16px; width: 100%; padding: 10px; }
    .hint { color:#666; font-size: 13px; margin-top: 10px; }
    a { color:#0b66c3; text-decoration:none; }
  </style>
</head>
<body>
  <div class="box">
    <h2>Register</h2>
    <p style="margin-top:-6px;">
      Already have an account? <a href="{{ url('/login') }}">Login</a>
    </p>

    <form method="POST" action="{{ url('/register') }}" onsubmit="window.location='{{ url('/login') }}'; return false;">
      @csrf

      <label for="name">Name</label>
      <input id="name" type="text" name="name" required />

      <label for="email">Email</label>
      <input id="email" type="email" name="email" required />

      <label for="password">Password</label>
      <input id="password" type="password" name="password" required />

      <label for="password_confirmation">Confirm Password</label>
      <input id="password_confirmation" type="password" name="password_confirmation" required />

      <button type="submit">Create Account</button>

      <div class="hint">
        Placeholder UI. Add POST /register handling later.
      </div>
    </form>
  </div>
</body>
</html>

