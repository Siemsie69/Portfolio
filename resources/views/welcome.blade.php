<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Siem</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <style>
        html {
            scroll-behavior: smooth;
        }

        #theme-icon.fa-sun {
            color: black;
        }

        #theme-icon.fa-moon {
            color: white;
        }

        .dark-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 40;
            display: none;
        }

        .tech-item i {
            transition: color 0.3s ease;
        }

        .tech-item span {
            font-size: 1.1rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .bg-light {
            background-color: #f7fafc;
        }
        .dark .bg-darkBlack {
            background-color: #000000;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-100vh);
            }
        }

        .particle {
            opacity: 0.8;
        }
    </style>
</head>

<body class="bg-light text-black dark:bg-darkBlack dark:text-white">
<!-- Navbar -->
<nav class="sticky top-0 z-50 bg-white dark:bg-darkBlack shadow-md dark:shadow-white/30 shadow-black/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo and Name -->
            <a href="#home">
                <div class="flex items-center cursor-pointer">
                    <img src="images/Myself.jpg" alt="Your Image" class="h-10 w-10 rounded-full mr-3">
                    <span class="text-xl font-semibold text-black dark:text-white">Siem van Bree</span>
                </div>
            </a>

            <!-- Desktop Links -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="#about" class="font-sans hover:text-gray-500 dark:hover:text-gray-300 text-black dark:text-white">About</a>
                <a href="#work-tab" class="font-sans hover:text-gray-500 dark:hover:text-gray-300 text-black dark:text-white">Work</a>
                <a href="#education-tab" class="font-sans hover:text-gray-500 dark:hover:text-gray-300 text-black dark:text-white">Education</a>
                <a href="#achievements-tab" class="font-sans hover:text-gray-500 dark:hover:text-gray-300 text-black dark:text-white">Achievements</a>
                <a href="#technologies" class="font-sans hover:text-gray-500 dark:hover:text-gray-300 text-black dark:text-white">Technologies</a>
                <a href="#contact" class="font-sans hover:text-gray-500 dark:hover:text-gray-300 text-black dark:text-white">Contact</a>
                <!-- Toggle Dark/Light Mode -->
                <button id="theme-toggle" class="bg-gray-200 dark:bg-gray-700 p-2 rounded-full focus:outline-none">
                    <i id="theme-icon" class="fas fa-moon text-gray-800 dark:text-white"></i>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-400 hover:text-gray-200 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Links -->
    <div id="mobile-menu" class="fixed inset-y-0 right-0 w-64 transform translate-x-full transition-transform duration-300 ease-in-out bg-white dark:bg-darkBlack shadow-lg md:hidden">
        <div class="flex flex-col p-4">
            <!-- Close Button -->
            <div class="flex justify-between items-center mb-4">
                <a href="#home" class="flex items-center cursor-pointer">
                    <img src="images/Myself.jpg" alt="Your Image" class="h-10 w-10 rounded-full mr-3">
                    <span class="text-xl font-semibold text-black dark:text-white">Siem van Bree</span>
                </a>
                <button id="close-menu-button" class="text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <a href="#about" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">About</a>
            <a href="#work-tab" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">Work</a>
            <a href="#education-tab" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">Education</a>
            <a href="#achievements-tab" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">Achievements</a>
            <a href="#technologies" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">Technologies</a>
            <a href="#contact" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">Contact</a>
            <!-- Toggle Dark/Light Mode in Mobile Menu -->
            <button id="theme-toggle-mobile" class="bg-gray-200 dark:bg-gray-700 p-2 rounded-full focus:outline-none mt-4">
                <i id="theme-icon-mobile" class="fas fa-moon text-gray-800 dark:text-white"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Dark overlay for Mobile -->
<div id="dark-overlay" class="dark-overlay"></div>

<!-- Main Content -->
<main class="container mx-auto p-6">
    <section id="home" class="flex flex-col items-center justify-center pt-12 md:pt-20 lg:pt-60 xl:pt-60 space-y-6">
        <div class="section-container flex justify-center">
            <div class="flex flex-col items-center justify-center gap-3 w-11/12 lg:w-2/3">
                <h4 class="text-xs">BASED IN THE NETHERLANDS</h4>
                <h1 class="text-3xl sm:text-5xl md:text-6xl text-center leading-[2.25rem] md:leading-[4rem] hero-text">
                    <span>Software Developer Specializing In </span>
                    <span class="text-blue-400">Websites</span>
                </h1>
                <p class="text-center text-gray-400">
                    Hi, I&#x27;m Siem, a website designer and builder who makes creative and functional websites
                </p>
                <div class="flex items-center gap-4 text-sm">
                    <a href="#tabs" class="bg-[#222222] text-white dark:bg-[#222222] dark:text-white light:bg-white light:text-black light:border-[#222222] px-4 py-2 rounded-md border border-slate-500 see-work-btn">
                        See My Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="flex flex-col items-center text-center space-y-20 max-w-6xl mx-auto py-24 px-6">

        <!-- First Block: Image Left, Text Right -->
        <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-10 space-y-10 md:space-y-0">
            <!-- Image Container -->
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <div class="w-80 h-80 overflow-hidden rounded-xl shadow-2xl">
                    <img src="{{ asset('images/Myself.jpg') }}" alt="A Portrait of Myself" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Text Content -->
            <div class="md:w-1/2 space-y-4 text-left">
                <div class="text-4xl font-bold text-blue-400 mb-6 flex justify-start items-center space-x-2">
                    <i class="fas fa-user mr-1 text-blue-400"></i> <span>About me</span>
                </div>
                <p class="text-lg">I’m Siem, an 18-year-old software development student at Summa College in Eindhoven, the Netherlands. I enjoy helping others and taking the lead in projects, always looking for a positive way to tackle challenges. I like solving problems and creating practical, user-friendly solutions. Whether I’m coding or offering support, I’m always focused on learning and improving. I’m excited to explore new technologies and take on fresh challenges to sharpen my skills.</p>
            </div>
        </div>

        <!-- Second Block: Text Left, Image Right (Programming Block) -->
        <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-10 space-y-10 md:space-y-0">
            <!-- Text Content (Right Aligned) -->
            <div class="md:w-1/2 space-y-4 text-right pt-10">
                <div class="text-4xl font-bold text-blue-400 mb-4 flex justify-end items-center space-x-2">
                    <i class="fas fa-code mr-1 text-blue-400"></i> <span>Programming</span>
                </div>
                <p class="text-lg">
                    As a student, I focus on web and desktop development, with a particular interest in building websites. I work on both frontend and backend using tools like Laravel, Tailwind CSS, and C#. I’ve had the chance to work on projects for a real company and a care school, and it’s always rewarding to see a website come together and work as intended. My goal is to keep improving and take on more complex projects in the future.
                </p>
            </div>

            <!-- Image Container -->
            <div class="md:w-1/2 flex justify-center md:justify-start">
                <div class="w-80 h-80 overflow-hidden rounded-xl shadow-2xl">
                    <img src="{{ asset('images/Coding.jpg') }}" alt="Code Example" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Third Block: Image Left, Text Right (Photography Block) -->
        <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-10 space-y-10 md:space-y-0">
            <!-- Image Container -->
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <div class="w-80 h-80 overflow-hidden rounded-xl shadow-2xl">
                    <img src="{{ asset('images/Leaf.jpg') }}" alt="A small green Leaf that is flying" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Text Content -->
            <div class="md:w-1/2 space-y-4 text-left pt-10">
                <div class="text-4xl font-bold text-blue-400 mb-4 flex justify-start items-center space-x-2">
                    <i class="fas fa-camera mr-1 text-blue-400"></i> <span>Photography</span>
                </div>
                <p class="text-lg">
                    I also enjoy capturing nature and wildlife through photography. I love photographing landscapes, animals, and the beauty of the natural world. I aim to create images that feel simple and peaceful, inviting viewers to appreciate the environment. Each photo is a chance to capture a moment, and I hope it brings the same calm connection to nature that I feel when taking it.
                </p>
            </div>
        </div>

    </section>

    <!-- Work, Education and Achievements tabs -->
    <section id="tabs">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-blue-400 mb-12 flex justify-center items-center space-x-2">
                <i class="fas fa-graduation-cap text-blue-400"></i>
                <span>Work, Education and Achievements</span>
            </h2>
            <div class="flex space-x-2 bg-gray-200 dark:bg-gray-700 rounded-lg p-1">
                <button id="work-tab"
                        class="tab-button flex-1 px-4 py-2 text-sm font-medium bg-white text-blue-600 dark:bg-gray-800 rounded-md">
                    Work
                </button>
                <button id="education-tab"
                        class="tab-button flex-1 px-4 py-2 text-sm font-medium bg-white text-blue-600 dark:bg-gray-800 rounded-md">
                    Education
                </button>
                <button id="achievements-tab"
                        class="tab-button flex-1 px-4 py-2 text-sm font-medium bg-white text-blue-600 dark:bg-gray-800 rounded-md">
                    Achievements
                </button>
            </div>

            <!-- Work Panel -->
            <div id="work-panel" class="tab-panel mt-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow hidden">
                <div class="flex items-start gap-4">
                    <img src="images/Van-Cranenbroek-logo.png" alt="Work Logo" class="w-12 h-12 rounded-full">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Van Cranenbroek</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Date: 2022 - Present</p>
                        <p class="text-sm mt-2 text-gray-700 dark:text-gray-300">
                            I work part-time at Van Cranenbroek, a well-established company offering a wide range of products such as garden machines, furniture, tools, pet supplies, and various other items.
                            The main location is in Budel, and I work there whenever I have time. Although my official role is a shelf stacker, my responsibilities go beyond that.
                            I also assist customers, help with sales, and work at the takeaway warehouse.
                            I have been working here for around 3 years, and I really enjoy working with my colleagues in a store that offers such a wide variety of products.
                            Van Cranenbroek has grown significantly over the years, thanks to its global imports and bold buying and selling strategies, providing customers with great prices.
                        </p>
                    </div>
                </div>

                <div class="border-t my-4"></div>

                <div class="flex items-start gap-4">
                    <img src="images/Spotta-logo.png" alt="Spotta Logo" class="w-12 h-12 rounded-full">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Spotta</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Date: 2020 - 2021</p>
                        <p class="text-sm mt-2 text-gray-700 dark:text-gray-300">
                            At Spotta, I was responsible for delivering direct mail
                            advertising across my village and surrounding areas.
                            Working in all weather conditions, I ensured that promotional materials,
                            offers, and catalogs reached customers' mailboxes on time.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Education Panel -->
            <div id="education-panel" class="tab-panel hidden mt-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow">
                <div class="flex items-start gap-4">
                    <img src="images/Summa-ICT-logo.png" alt="Summa ICT Logo" class="w-12 h-12 rounded-full">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Summa College (ICT) Eindhoven</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Date: September 2023 - Present (2027 anticipated)</p>
                        <p class="text-sm text-gray-700 dark:text-gray-300 mt-2">
                            The Software Developer program at Summa College teaches the design, development, and maintenance of software solutions.
                            I learn to create websites, apps, desktop software, and embedded systems.
                            The program covers programming, software architecture, web development, and database management, while focusing on teamwork and project management.
                            I gain experience by working on real-world projects, preparing me for a career in software development.
                        </p>
                    </div>
                </div>

                <div class="border-t my-4"></div>

                <div class="flex items-start gap-4">
                    <img src="images/Bravo-logo.png" alt="Bravo College Logo" class="w-12 h-12 rounded-full">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Bravo College Budel</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Date: 2019 - 2023</p>
                        <p class="text-sm text-gray-700 dark:text-gray-300 mt-2">
                            I started and I completed my Theoretische Leerweg (Mavo)/VMBO TL at BRAVO! College in Cranendonck.
                            The school provided a warm and supportive environment with a focus on collaboration and individual attention.
                            The program offered a strong foundation in academic subjects, preparing me for further education and studies.
                        </p>
                    </div>
                </div>

                <div class="border-t my-4"></div>

                <div class="flex items-start gap-4">
                    <img src="images/Triolier-logo.png" alt="Triolier Logo" class="w-12 h-12 rounded-full">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">OBS De Triolier Budel</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Date: 2012 - 2019</p>
                        <p class="text-sm mt-2 text-gray-700 dark:text-gray-300">
                            OBS de Triolier uses the Peacefull School program to foster a positive social environment and prepare students for active citizenship.
                            We focus on developing not only academic skills like reading and math, but also essential social skills.
                            The program helps children learn to interact positively, make democratic decisions, and contribute to the group, creating a fun and productive learning atmosphere.
                            Here, I received guidance for my primary school education.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Achievements Panel -->
            <div id="achievements-panel" class="tab-panel hidden mt-4 p-4 bg-white dark:bg-gray-800 rounded-lg">
                <div class="flex items-start gap-4">
                    <img src="images/Hackathon-Masters-logo.jpg" alt="Achievement Logo" class="w-12 h-12 rounded-full">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Digital Proof Hackathon</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Date: 03 - 06 December 2024</p>
                        <p class="text-sm mt-2 text-gray-700 dark:text-gray-300">I participated in the Digital Proof Hackathon organized by Hackathon Masters at the Automotive Campus in Helmond.
                            It was a great opportunity to meet new people from different schools and work on an exciting challenge.
                            My team (Raúl Van der Zande and Niek van Bree) chose Challenge C:
                            modernizing the outdated website of the 2CV KitCarClub, a club of 280 members who build and drive nostalgic
                            2CV KitCars. We conducted research on the target audience and design trends, then built a functional prototype using Laravel and Tailwind CSS.
                            Raúl also developed a mobile app in Flutter, sharing helpful insights with the team.

                            Although we didn’t win, we received valuable feedback on both our presentation and solution.
                            It was an enriching experience that sharpened my skills, and I’m excited for the next one!
                        </p>
                    </div>
                </div>

                <div class="border-t my-4"></div>

                <div class="flex items-start gap-4">
                    <img src="images/Summa-logo.jpg" alt="Summa Logo" class="w-12 h-12 rounded-full">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Hackathon Mentech 2024</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Date: 28 - 29 August 2024</p>
                        <p class="text-sm mt-2 text-gray-700 dark:text-gray-300">I participated in the 2024 Hackathon organized by Mentech,
                            a healthcare tech company in Eindhoven. The challenge was to develop an AI Companion
                            to reduce loneliness among elderly and those with mild disabilities.
                            My team and I designed a chatbot with an empathetic, human-like avatar that could communicate via speech and text,
                            offering the option to choose between a male or female avatar. After pitching our solution,
                            we ended up in second place out of 20 teams. This project strengthened my passion for creating impactful,
                            user-centered technology solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section id="technologies" class="py-24">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-blue-400 mb-12 flex justify-center items-center space-x-2">
                <i class="fas fa-laptop-code text-blue-400"></i>
                <span>Technologies</span>
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                <!-- HTML -->
                <div class="tech-item flex flex-col items-center">
                    <i class="fab fa-html5 text-6xl dark:text-gray-200"></i>
                    <span class="mt-2 dark:text-gray-300">HTML 5</span>
                </div>
                <!-- CSS -->
                <div class="tech-item flex flex-col items-center">
                    <i class="fab fa-css3-alt text-6xl dark:text-gray-200"></i>
                    <span class="mt-2 dark:text-gray-300">CSS 3</span>
                </div>
                <!-- JavaScript -->
                <div class="tech-item flex flex-col items-center">
                    <i class="fab fa-js-square text-6xl dark:text-gray-200"></i>
                    <span class="mt-2 dark:text-gray-300">JavaScript</span>
                </div>
                <!-- Laravel -->
                <div class="tech-item flex flex-col items-center">
                    <svg fill="currentColor" width="64px" height="64px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="dark:text-gray-200">
                        <path d="M31.526 7.24c0.010 0.042 0.016 0.089 0.016 0.13v6.87c0 0.177-0.094 0.344-0.25 0.432l-5.766 3.323v6.578c0 0.177-0.094 0.344-0.25 0.432l-12.036 6.927c-0.026 0.016-0.057 0.026-0.089 0.036-0.010 0.005-0.021 0.010-0.031 0.016-0.083 0.021-0.172 0.021-0.255 0-0.016-0.005-0.026-0.010-0.036-0.016-0.031-0.010-0.057-0.021-0.083-0.036l-12.031-6.927c-0.156-0.089-0.255-0.255-0.255-0.432v-20.609c0-0.042 0.010-0.089 0.021-0.13 0.005-0.016 0.010-0.026 0.016-0.042 0.010-0.026 0.021-0.052 0.031-0.078 0.005-0.016 0.021-0.026 0.031-0.042 0.016-0.021 0.031-0.042 0.047-0.063 0.016-0.010 0.031-0.021 0.047-0.036 0.021-0.016 0.036-0.031 0.057-0.042l6.016-3.464c0.156-0.089 0.349-0.089 0.5 0l6.021 3.464c0.021 0.010 0.036 0.026 0.052 0.042 0.016 0.010 0.036 0.026 0.052 0.036 0.016 0.021 0.026 0.036 0.042 0.063 0.010 0.010 0.026 0.026 0.036 0.042 0.010 0.026 0.021 0.052 0.031 0.078 0.005 0.016 0.016 0.026 0.016 0.042 0.016 0.042 0.021 0.083 0.021 0.13v12.87l5.010-2.885v-6.578c0-0.047 0.010-0.089 0.021-0.13 0.005-0.016 0.010-0.031 0.016-0.042 0.010-0.026 0.021-0.052 0.031-0.078 0.010-0.021 0.026-0.031 0.036-0.047 0.016-0.021 0.026-0.042 0.042-0.057s0.036-0.026 0.052-0.036c0.016-0.016 0.031-0.031 0.052-0.042l6.021-3.464c0.151-0.094 0.344-0.094 0.5 0l6.016 3.464c0.021 0.010 0.036 0.026 0.057 0.042 0.016 0.010 0.031 0.021 0.047 0.036s0.031 0.036 0.047 0.057c0.010 0.016 0.026 0.026 0.031 0.047 0.016 0.026 0.021 0.052 0.031 0.078 0.010 0.010 0.016 0.026 0.021 0.042zM30.536 13.948v-5.708l-2.104 1.208-2.906 1.677v5.708zM24.526 24.281v-5.714l-2.865 1.63-8.167 4.667v5.766zM1.458 4.833v19.448l11.031 6.349v-5.766l-5.766-3.266c-0.021-0.010-0.036-0.026-0.052-0.042-0.016-0.010-0.036-0.021-0.047-0.036h-0.005c-0.016-0.016-0.026-0.036-0.042-0.052-0.010-0.016-0.026-0.031-0.036-0.052-0.010-0.016-0.021-0.042-0.026-0.063-0.010-0.021-0.021-0.036-0.026-0.057s-0.010-0.047-0.010-0.073c-0.005-0.021-0.010-0.036-0.010-0.057v-13.448l-2.906-1.677zM6.974 1.078l-5.010 2.885 5.010 2.885 5.010-2.885zM9.583 19.089l2.906-1.677v-12.578l-2.104 1.208-2.911 1.677v12.578zM25.026 4.484l-5.016 2.885 5.016 2.885 5.010-2.885zM24.526 11.125l-5.016-2.885v5.708l2.906 1.677 2.109 1.208zM12.99 23.995l11.026-6.292-5.005-2.885-11.021 6.344z"/>
                    </svg>
                    <span class="mt-2 dark:text-gray-300">Laravel</span>
                </div>
                <!-- Tailwind CSS -->
                <div class="tech-item flex flex-col items-center">
                    <svg fill="currentColor" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="dark:text-gray-200">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.036c-2.667 0-4.333 1.325-5 3.976 1-1.325 2.167-1.822 3.5-1.491.761.189 1.305.738 1.906 1.345C13.387 10.855 14.522 12 17 12c2.667 0 4.333-1.325 5-3.976-1 1.325-2.166 1.822-3.5 1.491-.761-.189-1.305-.738-1.907-1.345-.98-.99-2.114-2.134-4.593-2.134zM7 12c-2.667 0-4.333 1.325-5 3.976 1-1.326 2.167-1.822 3.5-1.491.761.189 1.305.738 1.907 1.345.98.989 2.115 2.134 4.594 2.134 2.667 0 4.333-1.325 5-3.976-1 1.325-2.167 1.822-3.5 1.491-.761-.189-1.305-.738-1.906-1.345C10.613 13.145 9.478 12 7 12z"/>
                    </svg>
                    <span class="mt-2 dark:text-gray-300">Tailwind CSS</span>
                </div>
                <!-- Figma -->
                <div class="tech-item flex flex-col items-center">
                    <i class="fab fa-figma text-6xl dark:text-gray-200"></i>
                    <span class="mt-2 dark:text-gray-300">Figma</span>
                </div>
                <!-- C# -->
                <div class="tech-item flex flex-col items-center">
                    <svg fill="currentColor" width="64px" height="64px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" class="dark:text-gray-200">
                        <path d="M 25 2 C 24.285156 2 23.570313 2.179688 22.933594 2.539063 L 6.089844 12.003906 C 4.800781 12.726563 4 14.082031 4 15.535156 L 4 34.464844 C 4 35.917969 4.800781 37.273438 6.089844 37.996094 L 22.933594 47.460938 C 23.570313 47.820313 24.285156 48 25 48 C 25.714844 48 26.429688 47.820313 27.066406 47.460938 L 43.910156 38 C 45.199219 37.273438 46 35.917969 46 34.464844 L 46 15.535156 C 46 14.082031 45.199219 12.726563 43.910156 12.003906 L 27.066406 2.539063 C 26.429688 2.179688 25.714844 2 25 2 Z M 25 13 C 28.78125 13 32.277344 14.753906 34.542969 17.738281 L 30.160156 20.277344 C 28.84375 18.835938 26.972656 18 25 18 C 21.140625 18 18 21.140625 18 25 C 18 28.859375 21.140625 32 25 32 C 26.972656 32 28.84375 31.164063 30.160156 29.722656 L 34.542969 32.261719 C 32.277344 35.246094 28.78125 37 25 37 C 18.382813 37 13 31.617188 13 25 C 13 18.382813 18.382813 13 25 13 Z M 35 20 L 37 20 L 37 22 L 39 22 L 39 20 L 41 20 L 41 22 L 43 22 L 43 24 L 41 24 L 41 26 L 43 26 L 43 28 L 41 28 L 41 30 L 39 30 L 39 28 L 37 28 L 37 30 L 35 30 L 35 28 L 33 28 L 33 26 L 35 26 L 35 24 L 33 24 L 33 22 L 35 22 Z M 37 24 L 37 26 L 39 26 L 39 24 Z"/>
                    </svg>
                    <span class="mt-2 dark:text-gray-300">C#</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left max-w-6xl mx-auto py-24 px-6">
        <!-- Left Text Section (Contact Info Above the Form) -->
        <div class="md:w-1/2 space-y-6">
            <div class="text-4xl font-bold text-blue-400 mb-4 flex justify-center md:justify-start items-center space-x-2">
                <i class="fas fa-envelope text-blue-400"></i> <span>Contact Me</span>
            </div>
            <p class="text-lg dark:text-gray-300 space-y-4">
                If you have any questions, requests, or just want to get in touch, feel free to use the contact form below.
                I'm always happy to discuss potential projects or collaborations.
                You can also reach me through my social media links.
            </p>

            <!-- Social Links -->
            <div class="flex justify-center md:justify-start mt-6 space-x-4">
                <a href="https://www.linkedin.com/in/siem-van-bree-b0b68b269" target="_blank" class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a href="https://github.com/Siemsie69" target="_blank" class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">
                    <i class="fab fa-github fa-2x"></i>
                </a>
                <a href="mailto:siemvanbree2006@gmail.com" class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">
                    <i class="fas fa-envelope fa-2x"></i>
                </a>
            </div>
        </div>

        <!-- Form Section -->
        <div class="md:w-1/2 w-full mt-10 md:mt-0">
            <h3 class="text-2xl font-bold text-center text-blue-400">Fill in the Contact Form</h3>
            <form action="/send-contact-email" method="POST" class="space-y-4 mt-6">
                @csrf <!-- Protect against CSRF attacks -->

                <!-- Success Message -->
                @if (session('success'))
                    <div id="success-message" class="text-green-500 font-bold text-center bg-white dark:bg-gray-800 dark:text-green-400 border border-green-400 dark:border-green-500 rounded-md p-3 w-full md:w-3/4 mx-auto">
                        {{ session('success') }}
                    </div>
                    <script>
                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            const successMessage = document.getElementById('success-message');
                            if (successMessage) {
                                successMessage.style.display = 'none';
                            }
                        }, 5000);
                    </script>
                @endif

                <div class="flex flex-col md:flex-row md:space-x-4">
                    <!-- Name Input Field -->
                    <input type="text" id="name" name="name" placeholder="Your Name"
                           class="w-full md:w-1/2 mb-4 md:mb-0 px-3 py-2 bg-gray-50 text-gray-900 dark:bg-gray-800 dark:text-white rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500" required>

                    <!-- Email Input Field -->
                    <input type="email" id="email" name="email" placeholder="Your Email"
                           class="w-full md:w-1/2 px-3 py-2 bg-gray-50 text-gray-900 dark:bg-gray-800 dark:text-white rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500" required>
                </div>
                <input type="text" id="subject" name="subject" placeholder="Subject"
                       class="w-full px-3 py-2 bg-gray-50 text-gray-900 dark:bg-gray-800 dark:text-white rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500" required>
                <textarea id="message" name="message" placeholder="Your Message" rows="4"
                          class="w-full px-3 py -2 bg-gray-50 text-gray-900 dark:bg-gray-800 dark:text-white rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500" required></textarea>
                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-500 text-white py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-500">
                    Send Message
                </button>
            </form>
        </div>
    </section>

</main>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
