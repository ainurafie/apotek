<!-- Main modal -->
<div id="payment" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg px-5 py-8 shadow max-h-[400px] overflow-y-auto bg-white">
            <div class="flex justify-between items-center mb-10">
                <h1 class="text-[28px] text-black font-semibold font-poppins">Pilih Metode Pembayaran</h1>
                <button data-modal-toggle="payment">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 7L7 25" stroke="#101828" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M25 25L7 7" stroke="#101828" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </button>
            </div>
            <div class="">
                <div class="">
                    <div class="mb-[30px]">
                        <h1 class="text-xl text-black font-semibold font-poppins mb-2">Transfer Bank</h1>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="bca" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="bca" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/BCA.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">Bank BCA</h1>

                                </div>
                            </label>
                        </div>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="bni" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="bni" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/BNI.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">Bank BNI</h1>

                                </div>
                            </label>
                        </div>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="bsi" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="bsi" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/BSI.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">Bank BSI</h1>

                                </div>
                            </label>
                        </div>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="mandiri" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="mandiri" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/Mandiri.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">Transfer Bank</h1>

                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="mb-[30px]">
                        <h1 class="text-xl text-black font-semibold font-poppins mb-2">E-Wallet</h1>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="qris" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="qris" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/QRIS.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">QRIS</h1>

                                </div>
                            </label>
                        </div>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="gopay" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="gopay" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/Gopay.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">Gopay</h1>

                                </div>
                            </label>
                        </div>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="shopeepay" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="shopeepay" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/Shopeepay.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">Shopeepay</h1>

                                </div>
                            </label>
                        </div>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="dana" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="dana" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/Dana.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">DANA</h1>

                                </div>
                            </label>
                        </div>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="ovo" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="dana" class="cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <img src="../assets/images/Ovo.svg" alt="">
                                    <h1 class="text-base text-black font-medium font-poppins">OVO</h1>

                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="mb-[30px]">
                        <h1 class="text-xl text-black font-semibold font-poppins mb-2">Lainnya</h1>
                        <div class="flex gap-3 items-center">
                            <input type="radio" id="cod" name="selected[]"
                                class="form-radio h-5 w-5 text-black rounded-full">
                            <label for="cod" class="cursor-pointer">

                                <h1 class="text-base text-black font-medium font-poppins">Cash On Delivery (COD)</h1>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center gap-[14px]">
                    <button type=""
                        class="px-[50px] py-3 text-white text-base font-medium  rounded-[10px] w-full mt-5 bg-[#4E9FCA]">Pilih</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
