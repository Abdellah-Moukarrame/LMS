<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une section</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
require '../Infastructure/header.php';
?>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 
             flex items-center justify-center p-6">

    <div class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 flex items-center justify-center p-6">

        <div class="w-full max-w-6xl mx-auto bg-white/20 backdrop-blur-2xl shadow-2xl rounded-3xl p-10 border border-white/30">

            <!-- Header -->
            <div class="flex flex-col md:flex-row items-center justify-between mb-10 gap-4">
                <h1 class="text-4xl font-extrabold text-white drop-shadow">
                    Supprimer une section
                </h1>
            </div>

            <!-- Warning Text -->
            <p class="text-white/90 mb-6 text-lg">
                Êtes-vous sûr de vouloir supprimer cette section ?
                <span class="font-bold">Cette action est irréversible.</span>
            </p>

            <!-- Section info -->
            <div class="overflow-hidden rounded-2xl border border-white/30 bg-white/10 backdrop-blur divide-y divide-white/20 mb-8">
                <div class="p-6 flex flex-col md:flex-row md:items-center md:gap-6">
                    <p class="w-full md:w-1/5 text-white font-semibold">Titre :</p>
                    <p class="w-full md:w-4/5 text-white/80">Introduction</p>
                </div>
                <div class="p-6 flex flex-col md:flex-row md:items-center md:gap-6">
                    <p class="w-full md:w-1/5 text-white font-semibold">Position :</p>
                    <p class="w-full md:w-4/5 text-white/80">1</p>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-4">
                <button class="px-8 py-3 rounded-2xl font-bold text-white bg-red-500/60 border border-red-300/40
                     backdrop-blur hover:bg-red-500 transition shadow-lg hover:shadow-2xl">
                    Supprimer
                </button>

                <a href="sections_list.php"
                    class="px-7 py-3 rounded-2xl bg-white/20 border border-white/30 text-white hover:bg-white/40 transition font-semibold">
                    Annuler
                </a>
            </div>

        </div>

    </div>

    <?php
    require '../Infastructure/footer.php';
    ?>
</body>

</html>