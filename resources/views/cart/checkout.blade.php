<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Checkout</title>
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
            Delivery Details
        </h1>
        <div class="grid grid-cols-12">
            <div class="col-span-6">
                <form action="#" class="space-y-8 pr-20">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" id="name"
                            class="shadow-sm bg-[#DFE3E9] text-gray-900 text-sm rounded-lg border-none block w-full p-2.5"
                            required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                        <textarea id="Address" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-[#DFE3E9] rounded-lg shadow-sm border-none"></textarea>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                        <input type="number" id="phone"
                            class="block p-3 w-full text-sm text-gray-900 bg-[#DFE3E9] rounded-lg shadow-sm border-none"
                            required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
                        <input type="email" id="email"
                            class="block p-3 w-full text-sm text-gray-900 bg-[#DFE3E9] rounded-lg shadow-sm border-none"
                            required>
                    </div>
                    <div class="flex gap-3 items-center">
                        <input type="checkbox" id="pengantaranSelesai" name="selected[]"
                            class="form-checkbox h-5 w-5 text-black rounded">
                        <label for="pengantaranSelesai" class="cursor-pointer text-base font-medium text-black">Save
                            this information for faster check-out next time</label>
                    </div>
                </form>
            </div>
            <div class="col-span-6">
                <h1 class="font-poppins text-lg text-black font-semibold">
                    Products
                </h1>
                <table class="w-full">
                    <tbody class="w-full">
                        <tr class="w-full">
                            <th scope="row" class="flex items-center  text-gray-900 w-full ">
                                <img class="w-[100px] h-[100px]" src="../assets/images/vitamin c.svg" alt="Jese image">
                                <div class="pl-3">
                                    <div class="text-base font-semibold w-full">Vitacimin Lemon Strip 2 Tablet</div>
                                </div>
                            </th>
                            <td>
                                <div class="text-base font-semibold w-full text-end">Rp 22.000</div>

                            </td>
                        </tr>
                        <tr class="w-full">
                            <th scope="row" class="flex items-center  text-gray-900 w-full ">
                                <img class="w-[100px] h-[100px]" src="../assets/images/Norvask.svg" alt="Jese image">
                                <div class="pl-3">
                                    <div class="text-base font-semibold w-full">Norvask 5 mg 10 Tablet</div>
                                </div>
                            </th>
                            <td>
                                <div class="text-base font-semibold w-full text-end">Rp 92.000</div>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="py-[50px]">
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
                </div>
                <button data-modal-toggle="pesanan-foto-resep"
                    class="px-5 py-2.5 rounded-[10px] shadow shadow-black/25 flex justify-between items-center mb-[30px] w-full">
                    <div class="flex items-center gap-5">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.85 11.7001L12.65 12.3001L14.125 10.3351L15.6 12.3001L16.4 11.7001L14.75 9.50007L16.4 7.30007L15.6 6.70007L14.125 8.66507L13.2 7.43507C13.6128 7.32897 13.9725 7.07544 14.2112 6.72234C14.45 6.36923 14.5512 5.94096 14.4958 5.51833C14.4405 5.09571 14.2323 4.70797 13.9107 4.42827C13.5891 4.14857 13.1762 3.99626 12.75 4.00007H10.5C10.3674 4.00007 10.2402 4.05275 10.1464 4.14652C10.0527 4.24028 10 4.36746 10 4.50007V10.0001H11V7.50007H12L13.5 9.50007L11.85 11.7001ZM11 5.00007H12.75C12.9489 5.00007 13.1397 5.07909 13.2803 5.21974C13.421 5.36039 13.5 5.55116 13.5 5.75007C13.5 5.94898 13.421 6.13975 13.2803 6.2804C13.1397 6.42105 12.9489 6.50007 12.75 6.50007H11V5.00007ZM15 15.5001H20V16.5001H15V15.5001ZM17 17.5001H20V18.5001H17V17.5001Z"
                                fill="black" />
                            <path
                                d="M27 20.5H25.5V5.5C25.5004 5.4342 25.4878 5.36897 25.4629 5.30805C25.438 5.24713 25.4013 5.19172 25.355 5.145L21.855 1.645L21.145 2.355L24.5 5.705V20.5H23.5C23.445 5.37 23.62 5.915 23.355 5.645C19.28 1.605 19.32 1.5 19 1.5H8C7.86739 1.5 7.74021 1.55268 7.64645 1.64645C7.55268 1.74021 7.5 1.86739 7.5 2V16H5C4.86739 16 4.74021 16.0527 4.64645 16.1464C4.55268 16.2402 4.5 16.3674 4.5 16.5V29C4.5 29.3978 4.65804 29.7794 4.93934 30.0607C5.22064 30.342 5.60218 30.5 6 30.5H26C26.3978 30.5 26.7794 30.342 27.0607 30.0607C27.342 29.7794 27.5 29.3978 27.5 29V21C27.5 20.8674 27.4473 20.7402 27.3536 20.6464C27.2598 20.5527 27.1326 20.5 27 20.5ZM21.795 5.5H19.5V3.205L21.795 5.5ZM8.5 2.5H18.5V6C18.5 6.13261 18.5527 6.25979 18.6464 6.35355C18.7402 6.44732 18.8674 6.5 19 6.5H22.5V20.5H14.325L12.455 16.295C12.4156 16.2073 12.3517 16.1328 12.271 16.0805C12.1903 16.0281 12.0962 16.0002 12 16H8.5V2.5ZM26.5 29C26.5 29.1326 26.4473 29.2598 26.3536 29.3536C26.2598 29.4473 26.1326 29.5 26 29.5H6C5.86739 29.5 5.74021 29.4473 5.64645 29.3536C5.55268 29.2598 5.5 29.1326 5.5 29V17H11.675L13.545 21.205C13.5844 21.2927 13.6483 21.3672 13.729 21.4195C13.8097 21.4719 13.9038 21.4998 14 21.5H26.5V29Z"
                                fill="black" />
                        </svg>

                        <h1 class="font-poppins text-base text-black font-medium">
                            Lampirkan Resep Dokter
                        </h1>
                    </div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 4.5L16.5 12L9 19.5" stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <button data-modal-toggle="payment"
                    class="px-5 py-2.5 rounded-[10px] shadow shadow-black/25 flex justify-between items-center mb-[30px] w-full">
                    <div class="flex items-center gap-5">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29 8H3C2.44772 8 2 8.44772 2 9V23C2 23.5523 2.44772 24 3 24H29C29.5523 24 30 23.5523 30 23V9C30 8.44772 29.5523 8 29 8Z"
                                stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M16 20C18.2091 20 20 18.2091 20 16C20 13.7909 18.2091 12 16 12C13.7909 12 12 13.7909 12 16C12 18.2091 13.7909 20 16 20Z"
                                stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M22 8L30 15" stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M22 24L30 17" stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 8L2 15" stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 24L2 17" stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <h1 class="font-poppins text-base text-black font-medium">
                            Pilih Metode Pembayaran
                        </h1>
                    </div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 4.5L16.5 12L9 19.5" stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <a href="/qris">
                    <div
                        class="px-[50px] py-3 text-white text-base font-medium text-center rounded-[10px] w-full mt-5 bg-[#4E9FCA]">
                        Order</div>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="">
        <livewire:footer.index />
    </div>
    <livewire:modal.upload-foto-resep />
    <livewire:modal.pembayaran />
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
