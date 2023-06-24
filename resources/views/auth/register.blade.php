<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Register</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center">
        <a href="/">
            <img src="../assets/images/logo.svg" class="mt-[50px]" alt="">
        </a>
    </div>
    <div class="grid grid-cols-12 py-[151px]">
        <div class="col-span-6 px-36">
            <div class="w-full">
                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative rounded-[16px] h-[416px]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span
                                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl">First
                                Slide</span>
                            <img src="../assets/images/ilus1.svg"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="../assets/images/ilus2.svg"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="../assets/images/ilus3.svg"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="../assets/images/ilus4.svg"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="../assets/images/ilus5.svg"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <div class="hidden">
                        <button type="button"
                            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <script>
                const button = document.querySelector('[data-carousel-next]');

                // Fungsi untuk mengklik tombol
                function clickButton() {
                    button.click();
                }

                // Mengatur interval pengklikan tombol setiap 3 detik
                setInterval(clickButton, 3000);
            </script>

        </div>
        <div class="col-span-6 px-28">
            <h1 class="font-poppins text-[40px] text-center text-black font-semibold mb-[30px]">
                Register
            </h1>
            <h1 class="font-poppins text-base text-black font-medium mb-[60px]">
                Selamat datang di website Apotek Tugu Batu. Silahkan isi data di bawah ini untuk membuat akun.
            </h1>
            <div class="mb-[30px]">
                <input type="text" id="name"
                class="shadow-sm bg-[#DFE3E9] text-gray-900 text-sm rounded-lg border-none block w-full p-2.5"
                placeholder="Nama" required>
            </div>
            <div class="mb-[30px]">
                <input type="email" id="email"
                class="shadow-sm bg-[#DFE3E9] text-gray-900 text-sm rounded-lg border-none block w-full p-2.5"
                placeholder="Email" required>
            </div>
            
            <div class="relative mb-[50px]">
                <input id="password" type="password" name="password" id="password"
                class="shadow-sm bg-[#DFE3E9] text-gray-900 text-sm rounded-lg border-none block w-full p-2.5"
                placeholder="Kata Sandi" autocomplete="current-password" required>
                <div class="flex absolute top-3 right-3 items-center pr-3 text-gray-600 cursor-pointer">
                    <iconify-icon id="toggler1" icon="bxs:show"></iconify-icon>
                </div>
            </div>
            <div class="flex justify-center mb-24">
                <button type="submit" id="submitButton"
                class="px-[50px] py-3 text-white rounded-full bg-[#4E9FCA]"
                >Register</button>
            </div>
            <div class="flex gap-1 items-center">
                <h1 class="font-poppins text-base text-black font-medium">
                    Sudah memiliki akun?
                </h1>
                <a href="/login" class="font-poppins text-base text-[#4E9FCA] font-medium">
                    Login
                </a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <script>
        var password = document.getElementById('password');
        var toggler1 = document.getElementById('toggler1')
        showHidePassword = (input, toggler) => {
            if (input.type === 'password') {
                input.setAttribute('type', 'text');
                toggler.removeAttribute('icon');
                toggler.setAttribute('icon', 'bxs:hide');
            } else {
                toggler.removeAttribute('icon');
                toggler.setAttribute('icon', 'bxs:show');
                input.setAttribute('type', 'password');
            }
        };
        toggler1.addEventListener('click', () => showHidePassword(password, toggler1));
    </script>
</body>

</html>
