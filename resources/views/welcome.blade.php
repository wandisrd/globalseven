<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    </head>
    <body class="bg-gray-100 font-sans">

        <!-- Navigation Bar -->
        <nav class="bg-ch_grey shadow py-4">
            <div class="container mx-auto px-4 flex justify-between items-center h-10">
                <img class="w-20" src="{{ asset('images/globalseven.png') }}" alt="Example Image">
                <div>
                    <!-- Hamburger Button (Mobile) -->
                    <button id="toggleButton" class="lg:hidden focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex space-x-4 font-bold text-ch_broen relative">
                    <a href="#home" class="hover:text-ch_gold">Home</a>
                    <a href="#about" class="hover:text-ch_gold">About</a>
                    <a href="#promo" class="hover:text-ch_gold">Promo</a>
                    <a href="#launching" class="hover:text-ch_gold">Launching</a>
        
                    <!-- Dropdown for Services -->
                    <div class="relative">
                        <button id="servicesButton" class="hover:text-ch_gold focus:outline-none">
                            Services
                        </button>
                        <ul id="servicesDropdown" class="absolute hidden bg-white shadow-lg border border-gray-200 rounded-md mt-2 py-2 w-40">
                            <li class="">
                                <a href="#servicess" class="block px-4 py-2 hover:bg-ch_gold hover:text-white">
                                    Design Interior
                                </a>
                            </li>
                            <li class="hover:bg-ch_gold hover:text-white">
                                <a href="#design-exterior" class="block px-4 py-2">
                                    Design Exterior
                                </a>
                            </li>
                        </ul>
                    </div>
        
                    <a href="#contact" class="hover:text-ch_gold">Contact</a>
                </div>
            </div>
        </nav>
        
        <!-- Sidebar -->
        <div id="sidebar" class="fixed w-1/2 inset-0 bg-gray-800 bg-opacity-75 z-50 transform -translate-x-full lg:hidden transition-transform">
            <div class="flex h-16 justify-end items-center mr-4">
                <button id="closeSidebarButton" class=" text-white text-4xl">
                    ×
                </button>
            </div>
            <div class="flex flex-col p-5 space-y-6 h-full text-white">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#promo">Promo</a>
                <a href="#launching">Launching</a>
                <a href="#servicess">Services</a>
                <a href="#contact">Contact</a>
            </div>
        </div>

    
        <!-- Header Section -->
        <header class="relative" id="home">
            <div class="relative">
                <!-- Gambar sebagai latar belakang -->
                <img class="lg:mx-40 w-full lg:w-1/2 h-auto object-cover" src="{{ asset('images/background.png') }}" alt="Background">
            
                <!-- Teks di atas gambar -->
                <div class="absolute inset-0 flex flex-col justify-between text-white">
                    <!-- Logo di tengah -->
                    <div class="grid grid-cols-3 gap-4 lg:mr-40">
                        <div class="col-span-2">
                            <!-- Kosong untuk spasi di sisi kiri -->
                        </div>
                        <div class="text-ch_broen mt-10 md:mt-28 lg:mt-36 text-center">
                            <img class="w-1/2 lg:w-4/6 mx-auto" src="{{ asset('images/globalseven.png') }}" alt="Global Seven Logo">
                            <p class="text-xl font-bold mt-2 lg:text-6xl">SELAMAT DATANG</p>
                        </div>
                    </div>
        
                    <!-- Teks layanan spa di bawah -->
                    <div class="flex justify-start bg-black bg-opacity-40 p-2">
                        <p class="text-lg">Global Seven Property</p>
                    </div>
                </div>
            </div>
        </header>
        
    
        <!-- About Section -->
        <section id="about" class="bg-ch_grey flex w-full justify-center"> 
            <div class="container p-20 text-center font-bold">
                <p>Tentang global seven</p>
            </div>
        </section>
        
        
        <!-- Promo Section -->
        <section id="promo" class="bg-ch_grey min-h-screen">
            <div class="py-5 bg-ch_broen h-30">
                <div class="flex flex-col space-y-4">
                    <hr class="w-full border-t-2 border-ch_gold z-0">
                    <div class="relative flex w-full justify-center items-center">
                        <div class="relative flex border-ch_gold text-gradient p-4 py-2 w-4/6 lg:w-1/2 justify-center items-center rounded-lg shadow-lg">
                            <img class="w-20 lg:w-36" src="{{ asset('images/globalseven_.png') }}" alt="Global Seven Logo">
                            <h1 class="text-4xl lg:text-6xl mx-5">PROMO</h1>
                        </div>
                    </div>
                    <hr class="w-full border-t-2 border-ch_gold z-0">
                </div>
            </div>
            <div class="flex w-full justify-center">
                <div class="container p-2 lg:p-10 grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-10">
                    <div class="bg-ch_grey p-0.5 rounded-xl hover:border-ch_gold hover:border-2 hover:transition-all" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                        <button x-data="{}" @click="openPreviewImage(0)">
                            <img class="w-full rounded-t-lg" src="{{ asset('images/promo/ruana 36_72.JPEG') }}">
                        </button>
                        <div class="flex w-full justify-between lg:gap-2 text-sm lg:text-2xl mb-3">
                            <div class="flex w-full justify-center items-center text-center p-2 font-bold text-ch_broen">
                                <div>READY STOCK</div>
                            </div>
                            <div class="w-full bg-ch_broen text-ch_gold text-center font-bold rounded-l-lg p-2 lg:p-3">
                                <p>DP</p>
                                <p>2.5 Juta</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-ch_grey p-0.5 rounded-xl hover:border-ch_gold hover:border-2 hover:transition-all" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                        <button x-data="{}" @click="openPreviewImage(1)">
                            <img class="w-full rounded-t-lg" src="{{ asset('images/promo/ruana 36_72 (2).JPEG') }}">
                        </button>
                        <div class="flex w-full justify-between lg:gap-2 text-sm lg:text-2xl mb-3">
                            <div class="flex w-full justify-center items-center text-center p-2 font-bold text-ch_broen">
                                <div>READY STOCK</div>
                            </div>
                            <div class="w-full bg-ch_broen text-ch_gold text-center font-bold rounded-l-lg p-2 lg:p-3">
                                <p>DP</p>
                                <p>2.5 Juta</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-ch_grey p-0.5 rounded-xl hover:border-ch_gold hover:border-2 hover:transition-all" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                        <button x-data="{}" @click="openPreviewImage(2)">
                            <img class="w-full rounded-t-lg" src="{{ asset('images/promo/ruana 36_72 (3).JPEG') }}">
                        </button>
                        <div class="flex w-full justify-between lg:gap-2 text-sm lg:text-2xl mb-3">
                            <div class="flex w-full justify-center items-center text-center p-2 font-bold text-ch_broen">
                                <div>READY STOCK</div>
                            </div>
                            <div class="w-full bg-ch_broen text-ch_gold text-center font-bold rounded-l-lg p-2 lg:p-3">
                                <p>DP</p>
                                <p>2.5 Juta</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-ch_grey p-0.5 rounded-xl hover:border-ch_gold hover:border-2 hover:transition-all" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                        <button x-data="{}" @click="openPreviewImage(3)">
                            <img class="w-full rounded-t-lg" src="{{ asset('images/promo/ruana 36_72 (4).JPEG') }}">
                        </button>
                        <div class="flex w-full justify-between lg:gap-2 text-sm lg:text-2xl mb-3">
                            <div class="flex w-full justify-center items-center text-center p-2 font-bold text-ch_broen">
                                <div>READY STOCK</div>
                            </div>
                            <div class="w-full bg-ch_broen text-ch_gold text-center font-bold rounded-l-lg p-2 lg:p-3">
                                <p>DP</p>
                                <p>2.5 Juta</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-ch_grey p-0.5 rounded-xl hover:border-ch_gold hover:border-2 hover:transition-all" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                        <button x-data="{}" @click="openPreviewImage(4)">
                            <img class="w-full rounded-t-lg" src="{{ asset('images/promo/ruana 36_72 (5).JPEG') }}">
                        </button>
                        <div class="flex w-full justify-between lg:gap-2 text-sm lg:text-2xl mb-3">
                            <div class="flex w-full justify-center items-center text-center p-2 font-bold text-ch_broen">
                                <div>READY STOCK</div>
                            </div>
                            <div class="w-full bg-ch_broen text-ch_gold text-center font-bold rounded-l-lg p-2 lg:p-3">
                                <p>DP</p>
                                <p>2.5 Juta</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <!-- Modal -->
        <div x-data="previewModal()" @open-modal.window="isOpen = true" x-show="isOpen" x-init="init()" x-transition class="fixed inset-0 bg-black bg-opacity-80 flex justify-center items-center" style="display: none;">
            <button @click="closePreview" class="absolute top-5 right-5 text-white text-2xl">&times;</button>
            <button @click="prevImage" class="absolute left-5 text-white text-2xl">&#9664;</button>
            <img :src="images[currentIndex]" class="">
            <button @click="nextImage" class="absolute right-5 text-white text-2xl">&#9654;</button>
        </div>

        <!-- Servicess Section -->
        <section id="servicess" class="bg-ch_grey min-h-screen">
            <div class="py-5 bg-ch_broen h-30">
                <div class="flex flex-col space-y-4">
                    <hr class="w-full border-t-2 border-ch_gold z-0">
                    <div class="relative flex w-full justify-center items-center">
                        <div class="relative flex border-ch_gold text-gradient p-4 py-2 w-4/6 lg:w-1/2 justify-center items-center rounded-lg shadow-lg">
                            <img class="w-20 lg:w-36" src="{{ asset('images/globalseven_.png') }}" alt="Global Seven Logo">
                            <h1 class="text-4xl lg:text-6xl mx-5">SERVICESS</h1>
                        </div>
                    </div>
                    <hr class="w-full border-t-2 border-ch_gold z-0">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="container p-2">
                    <div class="flex text-ch_grey rounded-l-full overflow-x-auto scroll-snap-x bg-ch_broen lg:bg-ch_grey rounded-r-full">
                        <div class="flex rounded-r-full font-bold lg:bg-ch_broen">
                            <button id="btn-1" onclick="setActive('btn-1','bgrounded-1',1)" class="flex flex-shrink-0 scroll-snap-start hover:text-ch_gold">
                                <div id="bgrounded-1" class="p-2 border-2 rounded-full w-10">1</div>
                                <div class="p-2 px-4">Design Interior</div>
                            </button> 
                            <button id="btn-2" onclick="setActive('btn-2','bgrounded-2',2)" class="flex flex-shrink-0 scroll-snap-start hover:text-ch_gold">
                                <div id="bgrounded-2" class="p-2 border-2 rounded-full w-10">2</div>
                                <div class="p-2 px-4">Design Interior</div>
                            </button> 
                            <button id="btn-3" onclick="setActive('btn-3','bgrounded-3',3)" class="flex flex-shrink-0 scroll-snap-start hover:text-ch_gold mr-5">
                                <div id="bgrounded-3" class="p-2 border-2 rounded-full w-10">3</div>
                                <div class="p-2 px-4">Home Renovation</div>
                            </button> 
                            <button id="btn-4" onclick="setActive('btn-4','bgrounded-4',4)" class="flex flex-shrink-0 scroll-snap-start hover:text-ch_gold mr-5">
                                <div id="bgrounded-4" class="p-2 border-2 rounded-full w-10">4</div>
                                <div class="p-2 px-4">Contractor</div>
                            </button> 
                        </div>
                    </div>
                    <div id="design-1" class="flex mt-2 animate__animated animate__zoomIn">
                        <div class="w-full p-4">
                            <img class="w-full lg:w-5/6 rounded-lg" src="{{ asset('images/servicess/interior1.JPEG') }}" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
                        </div>
                        <div class="flex w-full">
                            <div class="flex font-bold items-center justify-center text-center">Tentang design interior</div>
                        </div>
                    </div>
                    <div id="design-2" class="flex mt-2 animate__animated animate__zoomIn">
                        <div class="w-full p-4">
                            <img class="w-full lg:w-5/6 rounded-lg" src="{{ asset('images/servicess/exterior1.JPEG') }}" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
                        </div>
                        <div class="flex w-full">
                            <div class="flex font-bold items-center justify-center text-center">Tentang design exterior</div>
                        </div>
                    </div>
                    <div id="design-3" class="flex mt-2  animate__animated animate__zoomIn">
                        <div class="w-full p-4">
                            <img class="w-full lg:w-4/6 rounded-lg" src="{{ asset('images/servicess/hr1.JPEG') }}" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
                        </div>
                        <div class="flex w-full">
                            <div class="flex font-bold items-center justify-center text-center">Tentang Home renovation</div>
                        </div>
                    </div>
                    <div id="design-4" class="flex mt-2  animate__animated animate__zoomIn">
                        <div class="w-full p-4">
                            <img class="w-full lg:w-5/6 rounded-lg" src="{{ asset('images/servicess/jc1.JPG') }}" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
                        </div>
                        <div class="flex w-full">
                            <div class="flex font-bold items-center justify-center text-center">Tentang contractor</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicess Section -->
        <section id="contact" class="bg-ch_grey">
            <div class="bg-ch_broen h-30">
                <div class="flex flex-col">
                    <div class="relative flex w-full justify-center items-center mt-5">
                        <div class="relative flex border-ch_gold text-gradient p-4 py-2 w-4/6 lg:w-1/2 justify-center items-center rounded-lg shadow-lg">
                            <img class="w-20 lg:w-36" src="{{ asset('images/globalseven_.png') }}" alt="Global Seven Logo">
                            <h1 class="text-4xl lg:text-6xl mx-5">CONTACT</h1>
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-center mt-2 lg:mt-10 mx-10">
                    <div class="container grid grid-cols-1 lg:grid-cols-4 py-5 text-white">
                        <div class="flex items-center">
                            <p class="text-2xl mr-1"><i class='bx bxl-whatsapp'></i></p>085217252001 
                        </div>
                        <div class="flex items-center">
                            <p class="text-2xl mr-1"><i class='bx bxl-instagram'></i></p>@jasa_renovasi_rumahgiesun 
                        </div>
                        <div class="flex items-center">
                            <p class="text-2xl mr-1"><i class='bx bx-envelope' ></i></p>globalseven02@gmail.com 
                        </div>
                        <div class="flex items-center mt-3 lg:mt-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8890980522547!2d107.59266847573225!3d-7.022320468794495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ebd09fa3b8ff%3A0x82bc2dab4ee64a95!2sJl.%20Raya%20Banjaran%20Barat%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1735357450608!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <button id="backToTop" class="fixed-bottom-btn hidden bg-spa_yellow text-spa_black font-bold p-3 rounded-full">
            ↑
        </button>
    </body>
</html>

<script>
     // Fungsi untuk menambahkan kelas "active" pada tombol yang dipilih
     function setActive(id, idbtnrounded, img) {
        // Hapus kelas 'active' dari semua tombol
        const buttons = document.querySelectorAll("button");
        buttons.forEach(button => {
            button.classList.remove("text-ch_gold");
        });

        for (let i = 1; i <= 4; i++) {
            document.getElementById('bgrounded-'+i).classList.remove("bg-ch_gold", 'text-white');
            document.getElementById('design-'+i).classList.add("hidden");
        }

        // Tambahkan kelas 'active' pada tombol yang diklik
        const activeButton = document.getElementById(id);
        activeButton.classList.add("text-ch_gold"); // Menambahkan warna latar belakang aktif dan warna teks aktif

        const activeButton2 = document.getElementById(idbtnrounded);
        activeButton2.classList.add("bg-ch_gold", 'text-white'); // Menambahkan warna latar belakang aktif dan warna teks aktif

        document.getElementById('design-'+img).classList.remove("hidden");
    }
    function openPreviewImage(index){
        const event = new CustomEvent('open-modal', { detail: { index } });
        window.dispatchEvent(event);
    }
    function previewModal() {
        return {
            isOpen: false,
            currentIndex: 0,
            images: [
                '{{ asset("images/promo/ruana 36_72.JPEG") }}',
                '{{ asset("images/promo/ruana 36_72 (2).JPEG") }}',
                '{{ asset("images/promo/ruana 36_72 (3).JPEG") }}',
                '{{ asset("images/promo/ruana 36_72 (4).JPEG") }}',
                '{{ asset("images/promo/ruana 36_72 (5).JPEG") }}'
            ],
            init() {
                window.addEventListener('open-modal', (event) => {
                    const { index } = event.detail;
                    if (typeof index === 'number' && index >= 0 && index < this.images.length) {
                        this.currentIndex = index;
                        console.log('Current Index:', this.currentIndex); // Debug
                        this.isOpen = true;
                    }
                });
            },
            closePreview() {
                this.isOpen = false;
            },
            nextImage() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },
            prevImage() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            }
        };
    }
    document.addEventListener('DOMContentLoaded', function () {
        const backToTopButton = document.getElementById('backToTop');
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('toggleButton');
        const closeSidebarButton = document.getElementById('closeSidebarButton');
        setActive('btn-1','bgrounded-1',1)

        // Tampilkan tombol ketika scroll ke bawah
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });

        // Scroll kembali ke atas saat tombol diklik
        backToTopButton.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth',
            });
        });

        // Smooth scroll untuk semua tautan
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start',
                    });
                }
            });
        });

        // Toggle Navbar (Mobile)
        toggleButton.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Close Sidebar when close button is clicked
        closeSidebarButton.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
        });

        const servicesButton = document.getElementById("servicesButton");
        const servicesDropdown = document.getElementById("servicesDropdown");

        // Toggle dropdown visibility on button click
        servicesButton.addEventListener("click", function (event) {
            servicesDropdown.classList.toggle("show");
            event.stopPropagation();  // Prevent click event from closing dropdown immediately
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", function (event) {
            if (!servicesButton.contains(event.target) && !servicesDropdown.contains(event.target)) {
                servicesDropdown.classList.remove("show");
            }
        });
    });
</script>
