<!-- Main modal -->
<div id="pesanan-foto-resep" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg px-5 py-8 shadow max-h-[400px] overflow-y-auto bg-white">
            <div class="flex justify-between items-center mb-10">
                <h1 class="text-[28px] text-black font-semibold font-poppins">Upload Foto Resep</h1>
                <button data-modal-toggle="pesanan-foto-resep">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 7L7 25" stroke="#101828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M25 25L7 7" stroke="#101828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                </button>
            </div>
            <div class="">
                <div class="">
                    <div class="">
                        <h1 class="text-xl text-black font-semibold font-poppins mb-2">Ketentuan Foto Resep</h1>
                        <div class="flex gap-5 items-center">
                            <img src="../assets/images/resep-dokter.svg" alt="">
                            <div class="px-5">
                                <ul class="list-disc text-base text-black  font-poppins">
                                    <li>Pastikan seluruh bagian kertas terlihat dan dapat terbaca</li>
                                    <li>Upload foto resep sesuai dengan obat yang dibeli
                                        Boleh uploa</li>
                                    <li>Boleh upload lebih dari 1 resep dari dokter/klinik/kunjungan berbeda</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="relative mb-7">
                        <h1 class="text-xl text-black font-semibold font-poppins my-5">Foto Resep</h1>
                        <label type="file" name="image-product" id="image-product" class="mt-5" required>
                            <span class="">
                                <img class="img-preview w-24 h-24 border-2 rounded-2xl hover:bg-slate-200 cursor-pointer"
                                    alt="">
                            </span>
                            <input class="hidden" type="file" name="images" id="image"
                                onchange="previewImage()">
                        </label>
                    </div>
                </div>
                <div class="flex justify-center gap-[14px]">
                    <button type=""
                    class="px-[50px] py-3 text-white text-base font-medium  rounded-[10px] w-full mt-5 bg-[#4E9FCA]">Upload</button>
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