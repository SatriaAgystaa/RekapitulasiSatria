<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Absen</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9pBMrDmxDZOu5Bu6eg1w2eGw8A1fXhP7YO05nd2TNsiNXI6cUzEd8w5iK6ZwKlsyoZ/YuizETl/Efgl2U5r+eg==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.icon8.com/vue-uikit/1.0.0/vue-uikit.css">
</head>
<body class="bg-gray-50 dark:bg-gray-700">
    <div id="header" class="p-4 bg-white dark:bg-gray-100 flex items-center justify-between shadow-lg">
        <div class="flex items-center w-full justify-between">            
            <button id="toggleButton" onclick="toggleNavbar()" class="dark:text-2xl bg-transparent border-none mr-4">☰</button>
            <p class="font-semibold text-sm">Rekapitulasi <span style="color: #0766AD;">Keterlambatan</span></p>
            <div onclick="toggleDarkMode()" class="cursor-pointer text-xl text-gray-600 dark:text-gray-300">
                <i id="darkModeIcon" class="ri-moon-fill" style="color: #0766AD;"></i>
            </div>
        </div>
    </div>

    <div class="md:flex lg:flex grid items-center justify-center h-auto p-5 lg:px-10">
        <div id="content" class="bg-transparent grid grid-cols-12 gap-2 max-w-6xl">
            <div class="bg-transparent satu rounded-lg col-span-12 lg:col-span-7">
                <div class="p-5 lg:p-10">
                    <div class="pb-5">
                        <h2 class="text-xl font-semibold">Web <span style="color: #0766AD;">Rekapitulasi</span></h2>
                    </div>
                    <div class="">
                        <h1 class="text-4xl lg:text-6xl font-bold">
                            <span class="border-b border-black">Absen</span><span class="border-b border-black" style="color: #0766AD;">Qu</span>
                        </h1>
                    </div>  
                    <div class="relative rounded-lg mx-auto" style="height: auto; width: 87.5vw; max-width: 600px;">
                        <div class="image-about z-10 rounded-xl relative">
                            <img src="{{ asset('assets/images/auth/mc.png') }}" alt="Chick Image" class="lg:w-85 sm:w-95 h-auto">
                        </div>
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 w-full h-full z-1" style="filter: drop-shadow(0 0 10px #52C2CC);">
                            <path fill="#0766AD" d="M31.5,-55.4C43.2,-47.9,56.5,-44.1,56.6,-35.5C56.7,-26.9,43.5,-13.4,45.5,1.1C47.5,15.7,64.5,31.4,65.3,41.5C66.1,51.7,50.6,56.3,37,48.6C23.5,40.8,11.7,20.7,2.4,16.5C-6.9,12.3,-13.8,24.1,-24.5,30.1C-35.2,36.2,-49.6,36.6,-51.8,30.7C-54,24.7,-43.8,12.3,-47.5,-2.2C-51.2,-16.6,-68.9,-33.3,-68.3,-42.1C-67.8,-50.8,-49.1,-51.7,-34.6,-57.5C-20.2,-63.3,-10.1,-74.2,-0.1,-74C10,-73.9,19.9,-62.8,31.5,-55.4Z" transform="translate(100 100)" />
                        </svg>
                    </div>  
                </div>
            </div>
            <div id="content" class="bg-transparent rounded-lg col-span-12 lg:col-span-5">
                <div class="p-5 lg:p-10">
                    <div class="lg:py-10 lg:px-3">
                        <div class="p-2 rounded-lg">
                            <div class="text-center">
                                <h1 class="text-4xl lg:text-4xl font-semibold pb-4">Welcome<span class="">!</span></h1>
                                <p class="font-semibold text-gray-700 text-sm lg:text-md md:text-md">Selamat datang di <span class="detail text-black">Absen</span><span style="color: #0766AD;">Qu</span>. Silahkan login terlebih dahulu.</p>
                            </div>
                            <div class="w-auto">
                                <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto my-8">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-medium" style="color: #0766AD;">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="bg-transparent mt-1 p-2 w-full border-b border-gray-300 focus:border-b focus:border-blue-500 outline-none @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="text-red-500 text-sm mt-1" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="block text-sm font-medium">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="bg-transparent mt-1 p-2 w-full border-b border-gray-300 focus:border-b focus:border-blue-500 outline-none @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="text-red-500 text-sm mt-1" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="pt-10">
                                        <button type="submit" class="w-full p-2 rounded-md text-white" style="background-color: #0766AD;">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nav-bottom" class="w-full bottom-0 p-3 flex items-center justify-center">
                    <div class="gap-3 flex items-center">
                        <a href="" style="display: inline-block; transition: transform 300ms ease-in-out, color 300ms ease-in-out; color: #0766AD;" onmouseover="this.style.color='#808080'" onmouseout="this.style.color='#0766AD'">
                            <i class="ri-instagram-line" style="font-size: 30px;"></i>
                        </a>                                
                        
                        <a href="" style="display: inline-block; transition: transform 300ms ease-in-out, color 300ms ease-in-out; color: #0766AD;" onmouseover="this.style.color='#808080'" onmouseout="this.style.color='#0766AD'">
                            <i class="ri-linkedin-box-fill" style="font-size: 30px;"></i>
                        </a>          
                        
                        <a href="" style="display: inline-block; transition: transform 300ms ease-in-out, color 300ms ease-in-out; color: #0766AD;" onmouseover="this.style.color='#808080'" onmouseout="this.style.color='#0766AD'">
                            <i class="ri-github-fill" style="font-size: 30px;"></i>
                        </a>          
                        
                        <a href="" style="display: inline-block; transition: transform 300ms ease-in-out, color 300ms ease-in-out; color: #0766AD;" onmouseover="this.style.color='#808080'" onmouseout="this.style.color='#0766AD'">
                            <i class="ri-twitter-x-line" style="font-size: 30px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="p-4 bg-white dark:bg-gray-100 flex items-center justify-between" style="box-shadow: -1px 9px 4px 4px rgba(0, 0, 0, 0.5), -1px 4px 4px 4px rgba(0, 0, 0, 0.5);">
        <div class="flex items-center w-full justify-center text-center">            
            <p class="font-semibold text-lg"><span class="text-gray-800">Created By</span> <span>Satria</span> <span style="color: #0766AD;">Agysta</span> </p>
        </div>
    </div>
</body>


    <style>
        @media (max-width: 768px) {
            #navbar {
                left: 0;
                transition: left 0.3s ease-in-out;
            }
    
            #content {
                margin-left: 0;
            }
    
            #header {
                margin-left: 0;
            }

            #nav-bottom {
                margin-left: 0;
            }

            #footer {
                margin-left: 0;
            }

            .detail {
                margin-left: 0;
            }
        }
    
        body.dark {
            background-color: #090909;
            color: white;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }
    
        .dark #navbar {
            background-color: #060606;
            color: white;
        }

        .dark #header {
            background-color: #060606;
            color: white;
        }

        .dark #footer {
            background-color: #060606;
            color: white;
            box-shadow: 0 -4px 6px -1px rgba(169, 169, 169, 1), 0 -2px 4px -1px rgba(169, 169, 169, 1);
        }

        .dark .detail {
            color: white;
        }

        .nav-1 {
            position: relative;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .nav-1::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            transition: width 0.3s ease-in-out;
            background-color: #0766AD;
        }

        .nav-1:hover {
            color: inherit;
        }

        .nav-1:hover::before {
            width: 100%;
            box-shadow: 0 0 10px rgba(13, 133, 224, 0.7);
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgb(210, 210, 210);
            border-radius: 4px;
        }

        scrollbar-width: thin;
        scrollbar-color: #0766AD transparent;

        ::-ms-scrollbar {
            width: 8px;
        }

        ::-ms-scrollbar-thumb {
            background-color: rgb(210, 210, 210);
            border-radius: 4px;
        }

    </style>

    <script>

        function setDarkMode(isDarkMode) {
            const body = document.body;
            const darkModeIcon = document.getElementById('darkModeIcon');

            body.classList.toggle('dark', isDarkMode);

            darkModeIcon.className = isDarkMode ? 'ri-sun-fill' : 'ri-moon-fill';

            localStorage.setItem('darkMode', isDarkMode);
        }

        function getDarkModePreference() {
            return localStorage.getItem('darkMode') === 'true';
        }

        function toggleDarkMode() {
            const isDarkModeEnabled = getDarkModePreference();
            setDarkMode(!isDarkModeEnabled);
            setIconColor(!isDarkModeEnabled);
        }

        function setIconColor(isDarkMode) {
            const darkModeIcon = document.getElementById('darkModeIcon');
            darkModeIcon.style.color = isDarkMode ? 'yellow' : '#0766AD';
        }

        document.addEventListener('DOMContentLoaded', () => {
            setDarkMode(getDarkModePreference());
            setIconColor(getDarkModePreference());
        });
    </script>
</html>


