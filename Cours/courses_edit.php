
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php 
    require '../Infastructure/header.php';
?>
<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 flex items-center justify-center p-6">

    <div class="w-full max-w-2xl bg-white/20 backdrop-blur-lg shadow-2xl rounded-2xl p-10 animate-fadeIn border border-white/30">

        <!-- Title -->
        <div class="flex items-center gap-3 mb-6">
            <div class="bg-white/30 w-12 h-12 rounded-xl flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" 
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                          d="M11 5h2m-1 0v14m-5-5h10" />
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-white drop-shadow">Modifier un cours</h1>
        </div>

        <p class="text-white/90 mb-8">
            Changez les informations du cours et enregistrez les modifications.
        </p>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-6">

            <!-- Title input -->
            <div>
                <label class="block text-white font-semibold mb-2">Titre du cours *</label>
                <input type="text"
                       value="Ancien titre du cours"
                       class="w-full p-3 rounded-xl bg-white/30 text-white placeholder-white/60 border border-white/40 
                              focus:ring-2 focus:ring-white/80 focus:outline-none transition"
                       required>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-white font-semibold mb-2">Description *</label>
                <textarea class="w-full p-3 rounded-xl bg-white/30 text-white placeholder-white/60 border border-white/40 
                               h-32 resize-none focus:ring-2 focus:ring-white/80 focus:outline-none transition"
                          required>Ancienne description du cours</textarea>
            </div>

            <!-- Level -->
            <div>
                <label class="block text-white font-semibold mb-2">Niveau *</label>
                <select class="w-full p-3 rounded-xl bg-white/30 text-white border border-white/40 
                               focus:ring-2 focus:ring-white/80 focus:outline-none transition">
                    <option class="text-gray-800" selected>Intermédiaire</option>
                    <option class="text-gray-800">Débutant</option>
                    <option class="text-gray-800">Avancé</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-4 pt-4">

                <button class="px-8 py-3 rounded-xl font-bold text-white bg-white/20 border border-white/40
                               backdrop-blur hover:bg-white/40 transition shadow-lg hover:shadow-xl">
                    Enregistrer
                </button>

                <a href="courses_list.php"
                   class="px-6 py-3 rounded-xl bg-white/20 border border-white/30 text-white hover:bg-white/40 transition">
                    Annuler
                </a>
            </div>

        </form>
    </div>
<?php 
        require '../Infastructure/footer.php';
?>
</body>
</html>
