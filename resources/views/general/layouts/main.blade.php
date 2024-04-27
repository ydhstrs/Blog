<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">

    @vite('resources/css/app.css')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

    <style>
         /* Aturan CSS untuk animasi */
        @keyframes modal-fade-in {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes modal-fade-out {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-20px);
            }
        }

        /* Terapkan animasi ke modal */
        #crud-modal {
            animation: modal-fade-in 0.3s ease forwards;
        }

        /* Terapkan animasi ke modal saat ditutup */
        #crud-modal[aria-hidden="true"] {
            animation: modal-fade-out 0.3s ease forwards;
        }
        
    </style>

</head>

<body>
    <!-- Header Section Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="mb-2 sm:mb-0 flex flex-row
  ">
                    <div class="h-24 self-center mx-4">
                        <img class="h-24 self-center" src="/logo.png" />
                    </div>
                    <div>
                        {{-- <a href="/home" class="text-xl no-underline text-green-900 font-semibold">My Blog</a><br>
                        <span class="font-light text-xs text-green-600">Esther Simatupang</span> --}}
                    </div>
                </div>


                <div class="flex items-center right-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-6 lg:hidden">
                        <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left "></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">

                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/"
                                    class="text-base text-black py-2 lg:mx-8 group-hover:text-cyan-900">Home</a>
                            </li>
                            <li class="group">
                                <a href="/download-panduan-airdop"
                                    class="text-base text-black py-2 lg:mx-8 group-hover:text-cyan-900">Download Panduan
                                    Airdrop untuk Pemula</a>
                            </li>
                            <li class="group">
                                <a href="/blog"
                                    class="text-base text-black py-2 lg:mx-8 group-hover:text-cyan-900">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="pt-24">
        @yield('contents')
    </div>

    {{-- <section id="contact">

        <div class="py-16 min-w-full flex transition-all duration-500 bg-slate-700 pt-30">
            <div class="container max-w-screen-lg mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 content-center">
                    <div class="">
                        <p class=" font-light text-white mb-4">          
                            Thank you for your attention.
                        </p>
                        <p class=" font-light text-white">
                            Esther Simatupang <br>
                            NIM 217046017 <br>
                            Mahasiswa Magister Ilmu Keperawatan- Fakultas Keperawatan.<br>
                            Universitas Sumatera Utara
                        </p>
                    </div>
                    <div class="col-span-2 sm:col-span-1 sm:my-auto  transition-all duration-500">
                        <div class="text-lg font-extralight grid gap-5 transition-all duration-500">
                            <div>
                                <a target="blank"
                                    href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=yudhatriya07@gmail.com"
                                    class="flex items-center gap-2 text-white">
                                    <ion-icon class="text-xl" name="mail-outline"></ion-icon>
                                    rakyatbiasanasional@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6  sm:mx-auto text-white lg:my-8" />

            </div>
        </div>
    </section> --}}

    {{-- @vite('resources/js/script.js') --}}

</body>



<script>
    //Scrip Untuk Navbar
    //hamburger
    const hamburger = document.querySelector("#hamburger");
    const navMenu = document.querySelector("#nav-menu");

    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("hamburger-active");
        navMenu.classList.toggle("hidden");
    });

</script>

<script>
    //Scrip Untuk Navbar
    //navbar fixed
    window.onscroll = function() {
        const header = document.querySelector("header");
        const navfix = header.offsetTop;

        if (window.pageYOffset > navfix) {
            header.classList.add("navbar-fixed");
        } else {
            header.classList.remove("navbar-fixed");
        }
    };
</script>


</html>
