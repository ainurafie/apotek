<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Vitamin C</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .active {
            color: white;
            background-color: #4E9FCA;
            border-radius: 10px;

        }

        .tab-content {
            display: none;
        }
    </style>
</head>

<body>
    <div class="sticky top-0 z-30">
        <livewire:navbar.index />
    </div>
    <div class="px-[130px] py-12">
        <div class="flex justify-between mb-[30px]">
            <h1 id="current-tab" class="font-poppins text-[36px] text-black font-semibold">
                Semua Produk
            </h1>
            <div class="flex gap-4 items-center">
                <h1 class="font-poppins text-base text-black font-medium">
                    Urutkan:
                </h1>
                <select name="" id=""
                    class="block px-4 py-2 w-48 text-sm text-[#454545] bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                    required>
                    <option selected value="" disabled>Paling Sesuai</option>
                    <option value="Primary"></option>
                    <option value="Secondary"></option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-3">
                <div class="p-5 rounded-[10px] shadow shadow-black/25">
                    <h1 class="font-poppins text-[24px] text-black font-semibold mb-5">
                        Kategori
                    </h1>
                    <div class="tab-buttons">
                        <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5 active"
                            data-tab="all-products">
                            Semua Produk
                        </button>
                        <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                            data-tab="prescription-drugs">
                            Obat Resep
                        </button>
                        <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                            data-tab="over-the-counter-drugs">
                            Obat Bebas
                        </button>
                        <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                            data-tab="covid-needs">
                            Kebutuhan COVID-19
                        </button>
                        <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                            data-tab="maternal-child">
                            Ibu & Anak
                        </button>
                        <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                            data-tab="vitamins-supplements">
                            Vitamin & Suplemen
                        </button>
                        <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                            data-tab="body-care">
                            Perawatan Tubuh
                        </button>
                        <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                            data-tab="health-devices">
                            Alat Kesehatan
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-9">
                <div id="all-products" class="tab-content">
                    <div class="grid grid-cols-3 gap-[60px] px-10">
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Sanmol Strip 4 Tablet
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="relative flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Omron 2
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
                            </div>
                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>

                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="prescription-drugs" class="tab-content" style="display: none;">
                    <div class="grid grid-cols-3 gap-[60px] px-10">
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Sanmol Strip 4 Tablet
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="relative flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Omron 2
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
                            </div>
                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="over-the-counter-drugs" class="tab-content" style="display: none;">
                    <div class="grid grid-cols-3 gap-[60px] px-10">
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Sanmol Strip 4 Tablet
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="relative flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Omron 2
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
                            </div>
                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="covid-needs" class="tab-content" style="display: none;">
                    <div class="grid grid-cols-3 gap-[60px] px-10">
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Sanmol Strip 4 Tablet
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="relative flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Omron 2
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
                            </div>
                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="maternal-child" class="tab-content" style="display: none;">
                    <div class="grid grid-cols-3 gap-[60px] px-10">
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Sanmol Strip 4 Tablet
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="relative flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Omron 2
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
                            </div>
                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="vitamins-supplements" class="tab-content" style="display: none;">
                    <div class="grid grid-cols-3 gap-[60px] px-10">
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Sanmol Strip 4 Tablet
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="relative flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Omron 2
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
                            </div>
                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="body-care" class="tab-content" style="display: none;">
                    <div class="grid grid-cols-3 gap-[60px] px-10">
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Sanmol Strip 4 Tablet
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="relative flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Omron 2
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
                            </div>
                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="health-devices" class="tab-content" style="display: none;">
                    <div class="grid grid-cols-3 gap-[60px] px-10">
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Sanmol Strip 4 Tablet
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="relative flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Omron 2
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
                            </div>
                            <div class="absolute top-7 left-0">
                                <div
                                    class="bg-[#4E9FCA] rounded-r-[5px] py-1 px-2.5 text-white font-medium text-base font-poppins">
                                    Pre-Order</div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Blackmores
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Diatabs
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                                <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                                <h1 class="font-poppins text-base text-black font-medium mb-7">
                                    Vitamin C
                                </h1>
                                <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <livewire:footer.index />
    </div>
    <livewire:modal.tambah-keranjang />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Get all tab buttons
        const tabButtons = document.querySelectorAll(".tab-button");

        // Function to handle tab button click event
        const handleTabButtonClick = (event) => {
            const clickedButton = event.target;
            const tab = clickedButton.dataset.tab;

            // Remove 'active' class from all tab buttons
            tabButtons.forEach((button) => {
                button.classList.remove("active");
            });

            // Add 'active' class to the clicked tab button
            clickedButton.classList.add("active");

            // Hide all tab content
            const tabContents = document.querySelectorAll(".tab-content");
            tabContents.forEach((content) => {
                content.style.display = "none";
            });

            // Show the corresponding tab content based on the data-tab value
            const selectedTabContent = document.querySelector(`#${tab}`);
            selectedTabContent.style.display = "block";

            // Save the active tab to localStorage
            localStorage.setItem("activeTab", tab);

            // Update the <h1> element to display the current tab
            const pageTitle = document.querySelector("#current-tab");
            pageTitle.innerHTML = clickedButton.innerHTML;
        };

        // Add click event listener to each tab button
        tabButtons.forEach((button) => {
            button.addEventListener("click", handleTabButtonClick);
        });

        // Check if there is a previously active tab in local storage
        const activeTab = localStorage.getItem("activeTab");

        // Activate the previously active tab or default to "all-products"
        const defaultTab = activeTab || "all-products";
        const defaultTabButton = document.querySelector(`[data-tab="${defaultTab}"]`);
        defaultTabButton.classList.add("active");

        // Show the corresponding tab content
        const activeTabContent = document.querySelector(`#${defaultTab}`);
        if (activeTabContent) {
            activeTabContent.style.display = "block";
        } else {
            // If the previously active tab content is not found, show the default tab content ("all-products")
            const defaultTabContent = document.querySelector("#all-products");
            defaultTabContent.style.display = "block";
        }

        // Update the active tab in local storage when a tab button is clicked
        tabButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const tab = button.dataset.tab;
                localStorage.setItem("activeTab", tab);
            });
        });

        // Clear active tab from local storage when the page is unloaded
        window.addEventListener("beforeunload", () => {
            localStorage.removeItem("activeTab");
        });
    </script>

</html>
