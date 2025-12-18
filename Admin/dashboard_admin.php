<?php
session_start();
// require "../Infastructure/header.php";
// var_dump($_SESSION['total_course'] );
require "../Infastructure/config.php";

$sqlusers = "select  count(idU) as total_users from users ";
$resultat = mysqli_prepare($connectiondb,$sqlusers);
mysqli_stmt_execute($resultat);
$data=mysqli_stmt_get_result($resultat);
$totalusers = mysqli_fetch_assoc($data);

$sqlinscriptions = "select count(id_course) as total_inscriptions from erollement";
$resultatinscriptions = mysqli_prepare($connectiondb,$sqlinscriptions);
mysqli_stmt_execute($resultatinscriptions);
$datainscriptions = mysqli_stmt_get_result($resultatinscriptions);
$totaleinscriptions=mysqli_fetch_assoc($datainscriptions);






?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Header -->
    <header class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-6 shadow-lg">
        <h1 class="text-3xl font-bold">📊 Admin Dashboard</h1>
        <p class="text-white/80">Vue générale de la plateforme</p>
    </header>

    <main class="p-8 max-w-7xl mx-auto space-y-10">

        <!-- Stats Cards -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-gray-500 text-sm">Nombre Total de Cours</p>
                <h2 class="text-3xl font-bold mt-2"><?php echo $_SESSION['total_course']; ?></h2>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-gray-500 text-sm">Total des Utilisateurs</p>
                <h2 class="text-3xl font-bold mt-2"><?= $totalusers['total_users'] ?></h2>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-gray-500 text-sm">Total des Inscriptions</p>
                <h2 class="text-3xl font-bold mt-2"><?= $totaleinscriptions['total_inscriptions']; ?></h2>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-gray-500 text-sm">Cours le Plus Populaire</p>
                <h2 class="text-xl font-semibold mt-2">Laravel Avancé</h2>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-gray-500 text-sm">Sections / Cours (Moyenne)</p>
                <h2 class="text-3xl font-bold mt-2">8.4</h2>
            </div>
        </section>

        <!-- Tables Section -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Courses with +5 Sections -->
            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-bold mb-4">📚 Cours ayant plus de 5 sections</h3>
                <table class="w-full text-sm">
                    <thead class="text-gray-500 border-b">
                        <tr>
                            <th class="py-2 text-left">Cours</th>
                            <th class="py-2 text-left">Sections</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2">Web Development</td>
                            <td>7</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2">PHP & MySQL</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td class="py-2">Laravel</td>
                            <td>12</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Users Registered This Year -->
            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-bold mb-4">👤 Utilisateurs inscrits cette année</h3>
                <table class="w-full text-sm">
                    <thead class="text-gray-500 border-b">
                        <tr>
                            <th class="py-2 text-left">Nom</th>
                            <th class="py-2 text-left">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2">Ali Ahmed</td>
                            <td>ali@mail.com</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2">Sara Ben</td>
                            <td>sara@mail.com</td>
                        </tr>
                        <tr>
                            <td class="py-2">Yassine Omar</td>
                            <td>yassine@mail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Courses Without Enrollment -->
            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-bold mb-4">🚫 Cours sans inscription</h3>
                <table class="w-full text-sm">
                    <thead class="text-gray-500 border-b">
                        <tr>
                            <th class="py-2 text-left">Cours</th>
                            <th class="py-2 text-left">Créé le</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2">Flutter Basics</td>
                            <td>2024-01-10</td>
                        </tr>
                        <tr>
                            <td class="py-2">Docker Intro</td>
                            <td>2024-02-05</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Latest Enrollments -->
            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-bold mb-4">🕒 Dernières Inscriptions</h3>
                <table class="w-full text-sm">
                    <thead class="text-gray-500 border-b">
                        <tr>
                            <th class="py-2 text-left">Utilisateur</th>
                            <th class="py-2 text-left">Cours</th>
                            <th class="py-2 text-left">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2">Ali Ahmed</td>
                            <td>Laravel</td>
                            <td>2025-03-01</td>
                        </tr>
                        <tr>
                            <td class="py-2">Sara Ben</td>
                            <td>PHP & MySQL</td>
                            <td>2025-03-02</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

    </main>

</body>

</html>


<?php
require "../Infastructure/footer.php";
?>