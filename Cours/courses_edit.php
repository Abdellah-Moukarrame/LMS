<?php
session_start();
require '../Infastructure/header.php';
require '../Infastructure/config.php';

$id_course = $_GET['id'];

$datasection = "select * from course where idc =  '$id_course'";

$resultat = $connectiondb->query($datasection);
if ((isset($_POST['btn-enregestrer']))) {
    $titre = $_POST['Title'];
    $description = $_POST['Description'];
    $niveau = $_POST['Niveau'];
    $newdata = "update course set title='$titre',description ='$description',levelC='$niveau' where idc = '$id_course'";
    $newcoursedata = $connectiondb->query($newdata);
    header("Location:courses_list.php");
    exit;
}
if (!isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === false) {
    header("Location: ../Error/accessdenied.php");
    exit;
} 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un cours</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 flex items-center justify-center p-6">

    <div class="w-full max-w-3xl mx-auto bg-white/20 backdrop-blur-2xl shadow-2xl rounded-3xl p-10 border border-white/30 transition hover:shadow-purple-500/30">

        <!-- Title -->
        <div class="flex items-center gap-4 mb-8">
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 w-14 h-14 rounded-2xl flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M11 5h2m-1 0v14m-5-5h10" />
                </svg>
            </div>
            <div>
                <h1 class="text-4xl font-extrabold text-white drop-shadow">Modifier un cours</h1>
                <p class="text-white/80 text-sm mt-1">
                    Modifiez les infos puis sauvegardez.
                </p>
            </div>
        </div>

        <!-- Form -->

        <form method="POST" class="space-y-7">

            <!-- Title input -->
            <?php
            foreach ($resultat as $course) { ?>
                <div>
                    <label class="block text-white font-semibold mb-2">Titre du cours *</label>
                    <input type="text"
                        name="Title"
                        value="<?php echo $course['title']; ?>"
                        placeholder="Ancien titre du cours"
                        class="w-full p-4 rounded-2xl bg-white/25 text-white placeholder-white/60 
                          border border-white/40 focus:ring-2 focus:ring-purple-400 
                          focus:outline-none transition shadow-inner"
                        >
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-white font-semibold mb-2">Description *</label>
                    <textarea
                        name="Description"
                        class="w-full p-4 rounded-2xl bg-white/25 text-white placeholder-white/60 
                       border border-white/40 h-36 resize-none 
                       focus:ring-2 focus:ring-purple-400 focus:outline-none transition shadow-inner"
                        placeholder="Ancienne description du cours"
                        ><?php echo $course['description']; ?></textarea>
                </div>

                <!-- Level -->
                <div>
                    <label class="block text-white font-semibold mb-2">Niveau *</label>
                    <select
                        name="Niveau"
                        class="w-full p-4 rounded-2xl bg-white/25 text-white border border-white/40 
                       focus:ring-2 focus:ring-purple-400 focus:outline-none transition shadow-inner">
                        <option class="text-gray-800" selected><?php echo $course['levelC']; ?></option>
                        <option class="text-gray-800">Intermédiaire</option>
                        <option class="text-gray-800">Débutant</option>
                        <option class="text-gray-800">Avancé</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-end gap-4 pt-6">

                    <a href="courses_list.php"
                        class="w-full sm:w-auto text-center px-7 py-3 rounded-2xl 
                      bg-white/20 border border-white/40 text-white 
                      hover:bg-white/40 transition font-semibold">
                        Annuler
                    </a>

                    <input
                        value="Enregistrer"
                        type="submit"
                        name="btn-enregestrer"
                        class="w-full sm:w-auto px-9 py-3 rounded-2xl font-bold text-white 
                       bg-gradient-to-r from-blue-500 to-purple-600 
                       hover:opacity-90 hover:scale-105 transition shadow-xl">


                </div>
            <?php } ?>


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