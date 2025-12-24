<?php
session_start();
require "../Infastructure/header.php";
require "../Infastructure/config.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../Auth/login.php");
    exit;
}



$sql = "select * from course";
$resultat = mysqli_prepare($connectiondb, $sql);
$dataexecutes = mysqli_stmt_execute($resultat);
$courses = mysqli_stmt_get_result($resultat);
// $courses = mysqli_fetch_all($row);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 p-10">

    <!-- Page Title -->
    <div class="text-center text-white mb-12">
        <h1 class="text-4xl font-extrabold mb-3">📚 Our Courses</h1>
        <p class="text-white/80">Choose a course and start learning</p>
    </div>

    <!-- Courses Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        <?php foreach ($courses as $course) { ?>

            <!-- Course Card -->
            <div class="bg-white/20 backdrop-blur-xl rounded-3xl 
                        border border-white/30 shadow-xl overflow-hidden">

                <div class="h-40 bg-gradient-to-r from-blue-500 to-purple-600 
                            flex items-center justify-center text-white text-4xl">
                    💻
                </div>

                <div class="p-6 text-white">
                    <h2 class="text-xl font-bold mb-2"><?= $course['title']; ?></h2>

                    <p class="text-white/80 text-sm mb-4">
                        <?= $course['description']; ?>
                    </p>

                    <div class="flex items-center justify-between text-sm mb-4">
                        <span>⏱ 20 Hours</span>
                        <span>⭐ 4.8</span>
                    </div>

                    <a href="courses_enroll_client.php?id_course=<?= $course['idc']; ?>"
                        class="w-full py-3 rounded-xl font-semibold
                               bg-gradient-to-r from-green-500 to-emerald-600
                               hover:opacity-90 transition shadow-lg">
                        ➕ Add to My Courses
                    </a>
                </div>

            </div>

        <?php } ?>
    </div>

</body>


</html>
<?php
require "../Infastructure/footer.php";
?>