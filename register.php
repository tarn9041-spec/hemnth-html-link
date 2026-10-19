<?php
// Simple placeholder register page - no backend processing.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Register - HemnthApp</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-6">
    <div class="text-center mb-4">
      <img src="https://host.hemnthapp.shop/uploads/ewMmRtlK0S.png" alt="Logo" class="mx-auto h-16 w-16 rounded-lg">
      <h1 class="mt-3 text-2xl font-bold">Create your Hemnth account</h1>
      <p class="text-sm text-gray-500">This is a demo registration page — no account is created.</p>
    </div>
    <form id="registerForm" onsubmit="handleRegister(event)">
      <label class="block text-sm font-medium text-gray-700">Name</label>
      <input id="name" type="text" required class="mt-1 mb-3 w-full px-3 py-2 border rounded" placeholder="Full name">
      <label class="block text-sm font-medium text-gray-700">Email</label>
      <input id="email" type="email" required class="mt-1 mb-3 w-full px-3 py-2 border rounded" placeholder="you@example.com">
      <label class="block text-sm font-medium text-gray-700">Password</label>
      <input id="password" type="password" required class="mt-1 mb-4 w-full px-3 py-2 border rounded" placeholder="Password">
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded font-semibold"><i class="fas fa-user-plus mr-2"></i>Register</button>
    </form>
    <p class="text-center text-sm text-gray-500 mt-4">Already have an account? <a href="login.php" class="text-blue-600 font-medium">Login</a></p>
    <div id="msg" class="hidden mt-4 p-3 text-sm rounded"></div>
  </div>

<script>
function showMessage(text, ok=true){
  const d = document.getElementById('msg');
  d.textContent = text;
  d.className = (ok? 'mt-4 p-3 bg-green-100 text-green-800 rounded' : 'mt-4 p-3 bg-red-100 text-red-800 rounded');
  d.classList.remove('hidden');
}
function handleRegister(e){
  e.preventDefault();
  if(document.getElementById('name').value && document.getElementById('email').value && document.getElementById('password').value){
    showMessage('Demo registration successful — no real account was created.');
  } else {
    showMessage('Please fill all fields.', false);
  }
}
</script>
</body>
</html>
