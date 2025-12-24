<?php

session_start();
require "../Infastructure/header.php";
require "../Infastructure/config.php";

$errormsg = '';
if (isset($_POST['btn-login'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $dataclient = "select * from users where email = ? ";
    $datarow = mysqli_prepare($connectiondb, $dataclient);
    mysqli_stmt_bind_param($datarow,"s",$email);
    mysqli_stmt_execute($datarow);
    $result = mysqli_stmt_get_result($datarow);
    $resultat = mysqli_fetch_assoc($result);

    /////////////Admin 
    if ($email == "admin@admin.lms" && $password == "Adminlms@123") {
        $_SESSION['is_admin'] = true;
        $_SESSION['email_admin'] = $email;
        header("location:../Admin/dashboard_admin.php");
        exit;
    }

/////////////User
    if (isset($resultat) && password_verify($password, $resultat['password'])) {
        $_SESSION['is_admin'] = false;
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $resultat['idU'];
        header("location:../Client/dashboard.php");
        exit;
    } else {
        $errormsg = "password or email invalid ";
    }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 
             flex flex-col">

    <!-- Wrapper to center login card below header -->
    <div class="flex-1 flex items-center justify-center p-6">

        <div class="w-full max-w-md bg-white/20 backdrop-blur-2xl 
                    rounded-3xl shadow-2xl border border-white/30 p-10">

            <!-- Title -->
            <h1 class="text-3xl font-extrabold text-white text-center mb-2">
                Welcome Back
            </h1>
            <p class="text-white/80 text-center mb-8">
                Login to your account
            </p>

            <!-- Login Form -->
            <form method="post" class="space-y-6">

                <!-- Email -->
                <?php if (!empty($errormsg)) { ?>
                    <div class="mt-2 flex items-start gap-2 
                    bg-red-500/15 border border-red-500/30 
                    text-red-200 px-4 py-3 rounded-xl text-sm">

                        <svg class="w-5 h-5 mt-0.5 text-red-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v2m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z" />
                        </svg>

                        <span><?= $errormsg; ?></span>
                    </div>
                <?php } ?>

                <div>
                    <label class="block text-white mb-2">Email</label>
                    <input type="email" placeholder="example@email.com" name="Email"
                        class="w-full px-4 py-3 rounded-xl 
                               bg-white/30 text-white placeholder-white/70 
                               outline-none focus:ring-2 focus:ring-white/50">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-white mb-2">Password</label>
                    <input type="password" placeholder="••••••••" name="Password"
                        class="w-full px-4 py-3 rounded-xl 
                               bg-white/30 text-white placeholder-white/70 
                               outline-none focus:ring-2 focus:ring-white/50">
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between text-sm text-white/80">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" class="accent-white">
                        Remember me
                    </label>

                    <a href="#" class="hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- Button -->
                <input type="submit" name="btn-login" value="Login"
                    class="w-full py-3 rounded-xl font-semibold text-white
                           bg-gradient-to-r from-blue-500 to-purple-600
                           hover:opacity-90 transition shadow-lg">





            </form>

            <!-- Footer -->
            <p class="text-center text-white/70 mt-8">
                Don’t have an account?
                <a href="register.php" class="text-white font-semibold hover:underline">
                    Sign up
                </a>
            </p>

        </div>

    </div>

</body>

</html>

<?php
require "../Infastructure/footer.php"
?>