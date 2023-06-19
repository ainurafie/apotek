<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Sanmol Strip 4 Tablet</title>
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
        <div class="grid grid-cols-2 mb-[100px]">
            <div class="col-span-1">
                <img src="../assets/images/sanmol.svg" class="w-96 h-96" alt="">
            </div>
            <div class="col-span-1">
                <h1 class="text-[24px] font-poppins font-semibold mb-[53px]">Sanmol Strip 4 Tablet</h1>
                <div class="flex items-center mb-9 gap-[135px]">
                    <h1 class="text-xl font-poppins font-medium">Harga</h1>
                    <div class="flex gap-2 items-center">
                        <h1 class="text-[24px] text-[#DB4444] font-poppins font-semibold">Rp 2.000</h1>
                        <h1 class="text-lg text-[#A9ABAE] font-poppins font-medium">/Strip</h1>

                    </div>
                </div>
                <div class="flex items-center mb-9 gap-24">
                    <h1 class="text-xl font-poppins font-medium">Kuantitas</h1>
                    <div class="flex items-center gap-2">
                        <form id='myform' method='POST' class='quantity' action='#'>
                            <input type='button' value='-'
                                class='qtyminus minus border border-[#A9ABAE] rounded-[4px] bg-[#4E9FCA] text-white'
                                field='quantity' />
                            <input type='text' name='quantity' value='0' class='qty' />
                            <input type='button' value='+'
                                class='qtyplus plus border border-[#A9ABAE] rounded-[4px] bg-[#4E9FCA] text-white'
                                field='quantity' />
                        </form>
                        <h1 class="text-lg text-[#A9ABAE] font-poppins">tersisa 100 buah</h1>
                    </div>
                </div>
                <button data-modal-toggle="tambah-keranjang"
                    class="px-[18px] py-3 text-white rounded-[10px] bg-[#4E9FCA] hover:bg-[#4E9FCA]/90 w-full">Tambah ke
                    Keranjang</button>
            </div>
        </div>
        <div class="">
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Deskripsi Produk</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Sanmol Strip 4s adalah obat dengan kandungan Paracetamol 500 mg, yang dapat digunakan untuk meringankan rasa sakit pada keadaan sakit kepala, sakit gigi dan menurunkan demam. Sanmol bekerja pada pusat pengatur suhu di hipotalamus untuk menurunkan suhu tubuh (antipiretik) serta menghambat sintesis prostaglandin sehingga dapat mengurangi nyeri ringan sampai sedang (analgesik).</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Indikasi</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Membantu menurunkan demam, meredakan nyeri ringan seperti sakit kepala dan sakit gigi.</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Komposisi</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Setiap tablet mengandung Paracetamol 500 mg</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Dosis</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Dewasa dan anak >12 tahun: 1 tablet, 3-4 kali per hari. Anak: 1/2 - 1 tablet, 3-4 kali sehari. Atau sesuai petunjuk dokter.</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Aturan Pakai</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Obat dapat diminum sebelum atau sesudah makan.</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Perhatian</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Hati-hati penggunaan obat ini pada penderita penyakit ginjal. Bila setelah 2 hari demam tidak menurun atau setelah 5 hari nyeri tidak menghilang, segera hubungi Unit Pelayanan Kesehatan. Penggunaan obat ini pada penderita yang mengkonsumsi alkohol, dapat meningkatkan risiko kerusakan fungsi hati. Kategori kehamilan : Kategori B: Mungkin dapat digunakan oleh wanita hamil. Penelitian pada hewan uji tidak memperlihatkan ada nya risiko terhadap janin, namun belum ada bukti penelitian langsung terhadap wanita hamil.</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Kontra Indikasi</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Penderita gangguan fungsi hati yang berat. Hipersensitivitas terhadap Paracetamol.</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Efek Samping</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Efek samping yang mungkin terjadi dalam penggunaan obat adalah: Hematologi, reaksi kulit, reaksi alergi lainnya, kerusakan hati (penggunaan jangka panjang dan overdosis).</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Golongan Produk</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Obat Bebas (Hijau)</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Kemasan</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Dus, 25 Catch Cover @1 Strip @ 4 Tablet</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">Manufaktur</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">Sanbe Farma</h1>
            <h1 class="text-xl text-black font-montserrat font-semibold mb-4">No. Registrasi</h1>
            <h1 class="text-base text-black font-montserrat font-medium mb-12">BPOM: DBL7622235610A2</h1>
        </div>
        <div class="flex gap-4 items-center mb-6 mt-24">
            <div class="w-5 h-10 bg-[#4E9FCA] rounded-[5px]"></div>
            <h1 class="font-poppins text-base text-[#4E9FCA] font-semibold">
                Related Products
            </h1>
        </div>
        <h1 class="font-poppins text-[36px] text-black font-semibold mb-[30px]">
            You might also like
        </h1>
        <div class="grid grid-cols-4 gap-[60px]">
            <div class="flex-shrink-0">
                <div class="rounded-[25px] shadow bg-white p-6 w-[250px]">
                    <img src="../assets/images/sanmol.svg" alt="" class="mb-2">

                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Sanmol Strip 4 Tablet
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="rounded-[25px] shadow bg-white p-6 w-[250px]">
                    <img src="../assets/images/blackmores.svg" alt="" class="mb-2">

                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Blackmores
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="rounded-[25px] shadow bg-white p-6 w-[250px]">
                    <img src="../assets/images/diatabs.svg" alt="" class="mb-2">

                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Diatabs
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="rounded-[25px] shadow bg-white p-6 w-[250px]">
                    <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">

                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Vitamin C
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                </div>
            </div>
        </div>
        <section class="bg-no-repeat bg-center bg-cover py-[66px] rounded-[25px] mt-[100px]"
            style="background-image: url('../assets/images/bg.svg');">
            <h1 class="text-[28px] text-white font-semibold text-center font-poppins mb-6">Ingin konsultasi dengan
                apoteker?</h1>
            <div class="justify-center flex">
                <button
                    class="bg-[#052F5F] rounded-full text-lg text-white font-medium py-3 px-9 text-center font-poppins">Klik
                    untuk hubungi via whatsapp</button>
            </div>
        </section>
    </div>
    <div class="">
        <livewire:footer.index />
    </div>
    <livewire:modal.tambah-keranjang />
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

</html>
