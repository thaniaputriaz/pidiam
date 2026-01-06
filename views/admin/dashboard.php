
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>
<body class="min-h-screen bg-background-light">
    <div class=" bg-blue-800 w-65 min-h-screen py-10 pl-4">
        <div class=" pl-7 flex gap-3 items-center mb-10">
            <img src="../../public/img/logo.png" alt="logo" class="w-10">
            <p class="font-bold text-white text-lg">PiDiAM</p>
        </div>
        <div class="flex ">
            <ul class="text-white list-none font-semibold  w-full">
                <li class="relative  w-full">
                    <a href="<?= BASE_URL ?>/admin/sambungan-baru" class="menu-items ">
                        <div class="mr-2.5">
                            <i class="fa-solid fa-circle-plus "></i>
                        </div>
                        <span>Sambungan Baru</span>
                    </a>
                </li>
                <li>
                    <a href="" class="menu-items">
                        <div class="mr-2.5">
                            <i class="fa-solid fa-house-circle-exclamation"></i>
                        </div>
                        <span>Pemasangan</span>
                    </a>
                </li>
                <li>
                    <a href="" class="menu-items">
                        <div class="mr-2.5">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                        <span>Pelanggan</span>
                    </a>
                </li>
                <li>
                    <a href="" class="menu-items">
                        <div class="mr-3.5">
                            <i class="fa-solid fa-receipt"></i>
                        </div>
                        <span>Tagihan</span>
                    </a>
                </li>
                <li>
                    <a href="" class="menu-items">
                        <div class="mr-2.5">
                            <i class="fa-solid fa-person-burst"></i>
                        </div>
                        <span>Keluhan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASE_URL ?>/admin" class="menu-items mt-40">
                        <div class="mr-2.5">
                            <i class="fa-solid fa-house-circle-exclamation"></i>
                        </div>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
    
    
</body>
</html>
