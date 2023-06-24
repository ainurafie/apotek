<div>
    <nav class="sticky bg-white shadow border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="../assets/images/logo.svg" class="h-8 mr-3" alt="Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 md:mt-0 md:border-0 items-center md:bg-white">
                    <li>
                        <a href="/"
                            class="block font-poppins py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:p-0"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/shop"
                            class="block font-poppins py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:p-0"
                            aria-current="page">Produk</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block font-poppins py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Tentang</a>
                    </li>
                    <li>
                        <a href="/contact   "
                            class="block font-poppins py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Kontak</a>
                    </li>
                    <li>
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-80">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 20L16.2223 16.2156M18.3158 11.1579C18.3158 13.0563 17.5617 14.8769 16.2193 16.2193C14.8769 17.5617 13.0563 18.3158 11.1579 18.3158C9.2595 18.3158 7.43886 17.5617 6.0965 16.2193C4.75413 14.8769 4 13.0563 4 11.1579C4 9.2595 4.75413 7.43886 6.0965 6.0965C7.43886 4.75413 9.2595 4 11.1579 4C13.0563 4 14.8769 4.75413 16.2193 6.0965C17.5617 7.43886 18.3158 9.2595 18.3158 11.1579V11.1579Z"
                                            stroke="#48494A" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>

                                </div>
                                <input type="text" id="simple-search"
                                    class="bg-white border border-[#4E9FCA] text-[#A9ABAE] text-sm rounded-xl block w-full pr-10 p-2.5 font-poppins"
                                    placeholder="What are you looking for?" required>
                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="/login"
                            class="px-7 py-2 text-white rounded-full bg-[#4E9FCA] hover:bg-[#4E9FCA]/90">Login</a>
                    </li>
                    <li>
                        <a href="/register"
                            class="px-7 py-2 bg-white rounded-full text-[#4E9FCA] border border-[#4E9FCA] hover:text-white hover:bg-[#4E9FCA]/90">Register</a>
                    </li>
                {{-- kalo sudah login pake dibawah --}}
                    {{-- <li>
                        <a href="/cart" class=""><svg width="27" height="24" viewBox="0 0 27 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 23C9.55228 23 10 22.5523 10 22C10 21.4477 9.55228 21 9 21C8.44772 21 8 21.4477 8 22C8 22.5523 8.44772 23 9 23Z"
                                    stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M23 23C23.5523 23 24 22.5523 24 22C24 21.4477 23.5523 21 23 21C22.4477 21 22 21.4477 22 22C22 22.5523 22.4477 23 23 23Z"
                                    stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M1 1H5L8 18H24" stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M8 12.668H23.59C23.7056 12.668 23.8177 12.628 23.9072 12.5548C23.9966 12.4815 24.0579 12.3795 24.0806 12.2661L25.8806 3.26609C25.8951 3.19352 25.8934 3.11863 25.8755 3.04682C25.8575 2.97502 25.8239 2.90809 25.7769 2.85087C25.73 2.79364 25.6709 2.74755 25.604 2.71593C25.5371 2.6843 25.464 2.66792 25.39 2.66797H6"
                                    stroke="#181818" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="" class=""><img src="../assets/images/profile.svg"
                                class="w-10 h-10 rounded-full" alt="">
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>
