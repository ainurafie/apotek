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
    <div class="px-[130px] py-12 mb-5">
        <div class="flex justify-center">
            <img src="../assets/images/ilus4.svg" class="w-[500px] h-[490px]" alt="">
        </div>
        <h1 class="font-poppins text-[36px] text-black text-center font-semibold mb-2.5">
            Pembayaran Berhasil
        </h1>
        <h1 class="font-poppins text-xl text-black text-center font-medium mb-[50px]">
            Pesanan segera menuju rumah Anda. Duduk<br> manis dan tunggu pesanan sampai.
        </h1>
        <div class="flex flex-col items-center">
            <button type=""
                class="px-[50px] py-3 text-white text-base font-medium  rounded-[10px] w-[479px] mb-5 bg-[#4E9FCA]">My Order</button>
            <a href="/shop" type=""
                class="px-[50px] py-3 bg-white text-base font-medium text-center rounded-[10px] w-[479px] mb-5 text-[#4E9FCA] border-[#4E9FCA] border">Back to Shop</a>
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
