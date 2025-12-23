<?php
session_start();
// require "../Infastructure/header.php";
// var_dump($_SESSION['total_course'] );
require "../Infastructure/config.php";

if (!isset($_SESSION['email_admin']) && !isset($_SESSION['password_admin'])) {
    header("location: ../Auth/logout.php");
    exit;
}
////////////Total courses
$sql = "select  count(title) as total_course from course";

$resultat = mysqli_prepare($connectiondb, $sql);
$dataexecutes = mysqli_stmt_execute($resultat);
$data = mysqli_stmt_get_result($resultat);
$totale = mysqli_fetch_assoc($data);
////////////Total users
$sql_users = "select  count(idU) as total_users from users ";
$resultat = mysqli_prepare($connectiondb, $sql_users);
mysqli_stmt_execute($resultat);
$data = mysqli_stmt_get_result($resultat);
$totalusers = mysqli_fetch_assoc($data);
////////////////Total inscription
$sql_inscriptions = "select count(id_course) as total_inscriptions from erollement";
$resultatinscriptions = mysqli_prepare($connectiondb, $sql_inscriptions);
mysqli_stmt_execute($resultatinscriptions);
$datainscriptions = mysqli_stmt_get_result($resultatinscriptions);
$totaleinscriptions = mysqli_fetch_assoc($datainscriptions);
///////////////Cour avec plus des section
$sql_cours_plus_section = "select  course.title , count(sections.ids) as total_sections from course join sections on sections.idc = course.idc group by course.title order by total_sections desc limit 5 ";
$resultat_cours_plus_section = mysqli_prepare($connectiondb, $sql_cours_plus_section);
mysqli_stmt_execute($resultat_cours_plus_section);

$data_cours_plus_sections = mysqli_stmt_get_result($resultat_cours_plus_section);

$cours_plus_section = mysqli_fetch_all($data_cours_plus_sections, MYSQLI_ASSOC);

//////////////Utilisateurs inscrits cette année

$sql_inscrit_cette_annees = "select distinct users.name , users.email from users join erollement on users.idU = erollement.id_user where year(erollement.date_inscription) = year(curdate()) ";
$resultat_inscrit_cette_annees = mysqli_prepare($connectiondb, $sql_inscrit_cette_annees);
mysqli_stmt_execute($resultat_inscrit_cette_annees);
$data_inscrit_cette_annees = mysqli_stmt_get_result($resultat_inscrit_cette_annees);
$inscrit_cette_annees = mysqli_fetch_all($data_inscrit_cette_annees, MYSQLI_ASSOC);

////////////Course sana inscription
$sql_cours_sans_inscription = "select course.title , course.created_at from course left join erollement on course.idc = erollement.id_course where erollement.id_course = null ";
$resultat_cours_sans_inscription = mysqli_prepare($connectiondb, $sql_cours_sans_inscription);
mysqli_stmt_execute($resultat_cours_sans_inscription);
$data_cours_sans_inscription = mysqli_stmt_get_result($resultat_cours_sans_inscription);
$cours_sans_inscription = mysqli_fetch_all($data_cours_sans_inscription);

///////////////Dernières inscriptions

$sql_dernier_inscription = "select users.name , course.title , erollement.date_inscription from erollement join course on course.idc = erollement.id_course join users on users.idU = erollement.id_user order by erollement.date_inscription desc limit 3";
$resultat_dernier_inscription = mysqli_prepare($connectiondb, $sql_dernier_inscription);
mysqli_stmt_execute($resultat_dernier_inscription);
$data_dernier_inscription = mysqli_stmt_get_result($resultat_dernier_inscription);
$dernier_inscription = mysqli_fetch_all($data_dernier_inscription, MYSQLI_ASSOC);

//////////////Cours plus populaire
$sql_plus_populaire="select course.title , count(erollement.id_user) as totalInscp from course join erollement on erollement.id_course = course.idc group by course.title order by totalInscp limit 1 ";
$resultat_plus_populaire = mysqli_prepare($connectiondb,$sql_plus_populaire);
mysqli_stmt_execute($resultat_plus_populaire);
$data_plus_populaire = mysqli_stmt_get_result($resultat_plus_populaire);
$cours_plus_populaire = mysqli_fetch_assoc($data_plus_populaire);

/////////////////Avg Section/Cours

$sql_avg = "select avg(total_section) as moyenne from (select course.idc , count(*) as total_section from course join sections on sections.idc = course.idc group by course.idc) t";
$resultat_avg = mysqli_prepare($connectiondb,$sql_avg);
mysqli_stmt_execute($resultat_avg);
$data_avg = mysqli_stmt_get_result($resultat_avg);
$avg = mysqli_fetch_assoc($data_avg);
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
    <!-- NAVBAR -->
    <header class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo / Title -->
            <div class="flex items-center gap-3">
                <span class="text-2xl">📊</span>
                <h1 class="text-2xl font-extrabold">Admin Panel</h1>
            </div>

            <!-- Menu -->
            <nav class="flex items-center gap-6 text-sm font-semibold">

                <a href="admin_dashboard.php"
                    class="hover:text-white/80 transition">
                    🏠 Accueil
                </a>

                <a href="../Cours/courses_list.php"
                    class="hover:text-white/80 transition">
                    📚 Cours
                </a>

                <a href="../Auth/logout.php"
                    class="px-4 py-2 rounded-xl 
                      bg-red-500/70 hover:bg-red-600 transition">
                    🚪 Logout
                </a>

            </nav>
        </div>
    </header>


    <main class="p-8 max-w-7xl mx-auto space-y-10">

        <!-- Stats Cards -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-gray-500 text-sm">Nombre Total de Cours</p>
                <h2 class="text-3xl font-bold mt-2"><?= $totale['total_course'] ?></h2>
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
                <h2 class="text-xl font-semibold mt-2"><?= $cours_plus_populaire['title'] ?></h2>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-gray-500 text-sm">Sections / Cours (Moyenne)</p>
                <h2 class="text-3xl font-bold mt-2"><?= $avg['moyenne'] ?></h2>
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
                        <?php foreach ($cours_plus_section as $row) { ?>
                            <tr class="border-b">
                                <td class="py-2"><?= $row['title']  ?></td>
                                <td><?= $row['total_sections']  ?></td>
                            </tr>
                        <?php } ?>
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
                        <?php foreach ($inscrit_cette_annees as $row) { ?>
                            <tr class="border-b">
                                <td class="py-2"><?= $row['name']  ?></td>
                                <td><?= $row['email']  ?></td>
                            </tr>
                        <?php } ?>
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
                        <?php foreach ($cours_sans_inscription as $row) { ?>
                            <tr class="border-b">
                                <td class="py-2"><?= $row['title'] ?></td>
                                <td><?= $row['created_at'] ?></td>
                            </tr>
                        <?php } ?>
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
                        <?php foreach ($dernier_inscription as $row) { ?><tr>
                                <td class="py-2"> <?= $row['name'] ?></td>
                                <td> <?= $row['title'] ?></td>
                                <td> <?= $row['date_inscription'] ?></td>
                            </tr>
                        <?php } ?>
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