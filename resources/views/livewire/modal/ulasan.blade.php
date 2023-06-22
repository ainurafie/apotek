<!-- Main modal -->
<div id="ulasan" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg px-5 py-8 shadow  bg-white">
            <div class="flex justify-between items-center mb-10">
                <h1 class="text-[28px] text-black font-semibold font-poppins">Tulis Ulasan</h1>
                <button data-modal-toggle="ulasan">
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
                    <div class="">
                        <h1 class="text-base text-black font-medium font-poppins mb-2">Name</h1>
                        <input type="text" id="name"
                            class="shadow-sm bg-[#DFE3E9] text-gray-900 text-sm rounded-lg border-none block w-full p-2.5"
                            required>
                    </div>
                    <div class="my-5">
                        <h1 class="text-base text-black font-medium font-poppins mb-2">Ulasan</h1>
                        <textarea rows="3" type="text" id="ulasan"
                            class="shadow-sm bg-[#DFE3E9] text-gray-900 text-sm rounded-lg border-none block w-full p-2.5"
                            required></textarea>
                    </div>
                </div>
                <div class="flex justify-center  gap-[14px]">
                    <button type=""
                        class="px-[50px] py-3 w-max text-white text-base font-medium  rounded-[10px] mt-5 bg-[#4E9FCA]">Kirim ulasan</button>
                </div>
            </div>
        </div>
    </div>
</div>
