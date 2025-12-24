<?php
session_start();
if (!isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === false) {
    header("Location: ../Error/accessdenied.php");
    exit;
} 
require '../Infastructure/header.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 flex items-center justify-center p-6">

    <div class="w-full max-w-3xl mx-auto bg-white/20 backdrop-blur-2xl shadow-2xl rounded-3xl p-10 
            border border-white/30 animate-fadeIn transition hover:shadow-blue-500/30">

        <!-- Title -->
        <div class="flex items-center gap-4 mb-8">
            <div class="bg-gradient-to-br from-green-400 to-blue-500 w-14 h-14 rounded-2xl 
                    flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M12 6v12m6-6H6" />
                </svg>
            </div>

            <div>
                <h1 class="text-4xl font-extrabold text-white drop-shadow">
                    Créer un nouveau cours
                </h1>
                <p class="text-white/80 text-sm mt-1">
                    Ajoutez un nouveau cours à votre plateforme LMS
                </p>
            </div>
        </div>

        <!-- Form -->
        <form action="courses_list.php" method="POST" class="space-y-7">

            <!-- Title input -->
            <div>
                <label class="block text-white font-semibold mb-2">Titre du cours *</label>
                <input type="text"
                    name="Title"
                    class="w-full p-4 rounded-2xl bg-white/25 text-white placeholder-white/60 
                          border border-white/40 focus:ring-2 focus:ring-blue-400 
                          focus:outline-none transition shadow-inner"
                    placeholder="Ex : Formation HTML & CSS">
            </div>

            <!-- Description -->
            <div>
                <label class="block text-white font-semibold mb-2">Description *</label>
                <textarea
                    name="Description"
                    class="w-full p-4 rounded-2xl bg-white/25 text-white placeholder-white/60 
                       border border-white/40 h-36 resize-none 
                       focus:ring-2 focus:ring-blue-400 focus:outline-none transition shadow-inner"
                    placeholder="Résumé du contenu du cours"></textarea>
            </div>

            <!-- Level -->
            <div>
                <label class="block text-white font-semibold mb-2">Niveau *</label>
                <select
                    name="Niveau"
                    class="w-full p-4 rounded-2xl bg-white/25 text-white border border-white/40 
                       focus:ring-2 focus:ring-blue-400 focus:outline-none transition shadow-inner">
                    <option class="text-gray-800">Débutant</option>
                    <option class="text-gray-800">Intermédiaire</option>
                    <option class="text-gray-800">Avancé</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-end gap-4 pt-6">

                <a href="courses_list.php"
                    class="w-full sm:w-auto text-center px-7 py-3 rounded-2xl 
                      bg-white/20 border border-white/40 text-white 
                      hover:bg-white/40 transition font-semibold">
                    Retour
                </a>

                <input
                    type="submit"
                    value=" Créer le cours"
                    name="btn-ajoute"
                    class="w-full sm:w-auto px-10 py-3 rounded-2xl font-bold text-white 
                       bg-gradient-to-r from-green-400 to-blue-500 
                       hover:opacity-90 hover:scale-105 transition shadow-xl">

            </div>

        </form>
    </div>

    <?php
    require '../Infastructure/footer.php';
    ?>
    <script>
        const form = document.querySelector('form');

        form.addEventListener('submit', function(e) {
            const title = form.Title.value.trim();
            const description = form.Description.value.trim();
            const niveau = form.Niveau.value.trim();

            if (!title || !description || !niveau) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs correctement.');
                return false;
            }
        });
    </script>

</body>

</html>