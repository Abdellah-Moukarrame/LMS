<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

  <header class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

      <!-- Logo -->
      <a href="#" class="text-3xl font-extrabold tracking-wide">MyLMS</a>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex gap-8 text-white/90 font-medium">
        <a href="../Cours/courses_create.php" class="hover:text-white transition">Accueil</a>
        <a href="../Cours/courses_list.php" class="hover:text-white transition">Cours</a>
        <a href="../Sections/sections_list.php" class="hover:text-white transition">Sections</a>
      </nav>

      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="mobile-menu-button">
          <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-indigo-700 px-6 pb-6 text-center">
      <a href="../Cours/courses_create.php" class="block py-3 hover:text-white/80">Accueil</a>
      <a href="../Cours/courses_list.php" class="block py-3 hover:text-white/80">Cours</a>
      <a href="../Sections/sections_list.php" class="block py-3 hover:text-white/80">Sections</a>
      <a href="#" class="block mt-4 bg-white text-indigo-700 py-2 rounded-full font-semibold hover:scale-105 transition">
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