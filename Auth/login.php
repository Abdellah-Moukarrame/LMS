<?php

session_start();
require "../Infastructure/header.php";
require "../Infastructure/config.php";

$errormsg = '';
if (isset($_POST['btn-login'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $dataclient = "select * from users where email = ? and password = ?";
    $datarow = mysqli_prepare($connectiondb, $dataclient);
    $res=mysqli_stmt_execute($datarow,[$email,$password]);
    $result = mysqli_stmt_get_result($datarow);
    $resultat = mysqli_fetch_assoc($result);   
    
    if (isset($resultat) ) {
        password_verify($password, $resultat['password']);
        $_SESSION['email'] = $email;
        header("location:../Client/dashboard.php");
        exit;
    }
    else {
        $errormsg="password & email invalid ";
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
                 <span class="text-red-500"><?= $errormsg; ?></span>
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