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

    <div class="w-full max-w-3xl mx-auto bg-white/20 backdrop-blur-2xl shadow-2xl rounded-3xl p-10 border border-white/30 transition hover:shadow-purple-500/30">

        <!-- Title -->
        <div class="flex items-center gap-4 mb-8">
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 w-14 h-14 rounded-2xl flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M11 5h2m-1 0v14m-5-5h10" />
                </svg>
            </div>
            <div>
                <h1 class="text-4xl font-extrabold text-white drop-shadow">Modifier un cours</h1>
                <p class="text-white/80 text-sm mt-1">
                    Modifiez les infos puis sauvegardez.
                </p>
            </div>
        </div>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-7">

            <!-- Title input -->
            <div>
                <label class="block text-white font-semibold mb-2">Titre du cours *</label>
                <input type="text"
                    value="Ancien titre du cours"
                    class="w-full p-4 rounded-2xl bg-white/25 text-white placeholder-white/60 
                          border border-white/40 focus:ring-2 focus:ring-purple-400 
                          focus:outline-none transition shadow-inner"
                    required>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-white font-semibold mb-2">Description *</label>
                <textarea
                    class="w-full p-4 rounded-2xl bg-white/25 text-white placeholder-white/60 
                       border border-white/40 h-36 resize-none 
                       focus:ring-2 focus:ring-purple-400 focus:outline-none transition shadow-inner"
                    required>Ancienne description du cours</textarea>
            </div>

            <!-- Level -->
            <div>
                <label class="block text-white font-semibold mb-2">Niveau *</label>
                <select
                    class="w-full p-4 rounded-2xl bg-white/25 text-white border border-white/40 
                       focus:ring-2 focus:ring-purple-400 focus:outline-none transition shadow-inner">
                    <option class="text-gray-800" selected>Intermédiaire</option>
                    <option class="text-gray-800">Débutant</option>
                    <option class="text-gray-800">Avancé</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-end gap-4 pt-6">

                <a href="courses_list.php"
                    class="w-full sm:w-auto text-center px-7 py-3 rounded-2xl 
                      bg-white/20 border border-white/40 text-white 
                      hover:bg-white/40 transition font-semibold">
                    Annuler
                </a>

                <button
                    class="w-full sm:w-auto px-9 py-3 rounded-2xl font-bold text-white 
                       bg-gradient-to-r from-blue-500 to-purple-600 
                       hover:opacity-90 hover:scale-105 transition shadow-xl">
                    Enregistrer
                </button>
            </div>

        </form>
    </div>

    <?php
    require '../Infastructure/footer.php';
    ?>
</body>

</html>