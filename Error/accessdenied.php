<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 - Access Denied</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 to-gray-800 text-white">

  <div class="text-center px-6">
    <!-- Error Code -->
    <h1 class="text-9xl font-extrabold text-red-500 drop-shadow-lg">404</h1>

    <!-- Message -->
    <h2 class="mt-6 text-3xl font-semibold">
      You don’t have access to this page
    </h2>

    <p class="mt-4 text-gray-300 max-w-md mx-auto">
      Sorry, the page you are trying to reach is restricted or does not exist.
      Please check your permissions or go back to a safe page.
    </p>

    <!-- Buttons -->
    <div class="mt-8 flex justify-center gap-4">
      <a href="../Client/dashboard.php"
         class="px-6 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 transition font-medium">
        Go to Home
      </a>
    </div>
  </div>

</body>
</html>
