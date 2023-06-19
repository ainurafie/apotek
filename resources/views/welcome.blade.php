<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="sticky top-0 z-30">
        <livewire:navbar.index />
    </div>
    <div class="px-[130px] py-12">
        <div class="relative mb-24">
            <livewire:slider.banner />
        </div>
        <div class="flex gap-4 items-center mb-6">
            <div class="w-5 h-10 bg-[#4E9FCA] rounded-[5px]"></div>
            <h1 class="font-poppins text-base text-[#4E9FCA] font-semibold">
                Categories
            </h1>
        </div>
        <h1 class="font-poppins text-[36px] text-black font-semibold mb-[30px]">
            Browse by Category
        </h1>
        <div class="flex gap-5 mb-[108px] justify-center">
            <a href="" class="w-max flex flex-col items-center">
                <img src="../assets/images/obat-resep.svg" class="mb-4" alt="">
                <h1 class="font-poppins text-base text-black font-medium text-center">
                    Obat Resep
                </h1>
            </a>
            <a href="" class="w-max flex flex-col items-center">
                <img src="../assets/images/obat-bebas.svg" class="mb-4" alt="">
                <h1 class="font-poppins text-base text-black font-medium text-center">
                    Obat Bebas
                </h1>
            </a>
            <a href="" class="w-max flex flex-col items-center">
                <img src="../assets/images/Ibu & Anak.svg" class="mb-4" alt="">
                <h1 class="font-poppins text-base text-black font-medium text-center">
                    Ibu & Anak
                </h1>
            </a>
            <a href="" class="w-max flex flex-col items-center">
                <img src="../assets/images/Vitamin & Suplemen.svg" class="mb-4" alt="">
                <h1 class="font-poppins text-base text-black font-medium text-center">
                    Vitamin & Suplemen
                </h1>
            </a>
            <a href="" class="w-max flex flex-col items-center">
                <img src="../assets/images/Kebutuhan COVID-19.svg" class="mb-4" alt="">
                <h1 class="font-poppins text-base text-black font-medium text-center">
                    Kebutuhan COVID-19
                </h1>
            </a>
            <a href="" class="w-max flex flex-col items-center">
                <img src="../assets/images/Perawatan Tubuh.svg" class="mb-4" alt="">
                <h1 class="font-poppins text-base text-black font-medium text-center">
                    Perawatan Tubuh
                </h1>
            </a>
            <a href="" class="w-max flex flex-col items-center">
                <img src="../assets/images/Alat Kesehatan.svg" class="mb-4" alt="">
                <h1 class="font-poppins text-base text-black font-medium text-center">
                    Alat Kesehatan
                </h1>
            </a>
        </div>
        <div class="flex gap-4 items-center mb-6">
            <div class="w-5 h-10 bg-[#4E9FCA] rounded-[5px]"></div>
            <h1 class="font-poppins text-base text-[#4E9FCA] font-semibold">
                This Month
            </h1>
        </div>
        <h1 class="font-poppins text-[36px] text-black font-semibold mb-[30px]">
            Best Selling Products
        </h1>
        <div class="flex gap-[60px] overflow-x-hidden">
            <div class="flex-shrink-0">
                <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px] relative">
                    <img src="../assets/images/sanmol.svg" alt="" class="mb-2">
                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Sanmol Strip 4 Tablet
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                    <div class="absolute top-0 right-0">
                        <svg width="63" height="88" viewBox="0 0 63 88" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_16_2766)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M45.7656 40.6011L54.7657 74.1919C54.8321 74.4399 54.834 74.7009 54.7713 74.9499C54.7086 75.1989 54.5834 75.4278 54.4075 75.6149C54.2316 75.802 54.0108 75.9411 53.7662 76.019C53.5215 76.0969 53.2609 76.1113 53.0093 76.0603L47.253 74.8812C46.6978 74.7678 46.1238 74.7852 45.5765 74.9322C45.0292 75.0791 44.5236 75.3516 44.0998 75.7278L39.7162 79.6157C39.5226 79.7881 39.2881 79.9081 39.035 79.9641C38.7819 80.0201 38.5186 80.0102 38.2704 79.9357C38.0221 79.8611 37.7971 79.7241 37.6167 79.5378C37.4364 79.3516 37.3067 79.1226 37.2402 78.8721L28.2461 45.2961L45.7656 40.6011Z"
                                    fill="#F05542" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.6593 44.3833L28.2461 45.2993L33.5246 65.0018L38.5583 46.2307L31.6593 44.3833Z"
                                    fill="#D53D2A" />
                                <path
                                    d="M52.027 63.9704L34.5044 68.6653L35.2904 71.586L52.8099 66.891L52.027 63.9704ZM50.4609 58.1328L32.9414 62.8245L33.7244 65.7451L51.2439 61.0501L50.4609 58.1328Z"
                                    fill="#FCD062" />
                                <path
                                    d="M29.6489 35.8344L34.8852 32.8112C35.6082 32.3938 36.5327 32.6415 36.9501 33.3645C37.3676 34.0875 37.1198 35.012 36.3969 35.4294L31.1605 38.4526C30.4375 38.87 29.513 38.6223 29.0956 37.8993C28.6782 37.1763 28.9259 36.2519 29.6489 35.8344Z"
                                    fill="#F05542" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.4479 40.6011L9.44787 74.1919C9.38134 74.4402 9.37937 74.7017 9.4422 74.951C9.50503 75.2003 9.63053 75.4296 9.80682 75.6167C9.9831 75.8039 10.2043 75.9428 10.4494 76.0205C10.6945 76.0981 10.9555 76.1119 11.2074 76.0603L16.9636 74.8812C18.0882 74.6545 19.2582 74.966 20.1168 75.7278L24.5004 79.6157C25.3439 80.3624 26.6802 79.9635 26.9734 78.8721L35.9705 45.2961L18.4479 40.6011Z"
                                    fill="#F05542" />
                                <path
                                    d="M18.4482 40.6042L16.0811 49.4381C18.9168 51.8476 19.2131 56.3673 22.8318 57.4345C26.5897 58.541 29.3409 54.5536 33.2499 54.3087H33.5522L35.9708 45.2845L18.4482 40.5891V40.6042Z"
                                    fill="#D73B28" />
                                <path
                                    d="M45.6484 40.1658L28.1289 44.8611L30.8407 54.9766C31.5844 54.6743 32.3493 54.4446 33.1716 54.3932C37.1562 54.1453 40.4485 57.8247 44.1065 56.2284C46.637 55.125 47.2174 52.4463 48.2786 49.9824L45.6484 40.1658Z"
                                    fill="#D73B28" />
                                <path
                                    d="M47.9849 44.9212C45.4485 47.3398 45.8536 51.6541 42.6429 53.0538C39.4323 54.4566 36.5451 51.2249 33.0473 51.4426C29.5524 51.6633 27.0885 55.2274 23.7267 54.2388C20.3679 53.2472 20.2319 48.9181 17.4142 46.8351C14.5936 44.7551 10.4155 45.9041 8.47763 42.9867C6.53975 40.0693 9.22134 36.6621 8.39902 33.2579C7.57671 29.8508 3.63444 28.046 4.02746 24.5632C4.42048 21.0835 8.66203 20.1976 10.222 17.0595C11.779 13.9214 9.91966 10.0064 12.4592 7.59089C14.9987 5.17534 18.817 7.22483 22.0276 5.82206C25.2383 4.42231 26.3327 0.229193 29.8275 0.00849876C33.3254 -0.209173 34.9368 3.81786 38.2955 4.80645C41.6543 5.79504 45.1885 3.28558 48.0091 5.36555C50.8267 7.44552 49.4723 11.5631 51.4102 14.4835C53.3481 17.4009 57.6683 17.7487 58.4906 21.1559C59.316 24.56 55.6306 26.8454 55.2376 30.3251C54.8446 33.8079 57.9313 36.8553 56.3743 39.9904C54.8144 43.1255 50.5244 42.5087 47.9849 44.9212Z"
                                    fill="#F8B84E" />
                                <path
                                    d="M44.3938 41.1458C42.3984 43.0443 42.7159 46.4364 40.1945 47.5369C37.6732 48.6373 35.4027 46.0977 32.6546 46.267C29.9096 46.4393 27.9717 49.2446 25.3324 48.4646C22.6932 47.6877 22.5843 44.2837 20.3713 42.6481C18.1553 41.0156 14.8691 41.9165 13.3484 39.6249C11.8277 37.3303 13.9349 34.655 13.2879 31.9794C12.641 29.3039 9.54519 27.886 9.85356 25.1469C10.1619 22.414 13.4935 21.7184 14.7209 19.2515C15.9453 16.7875 14.4851 13.71 16.4774 11.8145C18.4728 9.91589 21.4748 11.5274 23.9962 10.4239C26.5206 9.32346 27.3822 6.02813 30.1272 5.85883C32.8723 5.68651 34.139 8.8487 36.7783 9.62567C39.4176 10.4026 42.1959 8.43149 44.4119 10.067C46.6249 11.6996 45.5607 14.9345 47.0844 17.2291C48.6051 19.5207 52.0002 19.7988 52.6472 22.4714C53.2941 25.1469 50.3979 26.9425 50.0895 29.6755C49.7842 32.4115 52.2057 34.8061 50.9813 37.2701C49.7569 39.734 46.3891 39.2472 44.3938 41.1458ZM12.1875 63.9708L29.71 68.6658L28.924 71.5864L11.4045 66.8914L12.1875 63.9708ZM13.7535 58.1299L31.273 62.8249L30.4931 65.7455L12.9705 61.0505L13.7535 58.1299Z"
                                    fill="#FCD062" />
                                <path d="M27.864 23.6V20.504H33.648V38H30.192V23.6H27.864Z" fill="#F05542" />
                            </g>
                            <defs>
                                <filter id="filter0_d_16_2766" x="0" y="0" width="62.6104"
                                    height="88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow shadow-black/25_16_2766" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow shadow-black/25_16_2766"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px] relative">
                    <img src="../assets/images/vitamin c.svg" alt="" class="mb-2">
                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Vitamin c
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                    <div class="absolute top-0 right-0">
                        <svg width="55" height="80" viewBox="0 0 55 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M41.7656 40.6011L50.7657 74.1919C50.8321 74.4399 50.834 74.7009 50.7713 74.9499C50.7086 75.1989 50.5834 75.4278 50.4075 75.6149C50.2316 75.802 50.0108 75.9411 49.7662 76.019C49.5215 76.0969 49.2609 76.1113 49.0093 76.0603L43.253 74.8812C42.6978 74.7678 42.1238 74.7852 41.5765 74.9322C41.0292 75.0791 40.5236 75.3516 40.0998 75.7278L35.7162 79.6157C35.5226 79.7881 35.2881 79.9081 35.035 79.9641C34.7819 80.0201 34.5186 80.0102 34.2704 79.9357C34.0221 79.8611 33.7971 79.7241 33.6167 79.5378C33.4364 79.3516 33.3067 79.1226 33.2402 78.8721L24.2461 45.2961L41.7656 40.6011Z"
                                fill="#F05542" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.6593 44.3833L24.2461 45.2993L29.5246 65.0018L34.5583 46.2307L27.6593 44.3833Z"
                                fill="#D53D2A" />
                            <path
                                d="M48.027 63.9704L30.5044 68.6653L31.2904 71.586L48.8099 66.891L48.027 63.9704ZM46.4609 58.1328L28.9414 62.8245L29.7244 65.7451L47.2439 61.0501L46.4609 58.1328Z"
                                fill="#FCD062" />
                            <path
                                d="M25.6489 35.8344L30.8852 32.8112C31.6082 32.3938 32.5327 32.6415 32.9501 33.3645C33.3676 34.0875 33.1198 35.012 32.3969 35.4294L27.1605 38.4526C26.4375 38.87 25.513 38.6223 25.0956 37.8993C24.6782 37.1763 24.9259 36.2519 25.6489 35.8344Z"
                                fill="#F05542" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.4479 40.6011L5.44787 74.1919C5.38134 74.4402 5.37937 74.7017 5.4422 74.951C5.50503 75.2003 5.63053 75.4296 5.80682 75.6167C5.9831 75.8039 6.20429 75.9428 6.44941 76.0205C6.69454 76.0981 6.95547 76.1119 7.20739 76.0603L12.9636 74.8812C14.0882 74.6545 15.2582 74.966 16.1168 75.7278L20.5004 79.6157C21.3439 80.3624 22.6802 79.9635 22.9734 78.8721L31.9705 45.2961L14.4479 40.6011Z"
                                fill="#F05542" />
                            <path
                                d="M14.4482 40.6042L12.0811 49.4381C14.9168 51.8476 15.2131 56.3673 18.8318 57.4345C22.5897 58.541 25.3409 54.5536 29.2499 54.3087H29.5522L31.9708 45.2845L14.4482 40.5891V40.6042Z"
                                fill="#D73B28" />
                            <path
                                d="M41.6484 40.1658L24.1289 44.8611L26.8407 54.9766C27.5844 54.6743 28.3493 54.4446 29.1716 54.3932C33.1562 54.1453 36.4485 57.8247 40.1065 56.2284C42.637 55.125 43.2174 52.4463 44.2786 49.9824L41.6484 40.1658Z"
                                fill="#D73B28" />
                            <path
                                d="M43.9849 44.9212C41.4485 47.3398 41.8536 51.6541 38.6429 53.0538C35.4323 54.4566 32.5451 51.2249 29.0473 51.4426C25.5524 51.6633 23.0885 55.2274 19.7267 54.2388C16.3679 53.2472 16.2319 48.9181 13.4142 46.8351C10.5936 44.7551 6.41551 45.9041 4.47763 42.9867C2.53975 40.0693 5.22134 36.6621 4.39902 33.2579C3.57671 29.8508 -0.365557 28.046 0.0274603 24.5632C0.420478 21.0835 4.66203 20.1976 6.22201 17.0595C7.77896 13.9214 5.91966 10.0064 8.45916 7.59089C10.9987 5.17534 14.817 7.22483 18.0276 5.82206C21.2383 4.42231 22.3327 0.229193 25.8275 0.00849876C29.3254 -0.209173 30.9368 3.81786 34.2955 4.80645C37.6543 5.79504 41.1885 3.28558 44.0091 5.36555C46.8267 7.44552 45.4723 11.5631 47.4102 14.4835C49.3481 17.4009 53.6683 17.7487 54.4906 21.1559C55.316 24.56 51.6306 26.8454 51.2376 30.3251C50.8446 33.8079 53.9313 36.8553 52.3743 39.9904C50.8144 43.1255 46.5244 42.5087 43.9849 44.9212Z"
                                fill="#F8B84E" />
                            <path
                                d="M40.3938 41.1458C38.3984 43.0443 38.7159 46.4364 36.1945 47.5369C33.6732 48.6373 31.4027 46.0977 28.6546 46.267C25.9096 46.4393 23.9717 49.2446 21.3324 48.4646C18.6932 47.6877 18.5843 44.2837 16.3713 42.6481C14.1553 41.0156 10.8691 41.9165 9.34841 39.6249C7.82773 37.3303 9.9349 34.655 9.28793 31.9794C8.64097 29.3039 5.54519 27.886 5.85356 25.1469C6.16193 22.414 9.49351 21.7184 10.7209 19.2515C11.9453 16.7875 10.4851 13.71 12.4774 11.8145C14.4728 9.91589 17.4748 11.5274 19.9962 10.4239C22.5206 9.32346 23.3822 6.02813 26.1272 5.85883C28.8723 5.68651 30.139 8.8487 32.7783 9.62567C35.4176 10.4026 38.1959 8.43149 40.4119 10.067C42.6249 11.6996 41.5607 14.9345 43.0844 17.2291C44.6051 19.5207 48.0002 19.7988 48.6472 22.4714C49.2941 25.1469 46.3979 26.9425 46.0895 29.6755C45.7842 32.4115 48.2057 34.8061 46.9813 37.2701C45.7569 39.734 42.3891 39.2472 40.3938 41.1458ZM8.18749 63.9708L25.71 68.6658L24.924 71.5864L7.40447 66.8914L8.18749 63.9708ZM9.75353 58.1299L27.273 62.8249L26.4931 65.7455L8.97051 61.0505L9.75353 58.1299Z"
                                fill="#FCD062" />
                            <path
                                d="M22.328 33.208C23.864 31.928 25.088 30.864 26 30.016C26.912 29.152 27.672 28.256 28.28 27.328C28.888 26.4 29.192 25.488 29.192 24.592C29.192 23.776 29 23.136 28.616 22.672C28.232 22.208 27.64 21.976 26.84 21.976C26.04 21.976 25.424 22.248 24.992 22.792C24.56 23.32 24.336 24.048 24.32 24.976H21.056C21.12 23.056 21.688 21.6 22.76 20.608C23.848 19.616 25.224 19.12 26.888 19.12C28.712 19.12 30.112 19.608 31.088 20.584C32.064 21.544 32.552 22.816 32.552 24.4C32.552 25.648 32.216 26.84 31.544 27.976C30.872 29.112 30.104 30.104 29.24 30.952C28.376 31.784 27.248 32.792 25.856 33.976H32.936V36.76H21.08V34.264L22.328 33.208Z"
                                fill="#F05542" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px] relative">
                    <img src="../assets/images/diatabs.svg" alt="" class="mb-2">
                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        diatabs
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                    <div class="absolute top-0 right-0">
                        <svg width="63" height="88" viewBox="0 0 63 88" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_16_2800)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M45.7656 40.6011L54.7657 74.1919C54.8321 74.4399 54.834 74.7009 54.7713 74.9499C54.7086 75.1989 54.5834 75.4278 54.4075 75.6149C54.2316 75.802 54.0108 75.9411 53.7662 76.019C53.5215 76.0969 53.2609 76.1113 53.0093 76.0603L47.253 74.8812C46.6978 74.7678 46.1238 74.7852 45.5765 74.9322C45.0292 75.0791 44.5236 75.3516 44.0998 75.7278L39.7162 79.6157C39.5226 79.7881 39.2881 79.9081 39.035 79.9641C38.7819 80.0201 38.5186 80.0102 38.2704 79.9357C38.0221 79.8611 37.7971 79.7241 37.6167 79.5378C37.4364 79.3516 37.3067 79.1226 37.2402 78.8721L28.2461 45.2961L45.7656 40.6011Z"
                                    fill="#F05542" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.6593 44.3833L28.2461 45.2993L33.5246 65.0018L38.5583 46.2307L31.6593 44.3833Z"
                                    fill="#D53D2A" />
                                <path
                                    d="M52.027 63.9704L34.5044 68.6653L35.2904 71.586L52.8099 66.891L52.027 63.9704ZM50.4609 58.1328L32.9414 62.8245L33.7244 65.7451L51.2439 61.0501L50.4609 58.1328Z"
                                    fill="#FCD062" />
                                <path
                                    d="M29.6489 35.8344L34.8852 32.8112C35.6082 32.3938 36.5327 32.6415 36.9501 33.3645C37.3676 34.0875 37.1198 35.012 36.3969 35.4294L31.1605 38.4526C30.4375 38.87 29.513 38.6223 29.0956 37.8993C28.6782 37.1763 28.9259 36.2519 29.6489 35.8344Z"
                                    fill="#F05542" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.4479 40.6011L9.44787 74.1919C9.38134 74.4402 9.37937 74.7017 9.4422 74.951C9.50503 75.2003 9.63053 75.4296 9.80682 75.6167C9.9831 75.8039 10.2043 75.9428 10.4494 76.0205C10.6945 76.0981 10.9555 76.1119 11.2074 76.0603L16.9636 74.8812C18.0882 74.6545 19.2582 74.966 20.1168 75.7278L24.5004 79.6157C25.3439 80.3624 26.6802 79.9635 26.9734 78.8721L35.9705 45.2961L18.4479 40.6011Z"
                                    fill="#F05542" />
                                <path
                                    d="M18.4482 40.6042L16.0811 49.4381C18.9168 51.8476 19.2131 56.3673 22.8318 57.4345C26.5897 58.541 29.3409 54.5536 33.2499 54.3087H33.5522L35.9708 45.2845L18.4482 40.5891V40.6042Z"
                                    fill="#D73B28" />
                                <path
                                    d="M45.6484 40.1658L28.1289 44.8611L30.8407 54.9766C31.5844 54.6743 32.3493 54.4446 33.1716 54.3932C37.1562 54.1453 40.4485 57.8247 44.1065 56.2284C46.637 55.125 47.2174 52.4463 48.2786 49.9824L45.6484 40.1658Z"
                                    fill="#D73B28" />
                                <path
                                    d="M47.9849 44.9212C45.4485 47.3398 45.8536 51.6541 42.6429 53.0538C39.4323 54.4566 36.5451 51.2249 33.0473 51.4426C29.5524 51.6633 27.0885 55.2274 23.7267 54.2388C20.3679 53.2472 20.2319 48.9181 17.4142 46.8351C14.5936 44.7551 10.4155 45.9041 8.47763 42.9867C6.53975 40.0693 9.22134 36.6621 8.39902 33.2579C7.57671 29.8508 3.63444 28.046 4.02746 24.5632C4.42048 21.0835 8.66203 20.1976 10.222 17.0595C11.779 13.9214 9.91966 10.0064 12.4592 7.59089C14.9987 5.17534 18.817 7.22483 22.0276 5.82206C25.2383 4.42231 26.3327 0.229193 29.8275 0.00849876C33.3254 -0.209173 34.9368 3.81786 38.2955 4.80645C41.6543 5.79504 45.1885 3.28558 48.0091 5.36555C50.8267 7.44552 49.4723 11.5631 51.4102 14.4835C53.3481 17.4009 57.6683 17.7487 58.4906 21.1559C59.316 24.56 55.6306 26.8454 55.2376 30.3251C54.8446 33.8079 57.9313 36.8553 56.3743 39.9904C54.8144 43.1255 50.5244 42.5087 47.9849 44.9212Z"
                                    fill="#F8B84E" />
                                <path
                                    d="M44.3938 41.1458C42.3984 43.0443 42.7159 46.4364 40.1945 47.5369C37.6732 48.6373 35.4027 46.0977 32.6546 46.267C29.9096 46.4393 27.9717 49.2446 25.3324 48.4646C22.6932 47.6877 22.5843 44.2837 20.3713 42.6481C18.1553 41.0156 14.8691 41.9165 13.3484 39.6249C11.8277 37.3303 13.9349 34.655 13.2879 31.9794C12.641 29.3039 9.54519 27.886 9.85356 25.1469C10.1619 22.414 13.4935 21.7184 14.7209 19.2515C15.9453 16.7875 14.4851 13.71 16.4774 11.8145C18.4728 9.91589 21.4748 11.5274 23.9962 10.4239C26.5206 9.32346 27.3822 6.02813 30.1272 5.85883C32.8723 5.68651 34.139 8.8487 36.7783 9.62567C39.4176 10.4026 42.1959 8.43149 44.4119 10.067C46.6249 11.6996 45.5607 14.9345 47.0844 17.2291C48.6051 19.5207 52.0002 19.7988 52.6472 22.4714C53.2941 25.1469 50.3979 26.9425 50.0895 29.6755C49.7842 32.4115 52.2057 34.8061 50.9813 37.2701C49.7569 39.734 46.3891 39.2472 44.3938 41.1458ZM12.1875 63.9708L29.71 68.6658L28.924 71.5864L11.4045 66.8914L12.1875 63.9708ZM13.7535 58.1299L31.273 62.8249L30.4931 65.7455L12.9705 61.0505L13.7535 58.1299Z"
                                    fill="#FCD062" />
                                <path
                                    d="M25.32 24.112C25.4 22.512 25.96 21.28 27 20.416C28.056 19.536 29.44 19.096 31.152 19.096C32.32 19.096 33.32 19.304 34.152 19.72C34.984 20.12 35.608 20.672 36.024 21.376C36.456 22.064 36.672 22.848 36.672 23.728C36.672 24.736 36.408 25.592 35.88 26.296C35.368 26.984 34.752 27.448 34.032 27.688V27.784C34.96 28.072 35.68 28.584 36.192 29.32C36.72 30.056 36.984 31 36.984 32.152C36.984 33.112 36.76 33.968 36.312 34.72C35.88 35.472 35.232 36.064 34.368 36.496C33.52 36.912 32.496 37.12 31.296 37.12C29.488 37.12 28.016 36.664 26.88 35.752C25.744 34.84 25.144 33.496 25.08 31.72H28.344C28.376 32.504 28.64 33.136 29.136 33.616C29.648 34.08 30.344 34.312 31.224 34.312C32.04 34.312 32.664 34.088 33.096 33.64C33.544 33.176 33.768 32.584 33.768 31.864C33.768 30.904 33.464 30.216 32.856 29.8C32.248 29.384 31.304 29.176 30.024 29.176H29.328V26.416H30.024C32.296 26.416 33.432 25.656 33.432 24.136C33.432 23.448 33.224 22.912 32.808 22.528C32.408 22.144 31.824 21.952 31.056 21.952C30.304 21.952 29.72 22.16 29.304 22.576C28.904 22.976 28.672 23.488 28.608 24.112H25.32Z"
                                    fill="#F05542" />
                            </g>
                            <defs>
                                <filter id="filter0_d_16_2800" x="0" y="0" width="62.6104"
                                    height="88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow shadow-black/25_16_2800" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow shadow-black/25_16_2800"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>

                    </div>
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
                    <img src="../assets/images/sanmol.svg" alt="" class="mb-2">
                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Sanmol Strip 4 Tablet
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                </div>
            </div>
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
                    <img src="../assets/images/sanmol.svg" alt="" class="mb-2">
                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Sanmol Strip 4 Tablet
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 2.200</h1>
                </div>
            </div>

            <!-- Navigation buttons -->
        </div>
        <div class="flex justify-center gap-5 mt-10">
            <button id="prevButton" class="slide-button">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g transform="rotate(180 25 25)">
                        <circle cx="25" cy="25" r="25" fill="#4E9FCA" />
                        <rect width="32" height="32" transform="translate(9 9)" fill="#4E9FCA" />
                        <path d="M14 25H36" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M27 16L36 25L27 34" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg></button>
            <button id="nextButton" class="slide-button"><svg width="50" height="50" viewBox="0 0 50 50"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#4E9FCA" />
                    <rect width="32" height="32" transform="translate(9 9)" fill="#4E9FCA" />
                    <path d="M14 25H36" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M27 16L36 25L27 34" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="flex gap-4 items-center mb-6 mt-24">
            <div class="w-5 h-10 bg-[#4E9FCA] rounded-[5px]"></div>
            <h1 class="font-poppins text-base text-[#4E9FCA] font-semibold">
                Our Products
            </h1>
        </div>
        <h1 class="font-poppins text-[36px] text-black font-semibold mb-[30px]">
            Explore Our Products
        </h1>
        <div class="grid grid-cols-4 gap-[60px]">
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
            <div class="flex-shrink-0">
                <div class="rounded-[25px] shadow shadow-black/25 bg-white p-6 w-[250px]">
                    <img src="../assets/images/omron 2.png" alt="" class="mb-2">

                    <h1 class="font-poppins text-base text-black font-medium mb-7">
                        Omron 2
                    </h1>
                    <h1 class="font-poppins text-lg text-[#DB4444] font-semibold">Rp 425.000</h1>
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
        </div>
        <div class="flex justify-center mt-[50px]">
            <button class="px-[18px] py-3 text-white rounded-[10px] bg-[#4E9FCA] hover:bg-[#4E9FCA]/90">View All
                Products</button>
        </div>
        <div class="flex gap-4 items-center mb-6 mt-24">
            <div class="w-5 h-10 bg-[#4E9FCA] rounded-[5px]"></div>
            <h1 class="font-poppins text-base text-[#4E9FCA] font-semibold">
                Guarantee
            </h1>
        </div>
        <h1 class="font-poppins text-[36px] text-black font-semibold mb-[30px]">
            We Guarantee You
        </h1>
        <div class="flex gap-[50px] justify-center">
            <div class="flex flex-col items-center">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M80 40C80 62.0914 62.0914 80 40 80C17.9086 80 0 62.0914 0 40C0 17.9086 17.9086 0 40 0C62.0914 0 80 17.9086 80 40ZM10.9071 40C10.9071 56.0675 23.9325 69.0929 40 69.0929C56.0675 69.0929 69.0929 56.0675 69.0929 40C69.0929 23.9325 56.0675 10.9071 40 10.9071C23.9325 10.9071 10.9071 23.9325 10.9071 40Z"
                        fill="#4E9FCA" />
                    <circle cx="40" cy="40" r="29" fill="#052F5F" />
                    <g clip-path="url(#clip0_61_713)">
                        <path
                            d="M33.3337 45C33.3337 43.159 31.8413 41.6666 30.0003 41.6666C28.1594 41.6666 26.667 43.159 26.667 45V48.3333C26.667 50.1742 28.1594 51.6666 30.0003 51.6666C31.8413 51.6666 33.3337 50.1742 33.3337 48.3333V45Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M53.3337 45C53.3337 43.159 51.8413 41.6666 50.0003 41.6666C48.1594 41.6666 46.667 43.159 46.667 45V48.3333C46.667 50.1742 48.1594 51.6666 50.0003 51.6666C51.8413 51.6666 53.3337 50.1742 53.3337 48.3333V45Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M26.667 45V40C26.667 36.4637 28.0718 33.0724 30.5722 30.5719C33.0727 28.0714 36.4641 26.6666 40.0003 26.6666C43.5365 26.6666 46.9279 28.0714 49.4284 30.5719C51.9289 33.0724 53.3337 36.4637 53.3337 40V45"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M50 51.6666C50 52.9927 48.9464 54.2645 47.0711 55.2022C45.1957 56.1398 42.6522 56.6666 40 56.6666"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_61_713">
                            <rect width="40" height="40" fill="white" transform="translate(20 20)" />
                        </clipPath>
                    </defs>
                </svg>
                <h1 class="font-poppins text-xl text-black font-semibold mt-6 mb-2">
                    Free Consultation
                </h1>
                <h1 class="font-poppins text-sm text-black mb-2">
                    Consultation with a friendly pharmacist
                </h1>
            </div>
            <div class="flex flex-col items-center">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M80 40C80 62.0914 62.0914 80 40 80C17.9086 80 0 62.0914 0 40C0 17.9086 17.9086 0 40 0C62.0914 0 80 17.9086 80 40ZM10.9071 40C10.9071 56.0675 23.9325 69.0929 40 69.0929C56.0675 69.0929 69.0929 56.0675 69.0929 40C69.0929 23.9325 56.0675 10.9071 40 10.9071C23.9325 10.9071 10.9071 23.9325 10.9071 40Z"
                        fill="#4E9FCA" />
                    <circle cx="40" cy="40" r="29" fill="#052F5F" />
                    <path
                        d="M28.0994 50.5994L28.0992 50.5992C27.2265 49.9485 26.4259 48.9207 25.8431 47.7591C25.2602 46.5974 24.917 45.3452 24.917 44.2667V31.8667C24.917 29.5075 26.6718 26.9619 28.8915 26.1353L28.8925 26.1349L37.2087 23.0184C37.2088 23.0184 37.2089 23.0183 37.2089 23.0183C37.9624 22.7367 38.9619 22.5875 39.9837 22.5875C41.0054 22.5875 42.0049 22.7367 42.7584 23.0183C42.7585 23.0183 42.7585 23.0184 42.7586 23.0184L51.0749 26.1349L51.0758 26.1353C53.2955 26.9619 55.0503 29.5075 55.0503 31.8667V44.25C55.0503 45.3372 54.7069 46.5893 54.1244 47.7484C53.5419 48.9074 52.7414 49.9314 51.8681 50.5825L51.8679 50.5827L44.7012 55.9327L44.7012 55.9326L44.695 55.9374C43.4123 56.9265 41.7243 57.4334 40.0003 57.4334C38.2777 57.4334 36.5855 56.9271 35.2652 55.9487C35.265 55.9486 35.2649 55.9484 35.2647 55.9483L28.0994 50.5994ZM37.7422 24.4316L37.7415 24.4318L29.4249 27.5485L29.4242 27.5488C28.5966 27.8603 27.8553 28.5226 27.3244 29.2907C26.7933 30.0591 26.4337 30.9899 26.4337 31.8834V44.2667C26.4337 45.1612 26.7442 46.1893 27.2012 47.1011C27.6581 48.0127 28.2936 48.8723 29.0012 49.4007L29.0012 49.4007L36.1676 54.7504C37.2296 55.5446 38.6286 55.925 40.0024 55.925C41.3764 55.925 42.7786 55.5446 43.8481 54.7517L43.8494 54.7507L51.0161 49.4007L51.017 49.4C51.7317 48.864 52.3672 48.0051 52.8225 47.0945C53.2779 46.1838 53.5837 45.1601 53.5837 44.2667V31.8667C53.5837 30.9805 53.2232 30.0539 52.6929 29.2866C52.1624 28.519 51.4226 27.8541 50.5979 27.5339L50.598 27.5339L50.5925 27.5318L42.2758 24.4152L42.2758 24.4151L42.2667 24.4119C41.6286 24.1866 40.8005 24.0833 40.001 24.0854C39.2024 24.0876 38.3755 24.1953 37.7422 24.4316Z"
                        fill="white" stroke="white" />
                    <path
                        d="M37.4135 41.0536L37.7671 41.4071L38.1206 41.0536L44.4039 34.7703C44.692 34.4822 45.1754 34.4822 45.4635 34.7703C45.7516 35.0583 45.7516 35.5417 45.4635 35.8298L38.2968 42.9965C38.1455 43.1478 37.9583 43.2167 37.7671 43.2167C37.5758 43.2167 37.3886 43.1478 37.2373 42.9965L34.5539 40.3131C34.2659 40.0251 34.2659 39.5417 34.5539 39.2536C34.842 38.9655 35.3254 38.9655 35.6135 39.2536L37.4135 41.0536Z"
                        fill="white" stroke="white" />
                </svg>

                <h1 class="font-poppins text-xl text-black font-semibold mt-6 mb-2">
                    Money Back Guarantee
                </h1>
                <h1 class="font-poppins text-sm text-black mb-2">
                    We return money within 10 days
                </h1>
            </div>
            <div class="flex flex-col items-center">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M80 40C80 62.0914 62.0914 80 40 80C17.9086 80 0 62.0914 0 40C0 17.9086 17.9086 0 40 0C62.0914 0 80 17.9086 80 40ZM10.9071 40C10.9071 56.0675 23.9325 69.0929 40 69.0929C56.0675 69.0929 69.0929 56.0675 69.0929 40C69.0929 23.9325 56.0675 10.9071 40 10.9071C23.9325 10.9071 10.9071 23.9325 10.9071 40Z"
                        fill="#4E9FCA" />
                    <circle cx="40" cy="40" r="29" fill="#052F5F" />
                    <path
                        d="M25 36.25H32.5V52.5H25C24.6685 52.5 24.3505 52.3683 24.1161 52.1339C23.8817 51.8995 23.75 51.5815 23.75 51.25V37.5C23.75 37.1685 23.8817 36.8505 24.1161 36.6161C24.3505 36.3817 24.6685 36.25 25 36.25V36.25Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M32.5 36.25L38.75 23.75C40.0761 23.75 41.3479 24.2768 42.2855 25.2145C43.2232 26.1521 43.75 27.4239 43.75 28.75V32.5H53.4219C53.7764 32.4991 54.1269 32.5741 54.45 32.7199C54.7731 32.8658 55.0613 33.0791 55.2951 33.3455C55.529 33.6119 55.7031 33.9252 55.8058 34.2645C55.9085 34.6038 55.9374 34.9611 55.8906 35.3125L54.0156 50.3125C53.9398 50.9147 53.6474 51.4687 53.1932 51.8712C52.7389 52.2737 52.1538 52.4972 51.5469 52.5H32.5"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <h1 class="font-poppins text-xl text-black font-semibold mt-6 mb-2">
                    High Quality Products
                </h1>
                <h1 class="font-poppins text-sm text-black mb-2">
                    100% original products
                </h1>
            </div>
            <div class="flex flex-col items-center">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M80 40C80 62.0914 62.0914 80 40 80C17.9086 80 0 62.0914 0 40C0 17.9086 17.9086 0 40 0C62.0914 0 80 17.9086 80 40ZM10.9071 40C10.9071 56.0675 23.9325 69.0929 40 69.0929C56.0675 69.0929 69.0929 56.0675 69.0929 40C69.0929 23.9325 56.0675 10.9071 40 10.9071C23.9325 10.9071 10.9071 23.9325 10.9071 40Z"
                        fill="#4E9FCA" />
                    <circle cx="40" cy="40" r="29" fill="#052F5F" />
                    <g clip-path="url(#clip0_61_1679)">
                        <path
                            d="M31.6663 51.6667C33.5073 51.6667 34.9997 50.1743 34.9997 48.3333C34.9997 46.4924 33.5073 45 31.6663 45C29.8254 45 28.333 46.4924 28.333 48.3333C28.333 50.1743 29.8254 51.6667 31.6663 51.6667Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M48.3333 51.6667C50.1743 51.6667 51.6667 50.1743 51.6667 48.3333C51.6667 46.4924 50.1743 45 48.3333 45C46.4924 45 45 46.4924 45 48.3333C45 50.1743 46.4924 51.6667 48.3333 51.6667Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M28.333 48.3335H26.9997C25.8951 48.3335 24.9997 47.4381 24.9997 46.3335V41.6668M23.333 28.3335H39.6663C40.7709 28.3335 41.6663 29.2289 41.6663 30.3335V48.3335M34.9997 48.3335H44.9997M51.6663 48.3335H52.9997C54.1042 48.3335 54.9997 47.4381 54.9997 46.3335V38.3335M54.9997 38.3335H41.6663M54.9997 38.3335L50.5823 30.9712C50.2208 30.3688 49.5698 30.0002 48.8673 30.0002H41.6663"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M28 48H26.6667C25.5621 48 24.6667 47.1046 24.6667 46V41.3333M23 28H39.3333C40.4379 28 41.3333 28.8954 41.3333 30V48M35 48H44.6667M52 48H52.6667C53.7712 48 54.6667 47.1046 54.6667 46V38M54.6667 38H41.3333M54.6667 38L50.2493 30.6377C49.8878 30.0353 49.2368 29.6667 48.5343 29.6667H41.3333"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25 31.8182H31.6667" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M21.8184 35.4546H28.485" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M25 39.0909H31.6667" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_61_1679">
                            <rect width="40" height="40" fill="white" transform="translate(20 20)" />
                        </clipPath>
                    </defs>
                </svg>
                <h1 class="font-poppins text-xl text-black font-semibold mt-6 mb-2">
                    Free and Fast Delivery
                </h1>
                <h1 class="font-poppins text-sm text-black mb-2">
                    Orders will arrive within 1-6 hours
                </h1>
            </div>
        </div>
        <div class="flex gap-4 items-center mb-6 mt-24">
            <div class="w-5 h-10 bg-[#4E9FCA] rounded-[5px]"></div>
            <h1 class="font-poppins text-base text-[#4E9FCA] font-semibold">
                Testimonials
            </h1>
        </div>
        <h1 class="font-poppins text-[36px] text-black font-semibold mb-[30px]">
            What Our Customer are Saying
        </h1>
        <div class="flex gap-[60px] overflow-x-hidden testimoni">
            <div class="flex-shrink-0">
                <section class="bg-no-repeat bg-center bg-cover  w-[350px] h-[350px] rounded-[25px] py-14"
                    style="background-image: url('../assets/images/testimoni-bg1.svg');">
                    <div class="w-full items-center flex justify-center">
                        <div class="">
                            <div class="flex justify-center">
                                <img src="../assets/images/ava1.svg" alt="">
                            </div>
                            <h1 class=" text-white text-xl text-center font-semibold font-poppins mb-[30px]">Robert Fox
                            </h1>
                            <h1 class=" text-white text-base text-center font-medium font-poppins px-14">Saya sangat
                                puas dengan pelayanan dan kecepatan pengiriman produk pesanan</h1>
                        </div>
                    </div>
                </section>
            </div>
            <div class="flex-shrink-0">
                <section class="bg-no-repeat bg-center bg-cover  w-[350px] h-[350px] rounded-[25px] py-14"
                    style="background-image: url('../assets/images/testimoni-bg2.svg');">
                    <div class="w-full items-center flex justify-center">
                        <div class="">
                            <div class="flex justify-center">
                                <img src="../assets/images/ava2.svg" alt="">
                            </div>
                            <h1 class=" text-white text-xl text-center font-semibold font-poppins mb-[30px]">Jacob
                                Jones
                            </h1>
                            <h1 class=" text-white text-base text-center font-medium font-poppins px-14">Apoteker ramah
                                dan selalu siap memberikan semua informasi yang diperlukan</h1>
                        </div>
                    </div>
                </section>
            </div>
            <div class="flex-shrink-0">
                <section class="bg-no-repeat bg-center bg-cover  w-[350px] h-[350px] rounded-[25px] py-14"
                    style="background-image: url('../assets/images/testimoni-bg1.svg');">
                    <div class="w-full items-center flex justify-center">
                        <div class="">
                            <div class="flex justify-center">
                                <img src="../assets/images/ava3.svg" alt="">
                            </div>
                            <h1 class=" text-white text-xl text-center font-semibold font-poppins mb-[30px]">Guy
                                Hawkins
                            </h1>
                            <h1 class=" text-white text-base text-center font-medium font-poppins px-14">Saya tidak
                                perlu keluar rumah lagi untuk membeli obat. Pengalaman yang menyenangkan belanja di
                                website Apotek Tugu Batu!</h1>
                        </div>
                    </div>
                </section>
            </div>
            <div class="flex-shrink-0">
                <section class="bg-no-repeat bg-center bg-cover  w-[350px] h-[350px] rounded-[25px] py-14"
                    style="background-image: url('../assets/images/testimoni-bg2.svg');">
                    <div class="w-full items-center flex justify-center">
                        <div class="">
                            <div class="flex justify-center">
                                <img src="../assets/images/ava1.svg" alt="">
                            </div>
                            <h1 class=" text-white text-xl text-center font-semibold font-poppins mb-[30px]">Robert Fox
                            </h1>
                            <h1 class=" text-white text-base text-center font-medium font-poppins px-14">Saya sangat
                                puas dengan pelayanan dan kecepatan pengiriman produk pesanan</h1>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Navigation buttons -->
        </div>
        <div class="flex justify-center gap-5 mt-10">
            <button id="prevButton2" class="slide-button">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g transform="rotate(180 25 25)">
                        <circle cx="25" cy="25" r="25" fill="#4E9FCA" />
                        <rect width="32" height="32" transform="translate(9 9)" fill="#4E9FCA" />
                        <path d="M14 25H36" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M27 16L36 25L27 34" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg></button>
            <button id="nextButton2" class="slide-button"><svg width="50" height="50" viewBox="0 0 50 50"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#4E9FCA" />
                    <rect width="32" height="32" transform="translate(9 9)" fill="#4E9FCA" />
                    <path d="M14 25H36" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M27 16L36 25L27 34" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="flex gap-4 items-center mb-6 mt-24">
            <div class="w-5 h-10 bg-[#4E9FCA] rounded-[5px]"></div>
            <h1 class="font-poppins text-base text-[#4E9FCA] font-semibold">
                Health Article
            </h1>
        </div>
        <h1 class="font-poppins text-[36px] text-black font-semibold mb-[30px]">
            Article Special for You
        </h1>
        <div class="flex gap-[60px] overflow-x-hidden article">
            <div class="flex-shrink-0">
                <div class="w-[350px] bg-white border border-gray-200 rounded-[25px] shadow shadow-black/25 h-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="../assets/images/article1.svg" alt="" />
                    </a>
                    <div class="p-5">
                        <div class="px-4">
                            <h5 class="mb-6 text-xl font-semibold tracking-tight text-black text-center font-poppins">
                                Kolesterol Tinggi? Jaga dengan Suplemen ini!</h5>
                        </div>
                        <p class="mb-3 font-normal text-black text-base font-poppins">Banyaknya perayaan di awal tahun membuat kita
                            jadi banyak mengonsumsi makanan berlebihan bersama teman dan keluarga yang berpotensi
                            meningkatkan kadar...</p>
                        <div class="flex justify-center">
                            <a href=""
                                class="mt-6 rounded-full py-2 px-4 border border-[#4E9FCA] text-[#4E9FCA] font-poppins font-medium">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="w-[350px] bg-white border border-gray-200 rounded-[25px] shadow shadow-black/25 h-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="../assets/images/article2.svg" alt="" />
                    </a>
                    <div class="p-5">
                        <div class="px-4">
                            <h5 class="mb-6 text-xl font-semibold tracking-tight text-black text-center font-poppins">
                                Siapa Saja yang Rentan Terserang Osteoporosis?</h5>
                        </div>
                        <p class="mb-3 font-normal text-black text-base font-poppins">Osteoporosis adalah masalah tulang yang paling
                            diwaspadai oleh orang lanjut usia. Osteoporosis mampu membuat tulang menjadi lemah dan
                            rapuh, sehingga membuat postur...</p>
                        <div class="flex justify-center">
                            <a href=""
                                class="mt-6 rounded-full py-2 px-4 border border-[#4E9FCA] text-[#4E9FCA] font-poppins font-medium">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="w-[350px] bg-white border border-gray-200 rounded-[25px] shadow shadow-black/25 h-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="../assets/images/article3.svg" alt="" />
                    </a>
                    <div class="p-5">
                        <div class="px-4">
                            <h5 class="mb-6 text-xl font-semibold tracking-tight text-black text-center font-poppins">
                                Beauty and The Best, Tampil Cantik Luar Dalam</h5>
                        </div>
                        <p class="mb-3 font-normal text-black text-base font-poppins">Bulan Suci Ramadhan tinggal menghitung hari.
                            Tentu banyak persiapan yang sudah dilakukan, bukan? Dari mulai cek jadwal imsak dan berbuka
                            hingga hitung...</p>
                        <div class="flex justify-center">
                            <a href=""
                                class="mt-6 rounded-full py-2 px-4 border border-[#4E9FCA] text-[#4E9FCA] font-poppins font-medium">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="w-[350px] bg-white border border-gray-200 rounded-[25px] shadow shadow-black/25 h-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="../assets/images/article1.svg" alt="" />
                    </a>
                    <div class="p-5">
                        <div class="px-4">
                            <h5 class="mb-6 text-xl font-semibold tracking-tight text-black text-center font-poppins">
                                Kolesterol Tinggi? Jaga dengan Suplemen ini!</h5>
                        </div>
                        <p class="mb-3 font-normal text-black text-base font-poppins">Banyaknya perayaan di awal tahun membuat kita
                            jadi banyak mengonsumsi makanan berlebihan bersama teman dan keluarga yang berpotensi
                            meningkatkan kadar...</p>
                        <div class="flex justify-center">
                            <a href=""
                                class="mt-6 rounded-full py-2 px-4 border border-[#4E9FCA] text-[#4E9FCA] font-poppins font-medium">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
        </div>
        <div class="flex justify-center gap-5 mt-10">
            <button id="prevButton3" class="slide-button">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g transform="rotate(180 25 25)">
                        <circle cx="25" cy="25" r="25" fill="#4E9FCA" />
                        <rect width="32" height="32" transform="translate(9 9)" fill="#4E9FCA" />
                        <path d="M14 25H36" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M27 16L36 25L27 34" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg></button>
            <button id="nextButton3" class="slide-button"><svg width="50" height="50" viewBox="0 0 50 50"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#4E9FCA" />
                    <rect width="32" height="32" transform="translate(9 9)" fill="#4E9FCA" />
                    <path d="M14 25H36" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M27 16L36 25L27 34" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <section class="bg-no-repeat bg-center bg-cover py-[66px] rounded-[25px] mt-[100px]"
            style="background-image: url('../assets/images/bg.svg');">
           <h1 class="text-[28px] text-white font-semibold text-center font-poppins mb-6">Ingin konsultasi dengan apoteker?</h1>
           <div class="justify-center flex">
               <button class="bg-[#052F5F] rounded-full text-lg text-white font-medium py-3 px-9 text-center font-poppins">Klik untuk hubungi via whatsapp</button
           </div>
        </section>
    </div>
    <livewire:slider.product />
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

</html>
