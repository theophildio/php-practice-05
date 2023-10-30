<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "user") {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crew ProjectS</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header -->
    <header class="bg-blue-400">
        <div class="navbar container mx-auto px-4 text-white">
            <div class="flex-1">
                <a href="/" class="normal-case text-xl">Crew Project</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li class="capitalize">
                       <a href=""><?php echo $_SESSION["role"]; ?></a>
                    </li>
                    <li class="capitalize">
                        <a href="./logout.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section>
    <div class="col-span-2">
            <div class="overflow-x-auto">
                <table class="table border border-1">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>John Deo</td>
                        <td>john@deo.com</td>
                        <td>********</td>
                        <td>User</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
