<?php
$data["judul"] = "Register";
echo view("templates/head", $data);
?>

<body class="flex items-center justify-center h-[100vh] bg-[#f4f7fa]">

    <div class="container flex justify-between items-center h-[50vh] xl:justify-center xl:h-fit ">
        <img src="img/login/side-img.png" class="hidden lg:block md:block md:size-4/5 lg:size-max object-contain object-center" alt="">
        <div class="login-card w-full lg:w-1/2  xl:h-full self-stretch bg-white p-14 rounded-md flex flex-col gap-2 xl:self-center">
            <h2 class="font-poppins font-medium text-2xl">Register</h2>
            <h1 class="font-poppins font-extrabold text-3xl"><span class="text-blue-600">E</span>-learning</h1>
            <?php $msg ?>
            <form class="my-4 flex flex-col gap-4" method="POST" action="register">
                <div class="relative">
                    <input class=" input-nama block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500 " type="nama" id="nama" placeholder="" name="nama">
                    <label for="nama" class="label-nama absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Nama</label>
                    <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="nama">
                        <i class="ri-user-line text-3xl"></i>
                    </label>
                </div>
                <div class="relative">
                    <input class=" input-email block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500 " type="email" id="email" placeholder="" name="email">
                    <label for="email" class="label-email absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Email</label>
                    <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="email">
                        <i class="ri-mail-line text-3xl"></i>
                    </label>
                </div>
                <div class="relative">
                    <input class=" input-password block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" type="password" id="password" placeholder="" name="password">
                    <label for="password" class="label-password absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Password</label>
                    <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="password">
                        <i class="ri-key-line text-3xl"></i>
                    </label>
                </div>
                <div class="relative">
                    <input class=" input-confirm-password block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" type="password" id="confirm-password" placeholder="" name="confirm-password">
                    <label for="confirm-password" class="label-confirm-password absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Confirm Password</label>
                    <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="confirm-password">
                        <i class="ri-key-2-line text-3xl"></i>
                    </label>
                </div>
                <!-- <div class="remember-check ml-2">
                    <input type="checkbox" name="" id="remember">
                    <label class="font-normal" for="remember">Remember Me</label>
                </div> -->
                <button class="bg-blue-600 p-4 rounded-lg text-white">Login</button>
                <p class="text-center">Sudah punya akun? <a href="login" class="text-blue-600">Login disini!</a></p>
            </form>
        </div>
    </div>
</body>

</html>