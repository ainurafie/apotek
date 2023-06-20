<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>QRIS</title>
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
        <h1 class="font-poppins text-[36px] text-black text-center font-semibold mb-[50px]">
            QRIS
        </h1>
        <div class="flex justify-center mb-5">
            <div id="qrcode" class=""></div>
        </div>
        <div class="flex justify-center gap-5 items-center">
            <div class="p-2.5 rounded-[5px] text-white bg-[#DB4444] w-max h-max">2</div>
            <div class="p-2.5 rounded-[5px] text-white bg-[#DB4444] w-max h-max">3</div>
            <h1 class="text-xl font-medium font-poppins text-black">:</h1>
            <div class="p-2.5 rounded-[5px] text-white bg-[#DB4444] w-max h-max">5</div>
            <div class="p-2.5 rounded-[5px] text-white bg-[#DB4444] w-max h-max">9</div>
        </div>
        <div class="flex justify-center my-[50px]">
            <button
                class="px-[50px] py-3 text-white text-base font-medium text-center rounded-[10px] w-max mt-5 bg-[#4E9FCA]">
                Konfirmasi Pembayaran</button>
        </div>
        <div class="">
            <h1 class="font-poppins text-xl text-black font-semibold mb-2.5">
                Cara Pembayaran:
            </h1>
            <ol class="list-decimal text-base text-black pl-4 font-poppins">
                <li>Buka aplikasi E-Wallet atau M-Banking yang Anda inginkan untuk membayar pesanan.</li>
                <li>Klik tanda scan pada aplikasi E-Wallet atau M-Banking yang dipilih.</li>
                <li>Arahkan kamera handphone Anda ke QR Code.</li>
                <li>Masukkan nominal sesuai total bayar.</li>
                <li>Periksa kembali detail pembayaran Anda di aplikasi, lalu tekan “Lanjutkan”, dan pilih “Bayar Sekarang”.</li>
                <li>Pembayaran selesai.</li>
                <li>Klik tombol “Konfirmasi Pembayaran” untuk mengkonfirmasi bahwa Anda sudah melakukan pembayaran.</li>
            </ol>
        </div>
    </div>
    <div class="">
        <livewire:footer.index />
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script>
    var qrcode = new QRCode("qrcode");

    function makeCode(text) {
        qrcode.clear(); // Clear the QR code
        qrcode.makeCode(text.trim());
    }

    // Set the text programmatically
    var text = "test bang";
    makeCode(text);
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>
