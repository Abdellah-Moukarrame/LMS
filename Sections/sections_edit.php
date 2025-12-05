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

    <div class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 flex items-center justify-center p-6">

        <div class="w-full max-w-6xl mx-auto bg-white/20 backdrop-blur-2xl shadow-2xl rounded-3xl p-10 border border-white/30">

            <!-- Header -->
            <div class="flex flex-col md:flex-row items-center justify-between mb-10 gap-4">
                <h1 class="text-4xl font-extrabold text-white drop-shadow">
                    Modifier une section
                </h1>
                <a href="#"
                    class="px-7 py-3 rounded-2xl font-semibold text-white 
                bg-gradient-to-r from-blue-500 to-purple-600
                hover:opacity-90 transition shadow-lg hover:scale-105">
                    + Nouvelle section
                </a>
            </div>

            <!-- Form Table Style -->
            <div class="overflow-hidden rounded-2xl border border-white/30 bg-white/10 backdrop-blur divide-y divide-white/20">

                <div class="p-6 flex flex-col md:flex-row md:items-center md:gap-6">
                    <label class="w-full md:w-1/5 text-white font-semibold">Titre :</label>
                    <input type="text" value="Introduction"
                        class="w-full md:w-4/5 p-3 rounded-xl bg-white/30 text-white border border-white/40 
                      focus:ring-2 focus:ring-white/80 focus:outline-none transition" />
                </div>

                <div class="p-6 flex flex-col md:flex-row md:items-center md:gap-6">
                    <label class="w-full md:w-1/5 text-white font-semibold">Contenu :</label>
                    <textarea class="w-full md:w-4/5 p-3 rounded-xl bg-white/30 text-white border border-white/40 
                         h-32 resize-none focus:ring-2 focus:ring-white/80 focus:outline-none transition">
Résumé ou contenu actuel de la section
        </textarea>
                </div>

                <div class="p-6 flex flex-col md:flex-row md:items-center md:gap-6">
                    <label class="w-full md:w-1/5 text-white font-semibold">Position :</label>
                    <input type="number" value="1" min="1"
                        class="w-full md:w-4/5 p-3 rounded-xl bg-white/30 text-white border border-white/40 
                      focus:ring-2 focus:ring-white/80 focus:outline-none transition" />
                </div>

            </div>

            <!-- Buttons -->
            <div class="mt-8 flex justify-end gap-4">
                <button class="px-8 py-3 rounded-2xl font-bold text-white bg-white/20 border border-white/40
                     backdrop-blur hover:bg-white/40 transition shadow-lg hover:shadow-xl">
                    Enregistrer
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