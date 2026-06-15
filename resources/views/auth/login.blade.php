<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Welcome Back</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-50 flex min-h-screen items-center justify-center p-4 antialiased">

  <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl shadow-slate-100 border border-slate-100">

    <div class="mb-8 text-center">
      <h1 class="text-2xl font-bold tracking-tight text-slate-900">Welcome back</h1>
      <p class="mt-2 text-sm text-slate-500">Please enter your details to sign in</p>
    </div>

    <form action="{{ route('login') }}" method="POST" class="space-y-5">
      @csrf~
      <div>
        <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email address</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          placeholder="you@example.com"
          class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
      </div>

      <div>
        <div class="flex items-center justify-between mb-1.5">
          <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
          <a href="#" class="text-xs font-semibold text-blue-600 hover:text-blue-500 transition">Forgot password?</a>
        </div>
        <input
          type="password"
          id="password"
          name="password"
          required
          placeholder="••••••••"
          class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
      </div>

      <div class="flex items-center">
        <input
          type="checkbox"
          id="remember-me"
          name="remember-me"
          class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
        <label for="remember-me" class="ml-2 block text-sm text-slate-600 select-none">Remember me for 30 days</label>
      </div>

      <button
        type="submit"
        class="w-full rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-md shadow-blue-100 hover:bg-blue-700 active:scale-[0.98] transition">
        Sign in
      </button>

    </form>

    <p class="mt-8 text-center text-sm text-slate-500">
      Don't have an account?
      <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:text-blue-500 transition">Sign up</a>
    </p>

  </div>

</body>

</html>