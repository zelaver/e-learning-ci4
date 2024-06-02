<?php
$data["judul"] = "Class";
echo view("templates/head", $data);
?>

<body class="flex items-center justify-center h-[100vh] bg-[#f4f7fa]">

    <div class="container flex justify-between items-center h-[50vh]">
        <img src="img/login/side-img.png" class="hidden lg:block md:block md:size-4/5 lg:size-max object-contain object-center" alt="">
        <div class="login-card w-full lg:w-1/2 self-stretch bg-white p-14 rounded-md flex flex-col gap-2">
            <h2 class="font-poppins font-medium text-2xl">Login</h2>
            <h1 class="font-poppins font-extrabold text-3xl text-blue-600">E-learning</h1>
            <form class="my-4 flex flex-col gap-4" action="">
                <div class="input-email relative">
                    <input class="block w-full outline-none h-16 rounded-lg pl-14 bg-gray-300 border" type="email" id="email" placeholder="Email">
                    <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="email">
                        <i class="ri-mail-fill text-3xl"></i>
                    </label>
                </div>
                <div class="input-password relative">
                    <input class="block w-full outline-none h-16 rounded-lg pl-14 bg-gray-300 border " type="password" id="password" placeholder="Password">
                    <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm " for="password">
                        <i class="ri-key-fill text-3xl"></i>
                    </label>
                </div>
                <div class="remember-check ml-2">
                    <input type="checkbox" name="" id="remember">
                    <label class="font-normal" for="remember" >Remember Me</label>
                </div>
                <button class="bg-blue-600 p-4 rounded-lg text-white">Login</button>
                <p class="text-center">Gak punya akun? <a href="#" class="text-blue-600">Resister disini!</a></p>
            </form>
        </div>
    </div>
</body>

</html>