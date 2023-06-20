<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Cart</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="sticky top-0 z-30">
        <livewire:navbar.index />
    </div>
    <div class="px-[130px] py-12">
        <h1 class="font-poppins text-[36px] text-black font-semibold mb-[50px]">
            Cart
        </h1>
        <div class="">
            <table class="w-full text-sm text-left text-gray-500">
                <thead
                    class="text-xl font-medium text-black font-poppins uppercase border-b-4 border-[#4E9FCA] rounded-lg ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Subtotal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b text-black font-medium text-base">

                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                            <img class="w-[100px] h-[100px]" src="../assets/images/vitamin c.svg" alt="Jese image">
                            <div class="pl-3">
                                <div class="text-base font-semibold">Vitacimin Lemon Strip 2 Tablet</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Rp 2.200
                        </td>
                        <td class="px-6 py-4">
                            <form id='myform' method='POST' class='quantity' action='#'>
                                <input type='button' value='-'
                                    class='qtyminus minus border border-[#A9ABAE] rounded-[4px] bg-[#4E9FCA] text-white'
                                    field='quantity' />
                                <input type='text' name='quantity' value='0' class='qty' />
                                <input type='button' value='+'
                                    class='qtyplus plus border border-[#A9ABAE] rounded-[4px] bg-[#4E9FCA] text-white'
                                    field='quantity' />
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            Rp 22.000
                        </td>
                        <td class="px-6 py-4">
                            <button>
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27 7H5" stroke="#DB4444" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M11 3H21" stroke="#DB4444" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M25 7V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7"
                                        fill="#DB4444" />
                                    <path
                                        d="M25 7V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7"
                                        stroke="#DB4444" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b text-black font-medium text-base">

                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                            <img class="w-[100px] h-[100px]" src="../assets/images/vitamin c.svg" alt="Jese image">
                            <div class="pl-3">
                                <div class="text-base font-semibold">Vitacimin Lemon Strip 2 Tablet</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            Rp 2.200
                        </td>
                        <td class="px-6 py-4">
                            <form id='myform' method='POST' class='quantity' action='#'>
                                <input type='button' value='-'
                                    class='qtyminus minus border border-[#A9ABAE] rounded-[4px] bg-[#4E9FCA] text-white'
                                    field='quantity' />
                                <input type='text' name='quantity' value='0' class='qty' />
                                <input type='button' value='+'
                                    class='qtyplus plus border border-[#A9ABAE] rounded-[4px] bg-[#4E9FCA] text-white'
                                    field='quantity' />
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            Rp 22.000
                        </td>
                        <td class="px-6 py-4">
                            <button>
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27 7H5" stroke="#DB4444" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M11 3H21" stroke="#DB4444" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M25 7V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7"
                                        fill="#DB4444" />
                                    <path
                                        d="M25 7V26C25 26.2652 24.8946 26.5196 24.7071 26.7071C24.5196 26.8946 24.2652 27 24 27H8C7.73478 27 7.48043 26.8946 7.29289 26.7071C7.10536 26.5196 7 26.2652 7 26V7"
                                        stroke="#DB4444" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex justify-end mt-14">
            <div class="p-[30px] rounded-[10px] shadow shadow-black/25">
                <h1 class="font-poppins text-xl text-black font-medium mb-5 w-[456px]">
                    Cart Total
                </h1>
                <div class="flex justify-between border-b w-full">
                    <h1 class="font-poppins text-base text-black font-medium mb-3">
                        Subtotal:
                    </h1>
                    <h1 class="font-poppins text-base text-black font-medium mb-3">
                        Rp 112.000
                    </h1>

                </div>
                <div class="flex justify-between border-b w-full mt-4">
                    <h1 class="font-poppins text-base text-black font-medium mb-3">
                        Shipping:
                    </h1>
                    <h1 class="font-poppins text-base text-black font-medium mb-3">
                        Rp 0
                    </h1>

                </div>
                <div class="flex justify-between  w-full mt-4">
                    <h1 class="font-poppins text-base text-black font-semibold mb-3">
                        Total:
                    </h1>
                    <h1 class="font-poppins text-base text-[#DB4444] font-semibold mb-3">
                        Rp 112.000
                    </h1>
                </div>
                <button type=""
                    class="px-[50px] py-3 text-white text-base font-medium  rounded-[10px] w-full mt-5 bg-[#4E9FCA]"
                    >Checkout</button>
            </div>
        </div>
    </div>
    </div>
    <div class="">
        <livewire:footer.index />
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <!-- Load Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Load Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var mySwiper = new Swiper(".swiper-container", {
                // Konfigurasi tambahan di sini
                slidesPerView: "auto",
                spaceBetween: 60,
                // Tambahkan opsi lain sesuai kebutuhan
            });
        });
    </script>
</body>

<script>
    $(document).ready(function() {
        // Menggeser slide ke kanan
        $('#nextButton').on('click', function() {
            $('.flex').animate({
                scrollLeft: '+=300'
            }, 500);
        });

        // Menggeser slide ke kiri
        $('#prevButton').on('click', function() {
            $('.flex').animate({
                scrollLeft: '-=300'
            }, 500);
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Menggeser slide ke kanan
        $('#nextButton2').on('click', function() {
            $('.testimoni').animate({
                scrollLeft: '+=300'
            }, 500);
        });

        // Menggeser slide ke kiri
        $('#prevButton2').on('click', function() {
            $('.testimoni').animate({
                scrollLeft: '-=300'
            }, 500);
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Menggeser slide ke kanan
        $('#nextButton3').on('click', function() {
            $('.article').animate({
                scrollLeft: '+=300'
            }, 500);
        });

        // Menggeser slide ke kiri
        $('#prevButton3').on('click', function() {
            $('.article').animate({
                scrollLeft: '-=300'
            }, 500);
        });
    });
</script>
<style>
    .slide-button {
        background-color: transparent;
        border: none;
        font-size: 24px;
        color: black;
        cursor: pointer;
        padding: 0;
        margin-top: 10px;
    }

    .slide-button:focus {
        outline: none;
    }
</style>
<style>
    .disabled-button {
        background-color: #DFE3E9;
        cursor: not-allowed;
    }
</style>
<script>
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const messageInput = document.getElementById('message');
    const submitButton = document.getElementById('submitButton');

    function checkInputs() {
        const nameValue = nameInput.value.trim();
        const emailValue = emailInput.value.trim();
        const phoneValue = phoneInput.value.trim();
        const messageValue = messageInput.value.trim();

        const allInputsFilled = nameValue !== '' && emailValue !== '' && phoneValue !== '' && messageValue !== '';

        submitButton.disabled = !allInputsFilled;
        submitButton.classList.toggle('disabled-button', !allInputsFilled);
    }

    nameInput.addEventListener('input', checkInputs);
    emailInput.addEventListener('input', checkInputs);
    phoneInput.addEventListener('input', checkInputs);
    messageInput.addEventListener('input', checkInputs);
</script>
<script>
    jQuery(document).ready(($) => {
        $('.quantity').on('click', '.plus', function(e) {
            let $input = $(this).prev('input.qty');
            let val = parseInt($input.val());
            $input.val(val + 1).change();
        });

        $('.quantity').on('click', '.minus',
            function(e) {
                let $input = $(this).next('input.qty');
                var val = parseInt($input.val());
                if (val > 0) {
                    $input.val(val - 1).change();
                }
            });
    });
</script>
<style>
    .qty {
        width: 40px;
        height: 25px;
        text-align: center;
    }

    input.qtyplus {
        width: 25px;
        height: 25px;
    }

    input.qtyminus {
        width: 25px;
        height: 25px;
    }
</style>

</html>
