<?php
session_start();

if (!isset($_SESSION['user_id'])) {
     header("location:../Error/accessdenied.php");
     exit;
}
if (isset($_SESSION['user_id'])) {
     header("location:../Error/accessdenied.php");
     exit;
}
require '../Infastructure/header.php';
require '../Infastructure/config.php';
$id_section = $_GET['idSec'];


$datasection = "select * from sections where ids =  '$id_section'";
$resultat = $connectiondb->query($datasection)->fetch_assoc();
$resultat = $connectiondb->query($datasection)->fetch_assoc();
if ((isset($_POST['btn-sectiondelete']))) {
    $newdata = "delete from sections where ids = '$id_section'";
    $newcoursedata = $connectiondb->query($newdata);
    header("Location:../Cours/courses_list.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une section</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 
             flex items-center justify-center p-6">
    <form method="post">
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
                        <p class="w-full md:w-4/5 text-white/80"><?= $resultat['title'] ?></p>
                    </div>
                    <div class="p-6 flex flex-col md:flex-row md:items-center md:gap-6">
                        <p class="w-full md:w-1/5 text-white font-semibold">Position / cour assigner</p>
                        <p class="w-full md:w-4/5 text-white/80"><?= $resultat['idc'] ?></p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-4">
                    <input type="submit" name="btn-sectiondelete" value="Supprimer" class="px-8 py-3 rounded-2xl font-bold text-white bg-red-500/60 border border-red-300/40
                     backdrop-blur hover:bg-red-500 transition shadow-lg hover:shadow-2xl">

                    <a href="/Cours/courses_list.php"
                        class="px-7 py-3 rounded-2xl bg-white/20 border border-white/30 text-white hover:bg-white/40 transition font-semibold">
                        Annuler
                    </a>
                </div>

            </div>

        </div>
    </form>


    <?php
    require '../Infastructure/footer.php';
    ?>
</body>

</html>