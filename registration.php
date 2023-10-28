<?php

global $errorMsg;

if (isset($_POST["register"])) {
    $fullName = strtolower($_POST["fullname"]);
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = "user";
    $errors = array();

    if (empty($fullName) && empty($email) && empty($password)) {
        array_push($errors, "All fields are empay!");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is invalid1");
    } elseif (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long!");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            $errorMsg = "<p class='alert alert-error text-white'><small>{$error}</small></p>";
        }
    } else {
        $openFile = fopen("./db/users.txt", "a");
        fwrite($openFile, "\n{$fullName},{$email},{$password},{$role}");
        fclose($openFile);
        header("Location: login.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Tailwind CSS CDN and daisyUI-->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center min-h-screen">
    <div class="card w-full max-w-sm shadow-xl bg-base-100">
        <h2 class="text-2xl font-semibold text-center capitalize text-emerald-700 pt-4">User registration</h2>
        <form class="card-body" action="" method="post">
            <?php echo $errorMsg; ?>
            <div class="form-control">
                <label class="label">
                    <span class="label-text text-gray-500">Full Name</span>
                </label>
                <input type="text" name="fullname" placeholder="full name" class="input input-bordered" />
            </div>
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
                    <a href="./index.php" class="label-text-alt text-violet-700">Already have an account? Login</a>
                </label>
            </div>
            <div class="form-control mt-6">
                <input type="submit" class="btn btn-primary bg-emerald-800 hover:bg-emerald-700 border-0 text-white" name="register" value="Register" />
            </div>
        </form>
    </div>
</body>
</html>
