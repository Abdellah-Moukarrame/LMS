
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

    <div class="w-full max-w-lg bg-white/20 backdrop-blur-xl shadow-2xl rounded-2xl p-10 
                border border-white/30 animate-fadeIn">

        <!-- Icon + Title -->
        <div class="flex items-center gap-3 mb-6">
            <div class="bg-red-500/40 w-12 h-12 rounded-xl flex items-center justify-center shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" 
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4h6v3" />
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-white drop-shadow">Supprimer un cours</h1>
        </div>

        <!-- Text -->
        <p class="text-white/90 mb-6">
            Êtes-vous sûr de vouloir supprimer ce cours ?  
            <span class="font-bold">Cette action est irréversible.</span>
        </p>

        <!-- Course info box -->
        <div class="bg-white/20 border border-white/30 backdrop-blur rounded-xl p-4 mb-8 text-white">
            <p class="text-lg font-semibold">Nom du cours :</p>
            <p class="text-white/80">Programmation Web - HTML & CSS</p>

            <p class="text-lg font-semibold mt-3">Niveau :</p>
            <p class="text-white/80">Intermédiaire</p>
        </div>

        <!-- Buttons -->
        <div class="flex items-center gap-4">

            <!-- Delete Button -->
            <button class="px-8 py-3 rounded-xl font-bold text-white bg-red-500/60 
                           border border-red-300/40 shadow-lg backdrop-blur 
                           hover:bg-red-500 transition hover:shadow-2xl">
                Supprimer
            </button>

            <!-- Cancel -->
            <a href="courses_list.php"
               class="px-6 py-3 rounded-xl bg-white/20 border border-white/30 
                      text-white hover:bg-white/40 transition">
                Annuler
            </a>
        </div>

    </div>
<?php 
        require '../Infastructure/footer.php';
?>
</body>
</html>
