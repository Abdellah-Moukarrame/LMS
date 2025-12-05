<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
require '../Infastructure/header.php';
?>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 
             flex items-center justify-center p-6">

    <div class="w-full max-w-xl mx-auto bg-white/20 backdrop-blur-2xl shadow-2xl rounded-3xl p-10 
            border border-white/30 animate-fadeIn text-center">

        <!-- Icon + Title -->
        <div class="flex flex-col items-center gap-4 mb-6">
            <div class="bg-gradient-to-br from-red-500 to-pink-600 w-16 h-16 rounded-2xl 
                    flex items-center justify-center shadow-xl animate-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4h6v3" />
                </svg>
            </div>

            <h1 class="text-4xl font-extrabold text-white drop-shadow">
                Supprimer le cours
            </h1>
        </div>

        <!-- Warning Text -->
        <p class="text-white/90 mb-8 text-lg leading-relaxed">
            Êtes-vous sûr de vouloir supprimer ce cours ?
            <span class="block mt-2 text-red-300 font-bold">
                ⚠️ Cette action est irréversible.
            </span>
        </p>

        <!-- Course info box -->
        <div class="bg-white/25 border border-white/30 backdrop-blur rounded-2xl 
                p-6 mb-10 text-white shadow-inner text-left">
            <p class="text-sm uppercase tracking-wider text-white/70">Nom du cours</p>
            <p class="text-xl font-bold mt-1">Programmation Web - HTML & CSS</p>

            <p class="text-sm uppercase tracking-wider text-white/70 mt-4">Niveau</p>
            <p class="text-lg font-semibold">Intermédiaire</p>
        </div>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

            <!-- Cancel -->
            <a href="courses_list.php"
                class="w-full sm:w-auto px-8 py-3 rounded-2xl 
                  bg-white/20 border border-white/40 
                  text-white hover:bg-white/40 transition font-semibold">
                Annuler
            </a>

            <!-- Delete Button -->
            <button
                class="w-full sm:w-auto px-10 py-3 rounded-2xl font-bold text-white 
                   bg-gradient-to-r from-red-500 to-pink-600 
                   hover:opacity-90 hover:scale-105 transition shadow-2xl">
                Supprimer définitivement
            </button>
        </div>

    </div>

    <?php
    require '../Infastructure/footer.php';
    ?>
</body>

</html>