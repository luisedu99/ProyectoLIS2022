<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acceso - Clinical journal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="../assets/js/init-alpine.js"></script>
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <div class="img">
                        <img src="../assets/img/logo.png" alt="logo">
                    </div>
                   <!-- <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="../assets/img/forgot-password-office.jpeg" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="../assets/img/logo.png" alt="Office" /> -->
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <form class="container" autocomplete="off" method="post" role="form">
                            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                Iniciar Sesion
                            </h1>
                            <?php
                            if (isset($errMsg)) {
                                echo '<div style="color:#FF0000;text-align:center;font-size:20px;">' . $errMsg . '</div>';
                            }
                            ?>
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Usuario</span>
                                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-teal-500 focus:outline-none focus:shadow-outline-teal dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Usuario" name="usuario" value="<?php if (isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off" />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Contraseña</span>
                                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-teal-500 focus:outline-none focus:shadow-outline-teal dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" required="true" name="clave" value="<?php if (isset($_POST['clave'])) echo MD5($_POST['clave']) ?>" />
                            </label>
                            <hr class="my-8" />
                            <button class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-emerald-400 active:text-gray-500 focus:outline-none focus:shadow-outline-gray" name='login' type="submit">Acceder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>