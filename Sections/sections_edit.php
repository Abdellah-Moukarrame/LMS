
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une section</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php 
        require '../Infastructure/header.php';
?>
<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 flex items-center justify-center p-6">

    <div class="w-full max-w-2xl bg-white/20 backdrop-blur-lg shadow-2xl rounded-2xl p-10 border border-white/30 animate-fadeIn">

        <!-- Title -->
        <div class="flex items-center gap-3 mb-6">
            <div class="bg-white/30 w-12 h-12 rounded-xl flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" 
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                          d="M11 5h2m-1 0v14m-5-5h10" />
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-white drop-shadow">Modifier une section</h1>
        </div>

        <p class="text-white/90 mb-8">
            Modifiez les informations de la section et enregistrez vos changements.
        </p>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-6">

            <!-- Section Title -->
            <div>
                <label class="block text-white font-semibold mb-2">Titre de la section *</label>
                <input type="text"
                       value="Introduction"
                       class="w-full p-3 rounded-xl bg-white/30 text-white placeholder-white/60 border border-white/40 
                              focus:ring-2 focus:ring-white/80 focus:outline-none transition"
                       required>
            </div>

            <!-- Content -->
            <div>
                <label class="block text-white font-semibold mb-2">Contenu / Résumé *</label>
                <textarea class="w-full p-3 rounded-xl bg-white/30 text-white placeholder-white/60 border border-white/40 
                               h-32 resize-none focus:ring-2 focus:ring-white/80 focus:outline-none transition"
                          required>Résumé ou contenu actuel de la section</textarea>
            </div>

            <!-- Position -->
            <div>
                <label class="block text-white font-semibold mb-2">Position *</label>
                <input type="number"
                       value="1"
                       class="w-full p-3 rounded-xl bg-white/30 text-white placeholder-white/60 border border-white/40 
                              focus:ring-2 focus:ring-white/80 focus:outline-none transition"
                       min="1"
                       required>
            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-4 pt-4">

                <button class="px-8 py-3 rounded-xl font-bold text-white bg-white/20 border border-white/40
                               backdrop-blur hover:bg-white/40 transition shadow-lg hover:shadow-xl">
                    Enregistrer
                </button>

                <a href="sections_by_course.php?course_id=1"
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
