<?php
session_start();

if (!isset($_SESSION["role"]) && $_SESSION["role"] !== "admin") {
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
    <section class="container mx-auto px-4 mt-6 grid grid-cols-3 gap-6">
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>John Doe</td>
                        <td>john@mail.com</td>
                        <td>********</td>
                        <td>User</td>
                        <td><button class="btn btn-xs btn-outline btn-success">Edit</button></td>
                        <td><button class="btn btn-xs btn-outline btn-error">Delete</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <div class="card w-full max-w-sm border border-1 bg-base-100">
                <h2 class="text-2xl font-semibold text-center capitalize text-emerald-700 pt-4">Add new user</h2>
                <form class="card-body" action="" method="post">
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
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-gray-500">Role</span>
                        </label>
                        <input type="text" name="role" placeholder="role" class="input input-bordered" />
                    </div>
                    <div class="form-control mt-6">
                        <input type="submit" class="btn btn-primary bg-emerald-800 hover:bg-emerald-700 border-0 text-white" name="register" value="Add user" />
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
