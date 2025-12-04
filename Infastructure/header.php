<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

  <header class="bg-gray-800/90 backdrop-blur-lg border-b border-gray-700">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

      <!-- Logo -->
      <a href="#" class="text-2xl font-bold text-white">MyLMS</a>

      <!-- Navigation -->
      <nav class="hidden md:flex gap-6">
        <a href="../Cours/courses_create.php" class="hover:text-blue-400 transition">Accueil</a>
        <a href="../Cours/courses_list.php" class="hover:text-blue-400 transition">Cours</a>
        <a href="../Sections/sections_list.php" class="hover:text-blue-400 transition">Sections</a>
      </nav>


      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button id="mobile-menu-button" class="focus:outline-none">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
      <a href="#" class="block py-2 hover:text-blue-400 transition">Accueil</a>
      <a href="#" class="block py-2 hover:text-blue-400 transition">Cours</a>
      <a href="#" class="block py-2 hover:text-blue-400 transition">Sections</a>
      <a href="#" class="block py-2 hover:text-blue-400 transition">À propos</a>
      <a href="#" class="block py-2 mt-2 px-4 py-2 bg-blue-600 rounded-xl text-center hover:bg-blue-500 transition">
        Se connecter
      </a>
    </div>
  </header>

  <script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
