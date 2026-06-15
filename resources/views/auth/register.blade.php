<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Create an Account</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-50 flex min-h-screen items-center justify-center p-4 antialiased">

  <!-- Register Card Container -->
  <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl shadow-slate-100 border border-slate-100">

    <!-- Header -->
    <div class="mb-8 text-center">
      <h1 class="text-2xl font-bold tracking-tight text-slate-900">Create an account</h1>
      <p class="mt-2 text-sm text-slate-500">Get started by filling out the details below</p>
    </div>

    <!-- Form -->
    <form action="{{ route('register') }}" method="POST" class="space-y-5">
        @csrf
      <!-- Full Name Input -->
      <div>
        <label for="name" class="block text-sm font-medium text-slate-700 mb-1.5">Full name</label>
        <input
          type="text"
          id="name"
          name="name"
          required
          placeholder="John Doe"
          class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

          @error('name')
          <span class="text-red-500">{{ $message }}</span>
          @enderror
      </div>

      <!-- Email Input -->
      <div>
        <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email address</label>
        <input
          type="none"
          id="email"
          name="email"
          required
          placeholder="you@example.com"
          class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
           @error('email')
          <span class="text-red-500">{{ $message }}</span>
          @enderror
      </div>

      <!-- Password Input -->
      <div>
        <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          required
          placeholder="••••••••"
          class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
        <p class="mt-1.5 text-xs text-slate-400">Must be at least 8 characters long.</p>
         @error('password')
          <span class="text-red-500">{{ $message }}</span>
          @enderror
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5">Confirm password</label>
        <input
          type="password"
          id="password"
          name="password_confirmation"
          required
          placeholder="••••••••"
          class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
      </div>

      <!-- Terms & Conditions Checkbox -->
      <div class="flex items-start">
        <div class="flex h-5 items-center">
          <input
            type="checkbox"
            id="terms"
            name="terms"
            required
            class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
        </div>
        <div class="ml-2 text-sm">
          <label for="terms" class="text-slate-600 select-none">
            I agree to the <a href="#" class="font-semibold text-blue-600 hover:text-blue-500 transition">Terms of Service</a> and <a href="#" class="font-semibold text-blue-600 hover:text-blue-500 transition">Privacy Policy</a>
          </label>
        </div>
      </div>

      <!-- Submit Button -->
      <button
        type="submit"
        class="w-full rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-md shadow-blue-100 hover:bg-blue-700 active:scale-[0.98] transition">
        Get started
      </button>

    </form>

    <!-- Footer / Alternative Action -->
    <p class="mt-8 text-center text-sm text-slate-500">
       Have an account?
      <a href="{{ route('login') }}" class="font-semibold text-blue-600 hover:text-blue-500 transition">Sign in</a>
    </p>

  </div>

</body>

</html>