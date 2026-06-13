<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS System</title>
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-900">

  <nav class="bg-white shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        
        <div class="flex-shrink-0 flex items-center gap-2">
          <svg class="h-8 w-auto text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.263 15.918a9 9 0 1 0 15.474 0M12 3v13.5M9 16.5v.008H9.008V16.5H9Zm6 0v.008h.008V16.5H15Z" />
          </svg>
          <span class="font-bold text-xl tracking-tight text-gray-900">SMS System</span>
        </div>

        <div class="flex items-center">
          <a href="{{ url('/') }}" class="text-sm font-medium text-gray-600 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 py-1 transition-colors duration-200">
            Admission
          </a>
        </div>

      </div>
    </div>
  </nav>

  <!-- Main Content Container -->
<main class="max-w-3xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
  
  <!-- Form Card -->
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-10">
    
    <!-- Form Header -->
    <div class="mb-8 border-b border-gray-100 pb-6">
      <h2 class="text-2xl font-bold text-gray-900">Application for Admission</h2>
      <p class="mt-1 text-sm text-gray-500">Please fill out all the required information carefully.</p>
    </div>


    <form action="{{ route('student_info') }}" method="POST" class="space-y-8">
      @csrf
      
      <!-- Section 1: Personal Information -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-blue-600 mb-4">Personal Information</h3>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
          <div>
            <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" id="full-name" name="full-name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-sm">
            @error('full_name')
            <span class="text-red-500">{{ $message }}</span>
          </div>

          <div>
            <label for="parent-name" class="block text-sm font-medium text-gray-700 mb-1">Parent / Guardian's Name</label>
            <input type="text" id="parent-name" name="parent-name" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-sm">
          </div>

          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-sm">
          </div>

          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-sm">
          </div>

          <div class="sm:col-span-2">
            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Street Address</label>
            <input type="text" id="address" name="address" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-sm">
          </div>
        </div>
      </div>

      <hr class="border-gray-100">

      <!-- Section 2: Payment Information -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-blue-600 mb-4">Payment Information</h3>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
          
          <div class="sm:col-span-2">
            <label for="payment-method" class="block text-sm font-medium text-gray-700 mb-1">Payment Method</label>
            <select id="payment-method" name="payment-method" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-sm bg-white">
              <option value="">Select a method</option>
              <option value="credit-card">Credit / Debit Card</option>
              <option value="bank-transfer">Bank Transfer</option>
              <option value="bkash">Mobile Banking</option>
            </select>
          </div>

          <div>
            <label for="transaction-id" class="block text-sm font-medium text-gray-700 mb-1">Transaction ID / Reference</label>
            <input type="text" id="transaction-id" name="transaction-id" required placeholder="e.g. TXN12345678" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-sm">
          </div>

          <div>
            <label for="amount" class="block text-sm font-medium text-gray-700 mb-1">Amount Paid ($)</label>
            <input type="number" id="amount" name="amount" required min="1" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-sm">
          </div>

        </div>
      </div>

      <!-- Submit Button -->
      <div class="pt-4">
        <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-lg shadow-sm hover:shadow transition-all duration-150 cursor-pointer focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
          Submit Application
        </button>
      </div>

    </form>
  </div>
</main>

</body>
</html>