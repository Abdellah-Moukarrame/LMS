<?php
session_start();
require "../Infastructure/header.php";
require "../Infastructure/config.php";

$sql = "select  count(title) as total_course from course";

$resultat = mysqli_prepare($connectiondb, $sql);
$dataexecutes = mysqli_stmt_execute($resultat);
$data = mysqli_stmt_get_result($resultat);
$totale = mysqli_fetch_assoc($data);

// var_dump($_SESSION['total_course'] );
if (!isset($_SESSION['user_id'])) {
    header("Location:../Auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700">

    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-white/20 backdrop-blur-xl border-r border-white/30 
                      text-white flex flex-col p-6 space-y-6">

            <h2 class="text-2xl font-extrabold text-center">
                Dashboard
            </h2>

            <nav class="flex flex-col gap-3">

                <a href="courses_list_client.php"
                    class="px-4 py-3 rounded-xl bg-white/20 hover:bg-white/30 transition">
                    📚 Visit Courses
                </a>

                <a href="courses_enroll_client.php"
                    class="px-4 py-3 rounded-xl bg-white/20 hover:bg-white/30 transition">
                    🎓 My Learning
                </a>

                <a href="client_infos.php"
                    class="px-4 py-3 rounded-xl bg-white/20 hover:bg-white/30 transition">
                    👤 My Account
                </a>

            </nav>

            <div class="mt-auto">
                <a href="../Auth/logout.php"
                    class="block text-center px-4 py-3 rounded-xl 
                          bg-red-500/60 hover:bg-red-600 transition">
                    Logout
                </a>
            </div>

        </aside>

        <!-- MAIN -->
        <main class="flex-1 p-10 text-white">

            <h1 class="text-4xl font-extrabold mb-10">
                Welcome Back 👋
            </h1>

            <!-- STATS FULL WIDTH -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">

                <!-- Total Courses -->
                <div class="bg-white/20 backdrop-blur-xl rounded-2xl 
                            border border-white/30 p-8 shadow-xl w-full">
                    <h3 class="text-sm text-white/70 mb-2">
                        Total Courses
                    </h3>
                    <p class="text-5xl font-extrabold">
                        <?= $totale['total_course'] ?>
                    </p>
                </div>

                <!-- My Courses -->
                <div class="bg-white/20 backdrop-blur-xl rounded-2xl 
                            border border-white/30 p-8 shadow-xl w-full">
                    <h3 class="text-sm text-white/70 mb-2">
                        My Courses
                    </h3>
                    <p class="text-5xl font-extrabold">
                        
                    </p>
                </div>

            </div>

        </main>

    </div>

</body>

</html>

<?php
require "../Infastructure/footer.php";
?>