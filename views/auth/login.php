
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/output.css">
    
    
    
</head>
<body class="bg-linear-to-bl from-blue-700 to-purple-100">
    <?php if (isset($error)) : ?>
        <div class="absolute left-1/2 -translate-x-1/2 top-10" id="alert">
            <div class="bg-red-400 text-white rounded-2xl px-12 py-4">
                <h3>Username / Password anda salah</h3>
            </div>
        </div>
    <?php endif; ?>

    <div class="absolute bg-blue-400 w-160 h-100 left-4 top-10 rounded-full -z-10 blur-3xl"></div>
    <div class="absolute bg-blue-600/50 w-40 h-30 left-100 -bottom-5 rounded-full -z-10  blur-3xl"></div>
    <div class="absolute bg-blue-200/50 w-65 h-70 right-7 top-3 rounded-full -z-10  blur-2xl"></div>
    <div class="absolute bg-blue-500/40 w-100 h-100 rounded-full right-4 -z-10 blur-3xl"></div>
    
    <div class=" min-h-screen flex justify-center items-center">
        <div class="h-110 px-15 py-10 bg-white rounded-2xl shadow-md">
        <div class=" text-center py-3 mb-4 m-5">
            <h1 class="text-xl font-bold text-slate-800">Hello Admin</h1>
            <p class="text-slate-500 text-sm">login dulu yep</p>
        </div>
        
        <form action="<?= BASE_URL ?>/admin/login" method="post">
            <div class=" mb-2.5">
                <label for="username" class="ml-3 text-sm font-bold text-slate-900">Username </label> <br>
                <input type="text" id="username" name="username" required class=" w-90 h-10 rounded-2xl px-4 py-1 border-1 border-slate-500 text-sm shadow-sm" placeholder="Masukkan Username"> <br>
            </div>
            
            <label for="password" class="ml-3 text-sm font-bold text-slate-900">Password </label> <br>
            <input type="password" id="password" name="password" required class="w-90 h-10 rounded-2xl px-4 py-1 border-1 border-slate-500 text-sm" placeholder="Masukkan Password"> <br>
            <div class="flex justify-center mt-5">
                <div class=" px-6 py-2 bg-blue-800 rounded-xl">
                    <button name="login" class=" cursor-pointer text-white">Login</button>
                </div>
                
            </div>
            
        </form>
    </div>
    </div>
    
    
    
    
</body>
<script>
    setTimeout(() => {
        const alert = document.getElementById('alert');
        if(alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert,remove(), 700);
        }
    }, 3000);
</script>
</html>
