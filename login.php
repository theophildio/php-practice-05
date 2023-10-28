<?php

session_start();

global $errorMsg;

if (isset($_POST["submit"]) == "submit") {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    if (empty($email) && empty($password)) {
        array_push($errors, "All fields are empty!");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is invalid!");
    } elseif (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long!");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            $errorMsg = "<p class='alert alert-error text-white'><small>{$error}</small></p>";
        }
    } else {
        $openDB = fopen("./db/users.txt", "r");

        $emails = array();
        $passwords = array();
        $roles = array();

        while ($getValues = fgets($openDB)) {
            $values = explode(",", $getValues);
            array_push($emails, $values[1]);
            array_push($passwords, $values[2]);
            array_push($roles, $values[3]);
        }
        fclose($openDB);

        for ($i = 0; $i < count($roles); $i++) {

            if ($email !== $emails[$i] || $password !== $passwords[$i]) {
                $errorMsg = "<p class='alert alert-error text-white'><small>Email or Password doesn't match!</small></p>";
            } else {
                if ($email == $emails[$i] && $password == $passwords[$i]) {
                    $_SESSION["role"] = $roles[$i];
                    $_SESSION["email"] = $emails[$i];
                    $_SESSION["password"] = $passwords[$i];
                    header("Location: index.php");
                }
                die();

            }

        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crew Project</title>
    <!-- Tailwind CSS CDN and daisyUI-->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="container mx-auto px-4">
    <section class="container w-3/4 mx-auto px-4">
        <div class="hero min-h-screen">
            <div class="hero-content flex-col lg:flex-row-reverse">
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl font-semibold text-emerald-800">Welcome to <span>Crew project</span></h1>
                    <p class="py-6 text-gray-500">Our Crew Project is a web application that requires user authentication and role management using PHP. The project has multiple user roles such as admin, manager, and user. Each role has different access permissions to various parts of the application.</p>
                </div>
                <div class="card flex-shrink-0 w-full max-w-sm shadow-xl bg-base-100 mr-10">
                    <form class="card-body" action="" method="post">
                        <?php echo $errorMsg; ?>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-gray-500">Email</span>
                            </label>
                            <input type="email" name="email" placeholder="email" class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-gray-500">Password</span>
                            </label>
                            <input type="password" name="password" placeholder="password" class="input input-bordered" />
                            <label class="label">
                                <a href="./registration.php" class="label-text-alt text-violet-700">Don't have an account? Register here!</a>
                            </label>
                        </div>
                        <div class="form-control mt-6">
                            <input type="submit" class="btn btn-primary bg-emerald-800 hover:bg-emerald-700 border-0 text-white" name="submit" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
