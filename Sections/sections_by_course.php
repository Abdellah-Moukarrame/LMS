
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sections par cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php 
        require '../Infastructure/header.php';
?>
<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 flex items-center justify-center p-6">

    <div class="w-full max-w-4xl bg-white/20 backdrop-blur-lg shadow-2xl rounded-2xl p-10 border border-white/30">

        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-3">
                <div class="bg-white/30 w-12 h-12 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" 
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
                <h1 class="text-3xl font-extrabold text-white drop-shadow">Sections du cours : HTML & CSS</h1>
            </div>

            <a href="sections_create.php?course_id=1"
               class="px-6 py-3 rounded-xl font-semibold text-white bg-white/20 border border-white/40
                      backdrop-blur hover:bg-white/40 transition shadow-lg hover:shadow-xl">
                + Ajouter une section
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-white/90">
                <thead>
                    <tr class="bg-white/20 border border-white/30">
                        <th class="p-4 font-semibold">ID</th>
                        <th class="p-4 font-semibold">Titre</th>
                        <th class="p-4 font-semibold">Position</th>
                        <th class="p-4 font-semibold">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white/10 backdrop-blur">

                    <!-- Example Row -->
                    <tr class="border-b border-white/20">
                        <td class="p-4">1</td>
                        <td class="p-4">Introduction</td>
                        <td class="p-4">1</td>
                        <td class="p-4 flex gap-3">
                            <a href="sections_edit.php?id=1" 
                               class="px-4 py-2 rounded-lg text-white bg-white/20 border border-white/30 hover:bg-white/40 transition">
                                Modifier
                            </a>
                            <a href="sections_delete.php?id=1" 
                               class="px-4 py-2 rounded-lg text-white bg-red-500/40 border border-red-300/40 hover:bg-red-500/60 transition">
                                Supprimer
                            </a>
                        </td>
                    </tr>

                    <tr class="border-b border-white/20">
                        <td class="p-4">2</td>
                        <td class="p-4">Syntaxe HTML</td>
                        <td class="p-4">2</td>
                        <td class="p-4 flex gap-3">
                            <a href="sections_edit.php?id=2" 
                               class="px-4 py-2 rounded-lg text-white bg-white/20 border border-white/30 hover:bg-white/40 transition">
                                Modifier
                            </a>
                            <a href="sections_delete.php?id=2" 
                               class="px-4 py-2 rounded-lg text-white bg-red-500/40 border border-red-300/40 hover:bg-red-500/60 transition">
                                Supprimer
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="../Cours/courses_list.php" 
               class="px-6 py-3 rounded-xl bg-white/20 border border-white/30 text-white hover:bg-white/40 transition">
                Retour aux cours
            </a>
        </div>

    </div>
<?php 
        require '../Infastructure/footer.php';
?>
</body>
</html>
