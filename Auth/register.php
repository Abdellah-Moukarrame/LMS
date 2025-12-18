<?php
require "../Infastructure/header.php";
require "../Infastructure/config.php";
$nameerrormsg = '';
$emailerrormsg = '';
$passwordmsgerror = '';
$confirmationerrormsg = '';
$isvalid = true;
if (isset($_POST['btn-register'])) {
    $name = $_POST['Full-Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    $confirmation = $_POST['Confirm-password'];



    if (empty($name)) {
        $nameerrormsg = "Veuillez ajouter le nom";
        $isvalid = false;
    } else {
        $name = trim($name);
        $regexName = "/^[a-z' -]+$/i";
        if (!preg_match($regexName, $name)) {
            $nameerrormsg = "Le Nom est inncorecte";
            $isvalid = false;
        }
    }

    if (empty($email)) {
        $emailerrormsg = "Veuillez ajouter l'email";
        $isvalid = false;
    } else {
        $email = trim($email);
        $regexEmail = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i";
        if (!preg_match($regexEmail, $email)) {
            $emailerrormsg = "L'email est inncorecte";
            $isvalid = false;
        }
    }
    if (empty($password)) {
        $passwordmsgerror = "Veuillez entrer le password";
        $isvalid = false;
    } else {
        $password = trim($password);
        $regexPassword = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
        if (!preg_match($regexPassword, $password)) {
            $passwordmsgerror = "Le password est incorrecte";
            $isvalid = false;
        }
    }
    if ($confirmation !== $password) {
        $confirmationerrormsg = "Veuillez confirmer le password ";
        $isvalid = false;
    }
    if ($isvalid) {
        $dataclient = "insert into users (name,email,password) values (?,?,?)";
        $datarow = $connectiondb->prepare($dataclient);
        var_dump($datarow);
        $datarow->execute([$name, $email, $hashedpassword]);
        header("location:login.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 
             flex flex-col">

    <!-- Wrapper to center register card below header -->
    <div class="flex-1 flex items-center justify-center p-6">

        <div class="w-full max-w-md bg-white/20 backdrop-blur-2xl 
                    rounded-3xl shadow-2xl border border-white/30 p-10">

            <!-- Title -->
            <h1 class="text-3xl font-extrabold text-white text-center mb-2">
                Create Account
            </h1>
            <p class="text-white/80 text-center mb-8">
                Join us and start learning
            </p>

            <!-- Register Form -->
            <form method="post" class="space-y-6">

                <!-- Full Name -->
                <div>
                    <label class="block text-white mb-2">Full Name</label>
                    <input type="text" placeholder="Your full name" name="Full-Name"
                        class="w-full px-4 py-3 rounded-xl 
                               bg-white/30 text-white placeholder-white/70 
                               outline-none focus:ring-2 focus:ring-white/50">
                    <span class="text-red-400 text-sm mt-1 block"><?= $nameerrormsg; ?> </span>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-white mb-2">Email</label>
                    <input type="email" placeholder="example@email.com" name="Email"
                        class="w-full px-4 py-3 rounded-xl 
                               bg-white/30 text-white placeholder-white/70 
                               outline-none focus:ring-2 focus:ring-white/50">
                    <span class="text-red-400 text-sm mt-1 block"><?= $emailerrormsg; ?> </span>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-white mb-2">Password</label>
                    <input type="password" placeholder="••••••••" name="Password"
                        class="w-full px-4 py-3 rounded-xl 
                               bg-white/30 text-white placeholder-white/70 
                               outline-none focus:ring-2 focus:ring-white/50">
                    <span class="text-red-400 text-sm mt-1 block"><?= $passwordmsgerror; ?> </span>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-white mb-2">Confirm Password</label>
                    <input type="password" placeholder="••••••••" name="Confirm-password"
                        class="w-full px-4 py-3 rounded-xl 
                               bg-white/30 text-white placeholder-white/70 
                               outline-none focus:ring-2 focus:ring-white/50">
                    <span class="text-red-400 text-sm mt-1 block"><?= $confirmationerrormsg; ?></span>
                </div>

                <!-- Button -->
                <input type="submit" value="Create Account" name="btn-register"
                    class="w-full py-3 rounded-xl font-semibold text-white
                           bg-gradient-to-r from-blue-500 to-purple-600
                           hover:opacity-90 transition shadow-lg">

            </form>

            <!-- Footer -->
            <p class="text-center text-white/70 mt-8">
                Already have an account?
                <a href="login.php" class="text-white font-semibold hover:underline">
                    Login
                </a>
            </p>

        </div>

    </div>

</body>

</html>

<?php
require "../Infastructure/footer.php"
?>