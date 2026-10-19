<?php
// Simple placeholder login page - no backend authentication included.
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login - HemnthApp</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-6">
    <div class="text-center mb-4">
      <img src="https://host.hemnthapp.shop/uploads/ewMmRtlK0S.png" alt="Logo" class="mx-auto h-16 w-16 rounded-lg">
      <h1 class="mt-3 text-2xl font-bold">Sign in to HemnthApp</h1>
      <p class="text-sm text-gray-500">Use this demo login page — no backend authentication.</p>
    </div>
    <form id="loginForm" onsubmit="handleLogin(event)">
      <label class="block text-sm font-medium text-gray-700">Email</label>
      <input id="email" type="email" required class="mt-1 mb-3 w-full px-3 py-2 border rounded" placeholder="you@example.com">
      <label class="block text-sm font-medium text-gray-700">Password</label>
      <input id="password" type="password" required class="mt-1 mb-4 w-full px-3 py-2 border rounded" placeholder="Password">
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded font-semibold"><i class="fas fa-sign-in-alt mr-2"></i>Login</button>
    </form>
    <p class="text-center text-sm text-gray-500 mt-4">Don't have an account? <a href="register.php" class="text-blue-600 font-medium">Register</a></p>
    <div id="msg" class="hidden mt-4 p-3 text-sm rounded"></div>
  </div>

<script>
function showMessage(text, ok=true){
  const d = document.getElementById('msg');
  d.textContent = text;
  d.className = (ok? 'mt-4 p-3 bg-green-100 text-green-800 rounded' : 'mt-4 p-3 bg-red-100 text-red-800 rounded');
  d.classList.remove('hidden');
}
function handleLogin(e){
  e.preventDefault();
  const email = document.getElementById('email').value;
  // This is a demo: accept any non-empty credentials
  if(email && document.getElementById('password').value){
    showMessage('Demo login successful — this is a placeholder page.');
  } else {
    showMessage('Please enter valid credentials.', false);
  }
}
</script>
</body>
</html>
