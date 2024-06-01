<?php
$data["judul"] = "Class";
echo view("templates/head", $data);
?>


<body class="">
    <?php echo view("templates/nav"); ?>
    <main class="ml-80 h-min-[100vh] p-8">
        <h1 class="font-semibold text-gray-500 mb-4">Your profile</h1>
        <div class="profile w-full min-h-[500px] rounded-lg relative border shadow-md rounded-t-3xl">
            <div class="profile-cover bg-[#0ba5ec] h-36 -z-20 rounded-t-3xl relative "></div>
            <div class="profile-cover bg-[#5B61FB] h-36 w-1/6 -z-10 absolute top-20 right-96 rounded-t-3xl "></div>
            <div class="profile-cover bg-[#FB7D5B] h-36 w-1/6 -z-10 absolute top-10 right-60 rounded-t-3xl "></div>
            <div class="profile-image h-40 w-40 bg-cover border-8 border-white bg-center rounded-full absolute top-14 left-14" style="background-image: url('img/imcooked.png');"></div>
            <div class="profile-content mx-10 pt-20 flex flex-col gap-8 z-50 bg-white">
                <div class="profile-text grid gap-4 w-1/4">
                    <h1 class="font-bold text-4xl text-[#303972] col-span-2">I'm Cooked</h1>
                    <p class="font-light text-gray-500 text-sm">Kelas: <span class="font-bold">15.4A.07</span></p>
                    <p class="font-light text-gray-500 text-sm">NIM: <span class="font-bold">15220401</span></p>
                    <p class="font-light text-gray-500 text-sm">Semester: <span class="font-bold">4</span></p>
                    <p class="font-light text-gray-500 text-sm">Total SKS: <span class="font-bold">30</span></p>
                </div>
                <div class="profile-contact flex gap-20">
                    <div class="parents grid gap-y-4 gap-x-4">
                        <h2 class="col-span-2">Parents:</h2>
                        <div class="parents-logo bg-[#FB7D5B] h-8 w-8 flex justify-center rounded-full items-center ">
                            <i class="ri-user-3-line text-xl text-white"></i>
                        </div>
                        <p class="text-base flex justify-center items-center font-bold">Jegal Sigma</p>
                    </div>
                    <div class="address grid gap-y-4 gap-x-4">
                        <h2 class="col-span-2">Address:</h2>
                        <div class="address-logo bg-[#FB7D5B] h-8 w-8 flex justify-center rounded-full items-center ">
                            <i class="ri-map-pin-line text-xl text-white"></i>
                        </div>
                        <p class="text-base flex justify-center items-center font-bold">Jakarta, Indonesia</p>
                    </div>
                    <div class="phone grid gap-y-4 gap-x-4">
                        <h2 class="col-span-2">Phone:</h2>
                        <div class="phone-logo bg-[#FB7D5B] h-8 w-8 flex justify-center rounded-full items-center ">
                            <i class="ri-phone-line text-xl text-white"></i>
                        </div>
                        <p class="text-base flex justify-center items-center font-bold">+62 7805-2392-2302</p>
                    </div>
                    <div class="email grid gap-y-4 gap-x-4">
                        <h2 class="col-span-2">Email:</h2>
                        <div class="email-logo bg-[#FB7D5B] h-8 w-8 flex justify-center rounded-full items-center ">
                            <i class="ri-mail-line text-xl text-white"></i>
                        </div>
                        <p class="text-base flex justify-center items-center font-bold">jegal@e-learning.com</p>
                    </div>
                </div>
            </div>
        </div>

    
    </main>

</body>

</html>