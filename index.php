<?php

    session_start();
    if(isset($_SESSION['login'])){
        $FName=$_SESSION['FName'];
        $LName=$_SESSION['LName'];
    }
?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiKecilku</title>
    <meta name="" content="">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="test.html" class="flex items-center">
                    <img src="" class="mr-3 h-6 sm:h-9" alt="SiKecilku Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">SiKecilku</span>
                </a>
                <?php if(isset($_SESSION['login'])){?>
                <div class="flex items-center lg:order-2">
                    <a href="controller/logout.php"
                        class="text-white dark:text-white hover:bg-gray-700 focus:ring-4 bg-blue-700 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                        logout</a>
                </div>
                <?php } else{?>
                <div class="flex items-center lg:order-2">
                    <a href="login.html"
                        class="text-white dark:text-white hover:bg-gray-700 focus:ring-4 bg-blue-700 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                        Log in</a>
                </div>

                <?php
                }
                    ?>
            </div>
        </nav>
    </header>

    <!-- ISI -->

    <section class="bg-white dark:bg-gray-900">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 mt-28">
            <div class="place-self-center mr-auto lg:col-span-7">
                <?php
                        if(isset($_SESSION['login'])){
                            ?>
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Selamat Datang,
                    <span class="text-slate-600"><?= $FName; ?></span>
                    <?php
                        }else{
                        ?>
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Selamat Datang!
                </h1>
                <?php
                        }
                ?>
                <p class="mb-1 max-w-2xl font-light text-gray-500 lg:mb-3 md:text-lg lg:text-xl dark:text-gray-400">
                    Temukan Informasi, Atur nutrisi, dan Diskusikan Bersama Para Ahli</p>
                <p class="mb-2 max-w-2xl font-light text-gray-500 lg:mb-6 md:text-lg lg:text-xl dark:text-gray-400">
                    <span class="text-orange-500 font-bold"> SiKecilku </span>- Bantu Tumbuh Kembang Anak Anda</p>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Testimoni
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="components/kids.jpg" alt="kids">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h2
                class="mb-8 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 lg:mb-16 dark:text-white md:text-4xl">
                Our <span class="text-amber-600">Features</span></h2>

            <!-- BAGIAN INI AKAN DIISI FITUR -->

            <!-- TESTIMONI -->

            <section class="bg-white dark:bg-gray-900" data-aos="zoom-in" data-aos-anchor-placement="center-bottom">
                <div
                    class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Apa Kata Mereka</h2>
                        <p class="mb-4 text-justify">Saya Merupakan Orang Tua yang masih baru dalam merawat serta
                            mendidik anak, website ini sangat membantu untuk mempermudah
                            saya dalam mencari informasi serta mengatur pola nutrisi yang tepat untuk perkembangan buah
                            hati saya
                        </p>
                        <p>-PamanAleph</p>
                    </div>
                    <div data-aos="zoom-in" data-aos-anchor-placement="center-bottom">
                        <div class="grid grid-cols-2 gap-4 mt-8">
                            <img class="w-full rounded-lg" src="components/mom.jpg" alt="mom">
                            <img class="mt-4 w-full rounded-lg lg:mt-10" src="components/father.jpg" alt="father">
                        </div>
                    </div>
                </div>
            </section>

            <!-- FOOTER -->
            <footer class="p-4 bg-gray-50 sm:p-6 dark:bg-gray-800">
                <div class="mx-auto max-w-screen-xl">
                    <div class="md:flex md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <a href="test.html" class="flex items-center">
                                <img src="" class="mr-3 h-8" alt="Sikecilku Logo" />
                                <span
                                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SiKecilku</span>
                            </a>
                        </div>
                        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources
                                </h2>
                                <ul class="text-gray-600 dark:text-gray-400">
                                    <li class="mb-4">
                                        <a href="https://flowbite.com" class="hover:underline">Flowbite</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Doctor ?
                                </h2>
                                <a href="#"
                                    class="inline-flex justify-center items-center py-2 px-4 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                    Sign In
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
            <script>
                AOS.init();
            </script>
</body>

</html>