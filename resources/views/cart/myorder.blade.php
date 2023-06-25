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
        <div class="">
            <div class="">
                <div class="tab-buttons">
                    <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5 active"
                        data-tab="all-products">
                        Belum Bayar
                    </button>
                    <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                        data-tab="prescription-drugs">
                        Dikirim
                    </button>
                    <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                        data-tab="over-the-counter-drugs">
                        Selesai
                    </button>
                    <button class="tab-button px-5 py-2.5 rounded-10 font-medium text-base mb-2.5"
                        data-tab="covid-needs">
                        Dibatalkan
                    </button>

                </div>

            </div>
            <div class="p-5 rounded-[10px] shadow shadow-black/25">
                <div id="all-products" class="tab-content">
                    <table class="w-full">
                        <tbody class="w-full">
                            <tr class="w-full border-b">
                                <td scope="row" class="flex items-center  text-gray-900 w-full ">
                                    <img class="w-[100px] h-[100px]" src="../assets/images/vitamin c.svg"
                                        alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold w-full">Vitacimin Lemon Strip 2 Tablet</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-base font-semibold w-full text-end">Rp 22.000</div>

                                </td>
                            </tr>
                            <tr class="w-full">
                                <td scope="row" class="flex items-center  text-gray-900 w-full ">
                                    <img class="w-[100px] h-[100px]" src="../assets/images/Norvask.svg"
                                        alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold w-full">Norvask 5 mg 10 Tablet</div>
                                    </div>
                                </td>
                                <td>
                                    <h1 class="text-base font-semibold w-full text-end">Rp 92.000</h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-base font-semibold w-full text-end mb-[30px] text-[#DB4444]">Rp 92.000</div>
                    <div class="flex gap-5 justify-end items-center">
                        <button data-modal-toggle="detail-order"
                            class="px-[50px] py-3 bg-white text-base font-medium text-center rounded-[10px] w-max mb-5 text-[#4E9FCA] border-[#4E9FCA] border">Lihat Detail Pesanan</button>
                        <a href="/checkout" type=""
                            class="px-[50px] py-3 text-white text-base font-medium  rounded-[10px] w-max mb-5 bg-[#4E9FCA]">Bayar Sekarang</a>
                    </div>
                </div>

                <div id="prescription-drugs" class="tab-content" style="display: none;">
                    <table class="w-full">
                        <tbody class="w-full">
                            <tr class="w-full border-b">
                                <td scope="row" class="flex items-center  text-gray-900 w-full ">
                                    <img class="w-[100px] h-[100px]" src="../assets/images/vitamin c.svg"
                                        alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold w-full">Vitacimin Lemon Strip 2 Tablet</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-base font-semibold w-full text-end">Rp 22.000</div>

                                </td>
                            </tr>
                            <tr class="w-full">
                                <td scope="row" class="flex items-center  text-gray-900 w-full ">
                                    <img class="w-[100px] h-[100px]" src="../assets/images/Norvask.svg"
                                        alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold w-full">Norvask 5 mg 10 Tablet</div>
                                    </div>
                                </td>
                                <td>
                                    <h1 class="text-base font-semibold w-full text-end">Rp 92.000</h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-base font-semibold w-full text-end mb-[30px] text-[#DB4444]">Rp 92.000</div>
                    <div class="flex gap-5 justify-end items-center">

                        <button data-modal-toggle="detail-order"
                            class="px-[50px] py-3 text-white text-base font-medium  rounded-[10px] w-max mb-5 bg-[#4E9FCA]">Lacak
                            Pesanan</button>
                    </div>
                </div>

                <div id="over-the-counter-drugs" class="tab-content" style="display: none;">
                    <table class="w-full">
                        <tbody class="w-full">
                            <tr class="w-full border-b">
                                <td scope="row" class="flex items-center  text-gray-900 w-full ">
                                    <img class="w-[100px] h-[100px]" src="../assets/images/vitamin c.svg"
                                        alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold w-full">Vitacimin Lemon Strip 2 Tablet</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-base font-semibold w-full text-end">Rp 22.000</div>

                                </td>
                            </tr>
                            <tr class="w-full">
                                <td scope="row" class="flex items-center  text-gray-900 w-full ">
                                    <img class="w-[100px] h-[100px]" src="../assets/images/Norvask.svg"
                                        alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold w-full">Norvask 5 mg 10 Tablet</div>
                                    </div>
                                </td>
                                <td>
                                    <h1 class="text-base font-semibold w-full text-end">Rp 92.000</h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-base font-semibold w-full text-end mb-[30px] text-[#DB4444]">Rp 92.000</div>
                    <div class="flex gap-5 justify-end items-center">
                        <button data-modal-toggle="detail-order"
                            class="px-[50px] py-3 bg-white text-base font-medium text-center rounded-[10px] w-max mb-5 text-[#4E9FCA] border-[#4E9FCA] border">Lihat
                            Detail Pesanan</button>
                        <button data-modal-toggle="ulasan"
                            class="px-[50px] py-3 text-white text-base font-medium  rounded-[10px] w-max mb-5 bg-[#4E9FCA]">Tulis
                            Ulasan</button>
                    </div>
                </div>
                <div id="covid-needs" class="tab-content" style="display: none;">
                    <table class="w-full">
                        <tbody class="w-full">
                            <tr class="w-full border-b">
                                <td scope="row" class="flex items-center  text-gray-900 w-full ">
                                    <img class="w-[100px] h-[100px]" src="../assets/images/vitamin c.svg"
                                        alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold w-full">Vitacimin Lemon Strip 2 Tablet</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-base font-semibold w-full text-end">Rp 22.000</div>

                                </td>
                            </tr>
                            <tr class="w-full">
                                <td scope="row" class="flex items-center  text-gray-900 w-full ">
                                    <img class="w-[100px] h-[100px]" src="../assets/images/Norvask.svg"
                                        alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold w-full">Norvask 5 mg 10 Tablet</div>
                                    </div>
                                </td>
                                <td>
                                    <h1 class="text-base font-semibold w-full text-end">Rp 92.000</h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-base font-semibold w-full text-end mb-[30px] text-[#DB4444]">Rp 92.000</div>
                    <div class="flex gap-5 justify-end items-center">
                        
                        <button data-modal-toggle="detail-order-cancel"
                            class="px-[50px] py-3 text-white text-base font-medium  rounded-[10px] w-max mb-5 bg-[#4E9FCA]">Detail Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <livewire:footer.index />
    </div>
    <livewire:modal.ulasan />
    <livewire:modal.order-detail />
    <livewire:modal.order-detail-cancel />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

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
