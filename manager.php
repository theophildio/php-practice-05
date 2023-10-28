<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "manager") {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crew Projects</title>
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
</body>
</html>
