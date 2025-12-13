<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
require '../Infastructure/header.php';
require '../Infastructure/config.php';


$datacourse = 'select * from course';

$resultat = $connectiondb->query($datacourse);

if ((isset($_POST['btn-ajoute']))) {
    $titre = $_POST['Title'];
    $description = $_POST['Description'];
    $niveau = $_POST['Niveau'];
    $newdata = "insert into course (title,description,levelC) values ('$titre','$description','$niveau')";
    $newcoursedata = $connectiondb->query($newdata);
    header("Location:courses_list.php");
    exit;
}

?>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 flex items-center justify-center p-6">

    <div class="w-full max-w-5xl mx-auto bg-white/20 backdrop-blur-xl shadow-2xl rounded-3xl p-10 border border-white/30">

        <!-- Header -->
        <div class="flex flex-col md:flex-row items-center justify-between mb-10 gap-4">
            <div class="flex items-center gap-4">
                <div class="bg-white/30 w-12 h-12 rounded-2xl flex items-center justify-center shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
                <h1 class="text-4xl font-extrabold text-white drop-shadow">Liste des cours</h1>
            </div>

            <a href="courses_create.php"
                class="px-7 py-3 rounded-2xl font-semibold text-white bg-gradient-to-r from-blue-500 to-purple-600
                  hover:opacity-90 transition shadow-lg hover:scale-105">
                + Ajouter un cours
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-hidden rounded-2xl border border-white/30">
            <table class="w-full text-center text-white/90">
                <thead>
                    <tr class="bg-white/25 text-white uppercase text-sm tracking-wider">
                        <th class="p-4">ID</th>
                        <th class="p-4">Titre</th>
                        <th class="p-4">Niveau</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white/10 backdrop-blur divide-y divide-white/20">

                    <?php foreach ($resultat as $element) { ?>
                        <tr class="hover:bg-white/20 transition text-center">
                            <td class="p-4 font-semibold"><?php echo $element['idc']; ?></td>
                            <td class="p-4"><?php echo $element['title']; ?></td>
                            <td class="p-4"><?php echo $element['levelC']; ?></td>

                            <td class="p-4 flex justify-center gap-3 flex-wrap">
                                <a href="/Sections/sections_list.php?id=<?= $element['idc']; ?>"
                                    class="px-4 py-2 rounded-xl bg-blue-500/50 hover:bg-blue-600 transition shadow">
                                    Voir
                                </a>

                                <a href="courses_edit.php?id=<?= $element['idc']; ?>"
                                    class="px-4 py-2 rounded-xl bg-white/30 hover:bg-white/50 transition shadow">
                                    Modifier
                                </a>

                                <a href="courses_delete.php"
                                    class="px-4 py-2 rounded-xl bg-red-500/50 hover:bg-red-600 transition shadow">
                                    Supprimer
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>


    <?php
    require '../Infastructure/footer.php';
    ?>
</body>

</html>