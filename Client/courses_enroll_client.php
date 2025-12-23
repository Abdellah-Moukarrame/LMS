<?php
session_start();
require "../Infastructure/header.php";
require "../Infastructure/config.php";

$idCourse = $_GET['id_course'];
$idUser = $_SESSION['user_id'];
$course_id = $idCourse;
$user_id   = $idUser;
$sql_insert_into_enroll = "insert into erollement (id_course,id_user) values ( ? , ? )";
$resultat_insert_into_enroll = mysqli_prepare($connectiondb, $sql_insert_into_enroll);
mysqli_stmt_bind_param($resultat_insert_into_enroll, "ii", $course_id, $user_id);
mysqli_stmt_execute($resultat_insert_into_enroll);

$sql_enroll_course = "select distinct course.title as title_course , course.description as description_course , users.* from erollement join course on erollement.id_course = course.idc join users on erollement.id_user where  users.idU  = ?  ";
$resultat = mysqli_prepare($connectiondb, $sql_enroll_course);
mysqli_stmt_bind_param($resultat, "i",  $user_id);
mysqli_stmt_execute($resultat);
$enroll_courses = mysqli_stmt_get_result($resultat);
$enroll_courses_data = mysqli_fetch_all($enroll_courses, MYSQLI_ASSOC);


// print_r($enroll_courses_data['idc']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-purple-500 via-indigo-600 to-blue-500 min-h-screen font-sans">

    <div class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-12 drop-shadow-lg">
            My Courses
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Course Card -->
            <?php
            foreach ($enroll_courses_data as $row) { ?>
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="h-40 bg-gradient-to-r from-blue-500 to-purple-600 
                            flex items-center justify-center text-white text-4xl">
                        💻
                    </div>
                    <div class="p-6">
                        <h2 class="text-gray-800 font-semibold mb-2"><?= $row['title_course'] ?></h2>
                        <p class="text-gray-600 mb-6">
                            <?= $row['description_course'] ?>
                        </p>
                        <button class="w-full py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition">
                            Start Learning
                        </button>
                    </div>
                </div>
            <?php } ?>





        </div>
    </div>

</body>

</html>
<?php
require "../Infastructure/footer.php";
?>