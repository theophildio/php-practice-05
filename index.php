<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crew Project</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="container mx-auto px-4">
        <div class="hero min-h-screen w-3/4 mx-auto">
            <div class="hero-content flex-col lg:flex-row-reverse">
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl font-semibold text-emerald-800">Welcome to <span>Crew project</span></h1>
                    <p class="py-6 text-gray-500">Our Crew Project is a web application that requires user authentication and role management using PHP. The project has multiple user roles such as admin, manager, and user. Each role has different access permissions to various parts of the application.</p>
                </div>
                <div class="card flex-shrink-0 w-full max-w-sm shadow-xl bg-base-100 mr-10">
                    <form class="card-body">
                        <div class="form-control">
                        <label class="label">
                            <span class="label-text text-gray-500">Email</span>
                        </label>
                        <input type="email" placeholder="email" class="input input-bordered" required />
                        </div>
                        <div class="form-control">
                        <label class="label">
                            <span class="label-text text-gray-500">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" required />
                        <label class="label">
                            <a href="./registration.php" class="label-text-alt text-violet-700">Register here!</a>
                        </label>
                        </div>
                        <div class="form-control mt-6">
                        <button class="btn btn-primary bg-emerald-800 hover:bg-emerald-700 border-0 text-white">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
