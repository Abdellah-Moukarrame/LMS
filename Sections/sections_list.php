<?php
session_start();

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] === false) {
    header("Location: ../Error/accessdenied.php");
    exit;
} 
require '../Infastructure/header.php';
require '../Infastructure/config.php';

$id_course = $_GET['id'];


$datasection = "select * from sections where idc =  '$id_course'";

$resultat = $connectiondb->query($datasection);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des sections</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 flex items-center justify-center p-6">

    <div class="w-full max-w-6xl mx-auto bg-white/20 backdrop-blur-2xl shadow-2xl rounded-3xl p-10 border border-white/30">

        <!-- Header -->
        <div class="flex flex-col md:flex-row items-center justify-between mb-10 gap-4">
            <h1 class="text-4xl font-extrabold text-white drop-shadow">
                Liste des sections
            </h1>

            <a href="sections_create.php?id=<?= $id_course; ?> "
                class="px-7 py-3 rounded-2xl font-semibold text-white 
                  bg-gradient-to-r from-blue-500 to-purple-600
                  hover:opacity-90 transition shadow-lg hover:scale-105">
                + Ajouter une section
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-hidden rounded-2xl border border-white/30">
            <table class="w-full text-center text-white/90">
                <thead>
                    <tr class="bg-white/25 uppercase text-sm tracking-wider">
                        <th class="p-4">ID</th>
                        <th class="p-4">Titre</th>
                        <th class="p-4">Contenu</th>
                        <th class="p-4">Cours</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white/10 backdrop-blur divide-y divide-white/20">

                    <?php foreach ($resultat as $element) { ?>
                        <tr class="hover:bg-white/20 transition">
                            <td class="p-4 font-semibold"><?php echo $element['ids']; ?></td>
                            <td class="p-4"><?php echo $element['title']; ?></td>
                            <td class="p-4"><?php echo $element['content']; ?></td>
                            <td class="p-4"><?php echo $element['idc']; ?></td>

                            <td class="p-4 flex justify-center gap-3 flex-wrap">
                                <a href="sections_edit.php?idSec=<?= $element['ids']; ?> "
                                    class="px-4 py-2 rounded-xl bg-white/30 hover:bg-white/50 transition shadow">
                                    Modifier
                                </a>

                                <a href="sections_delete.php?idSec=<?= $element['ids']; ?> "
                                    class="px-4 py-2 rounded-xl bg-red-500/50 hover:bg-red-600 transition shadow">
                                    Supprimer
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <!-- Back Button -->
        <div class="mt-8 flex justify-end">
            <a href="../Cours/courses_list.php"
                class="px-7 py-3 rounded-2xl bg-white/20 border border-white/40 
                  text-white hover:bg-white/40 transition font-semibold">
                ← Retour aux cours
            </a>
        </div>

    </div>

    <?php
    require '../Infastructure/footer.php';

    ?>
</body>

</html>