<?php
    require "../Infastructure/header.php";
    require "../Infastructure/config.php";
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
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://source.unsplash.com/400x200/?coding,web" alt="Web Development" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Web Development</h2>
                    <p class="text-gray-600 mb-6">
                        Learn HTML, CSS, and JavaScript to build stunning websites and interactive apps.
                    </p>
                    <button class="w-full py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition">
                        Start Learning
                    </button>
                </div>
            </div>

            <!-- Course Card -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://source.unsplash.com/400x200/?php,database" alt="PHP & MySQL" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">PHP & MySQL</h2>
                    <p class="text-gray-600 mb-6">
                        Master backend development with PHP and MySQL for powerful web apps.
                    </p>
                    <button class="w-full py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition">
                        Start Learning
                    </button>
                </div>
            </div>

            <!-- Course Card -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://source.unsplash.com/400x200/?laravel,code" alt="Laravel Framework" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2">Laravel Framework</h2>
                    <p class="text-gray-600 mb-6">
                        Build modern, maintainable web applications using Laravel’s elegant syntax.
                    </p>
                    <button class="w-full py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition">
                        Start Learning
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
<?php 
    require "../Infastructure/footer.php";
?>