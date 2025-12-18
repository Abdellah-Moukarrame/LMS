<?php
    require "../Infastructure/header.php";
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

        <!-- ASIDE / SIDEBAR -->
        <aside class="w-64 bg-white/20 backdrop-blur-xl border-r border-white/30 
                      text-white flex flex-col p-6 space-y-6">

            <h2 class="text-2xl font-extrabold text-center">
                Dashboard
            </h2>

            <nav class="flex flex-col gap-3">

                <a href="#"
                   class="px-4 py-3 rounded-xl bg-white/20 hover:bg-white/30 transition">
                    📚 Visit Courses
                </a>

                <a href="#"
                   class="px-4 py-3 rounded-xl bg-white/20 hover:bg-white/30 transition">
                    🎓 My Learning
                </a>

                <a href="#"
                   class="px-4 py-3 rounded-xl bg-white/20 hover:bg-white/30 transition">
                    👤 My Account
                </a>

            </nav>

            <div class="mt-auto">
                <a href="#"
                   class="block text-center px-4 py-3 rounded-xl 
                          bg-red-500/60 hover:bg-red-600 transition">
                    Logout
                </a>
            </div>

        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1 p-10 text-white space-y-10">

            <h1 class="text-4xl font-extrabold">
                Welcome Back 👋
            </h1>

            <!-- Content Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="bg-white/20 backdrop-blur-xl rounded-3xl 
                            border border-white/30 p-8 shadow-xl">
                    <h2 class="text-2xl font-bold mb-3">
                        📚 Visit Courses
                    </h2>
                    <p class="text-white/80 mb-6">
                        Discover new courses and start learning.
                    </p>
                    <a href="#"
                       class="inline-block px-6 py-3 rounded-xl 
                              bg-gradient-to-r from-blue-500 to-purple-600 
                              font-semibold shadow">
                        Explore Courses
                    </a>
                </div>

                <div class="bg-white/20 backdrop-blur-xl rounded-3xl 
                            border border-white/30 p-8 shadow-xl">
                    <h2 class="text-2xl font-bold mb-3">
                        🎓 My Learning
                    </h2>
                    <p class="text-white/80 mb-6">
                        Continue your enrolled courses.
                    </p>
                    <a href="#"
                       class="inline-block px-6 py-3 rounded-xl 
                              bg-gradient-to-r from-green-500 to-emerald-600 
                              font-semibold shadow">
                        My Courses
                    </a>
                </div>

            </div>

            <!-- Account Info -->
            <div class="bg-white/20 backdrop-blur-xl rounded-3xl 
                        border border-white/30 p-8 shadow-xl">

                <h2 class="text-2xl font-bold mb-6">
                    👤 Account Information
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <span class="font-semibold">Full Name:</span>
                        <p>John Doe</p>
                    </div>

                    <div>
                        <span class="font-semibold">Email:</span>
                        <p>john@example.com</p>
                    </div>

                    <div>
                        <span class="font-semibold">Role:</span>
                        <p>Student</p>
                    </div>

                    <div>
                        <span class="font-semibold">Member Since:</span>
                        <p>2024</p>
                    </div>

                </div>

            </div>

        </main>

    </div>

</body>
</html>
<?php
    require "../Infastructure/footer.php";
?>

