<?php
$data["judul"] = "Class";
echo view("templates/head", $data);
?>


<body class="">
    

    <!-- MODAL START -->
    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Ubah Data
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="my-4 flex flex-col gap-4" method="POST" action="profile/simpan">
                    <div class="relative mx-4">
                        <input class=" input-nama block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500 " type="" id="nama" placeholder="" required required name="nama" value="<?php echo session()->get('nama') ?>">
                        <label for="nama" class="label-nama absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Nama</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="nama">
                            <i class="ri-user-line text-3xl"></i>
                        </label>

                    </div>
                    <div class="relative mx-4">
                        <input class=" input-class block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="class" placeholder="" required name="class" value="<?php echo session()->get('class') ?>">
                        <label for="class" class="label-class absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Kelas</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="class">
                            <i class="ri-graduation-cap-line text-3xl"></i>
                        </label>
                    </div>
                    <div class="relative mx-4">
                        <input class=" input-parent block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="parent" placeholder="" required name="parent" value="<?php echo session()->get('parent') ?>">
                        <label for="parent" class="label-parent absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Parent</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="parent">
                            <i class="ri-group-line text-3xl"></i>
                        </label>
                    </div>
                    <div class="relative mx-4">
                        <input class=" input-address block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="address" placeholder="" required name="address" value="<?php echo session()->get('address') ?>">
                        <label for="address" class="label-address absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Address</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="address">
                            <i class="ri-map-pin-line text-3xl"></i>
                        </label>
                    </div>
                    <div class="relative mx-4">
                        <input class=" input-phone block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="phone" placeholder="" required name="phone" value="<?php echo session()->get('phone') ?>">
                        <label for="phone" class="label-phone absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Phone</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="phone">
                            <i class="ri-phone-line text-3xl"></i>
                        </label>
                    </div>
                    <div class="relative mx-4">
                        <input class=" input-email block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="email" placeholder="" required name="email" value="<?php echo session()->get('email') ?>">
                        <label for="email" class="label-email absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Email</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="email">
                            <i class="ri-mail-line text-3xl"></i>
                        </label>
                    </div>

                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-red-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-red-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- MAIN START -->
    <?php echo view("templates/nav"); ?>
    <main class="ml-80 h-min-[100vh] p-8">
        <h1 class="font-semibold text-gray-500 mb-4">Your profile</h1>
        <div class="profile w-full min-h-[450px] rounded-lg relative border shadow-md rounded-t-3xl">
            <div class="profile-cover bg-[#0ba5ec] h-36 -z-20 rounded-t-3xl relative "></div>
            <div class="profile-cover bg-[#5B61FB] h-36 w-1/6 -z-10 absolute top-20 right-96 rounded-t-3xl "></div>
            <div class="profile-cover bg-[#FB7D5B] h-36 w-1/6 -z-10 absolute top-10 right-60 rounded-t-3xl "></div>
            <div class="profile-image h-40 w-40 bg-cover border-8 border-white bg-center rounded-full absolute top-14 left-14" style="background-image: url('img/imcooked.png');"></div>
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class=" bg-yellow-300 aspect-square w-12 absolute top-8 right-8 rounded-full shadow-lg"><i class="ri-pencil-fill text-2xl text-slate-700"></i></button>
            <div class="profile-content mx-10 pt-20 flex flex-col gap-8 z-50 bg-white">
                <div class="profile-text grid gap-4 w-1/4">
                    <h1 class="font-bold text-4xl text-[#303972] col-span-2"><?php echo session()->get('nama') ?></h1>
                    <p class="font-light text-gray-500 text-sm">Kelas: <span class="font-bold"><?php echo session()->get('class') ?></span></p>
                    <!-- <p class="font-light text-gray-500 text-sm">NIM: <span class="font-bold">15220401</span></p>
                    <p class="font-light text-gray-500 text-sm">Semester: <span class="font-bold">4</span></p>
                    <p class="font-light text-gray-500 text-sm">Total SKS: <span class="font-bold">30</span></p> -->
                </div>
                <div class="profile-contact flex gap-20">
                    <div class="parents grid gap-y-4 gap-x-4">
                        <h2 class="col-span-2">Parents:</h2>
                        <div class="parents-logo bg-[#FB7D5B] h-8 w-8 flex justify-center rounded-full items-center ">
                            <i class="ri-group-line text-xl text-white"></i>
                        </div>
                        <p class="text-base flex justify-center items-center font-bold"><?php echo session()->get('parent') ?></p>
                    </div>
                    <div class="address grid gap-y-4 gap-x-4">
                        <h2 class="col-span-2">Address:</h2>
                        <div class="address-logo bg-[#FB7D5B] h-8 w-8 flex justify-center rounded-full items-center ">
                            <i class="ri-map-pin-line text-xl text-white"></i>
                        </div>
                        <p class="text-base flex justify-center items-center font-bold"><?php echo session()->get('address') ?></p>
                    </div>
                    <div class="phone grid gap-y-4 gap-x-4">
                        <h2 class="col-span-2">Phone:</h2>
                        <div class="phone-logo bg-[#FB7D5B] h-8 w-8 flex justify-center rounded-full items-center ">
                            <i class="ri-phone-line text-xl text-white"></i>
                        </div>
                        <p class="text-base flex justify-center items-center font-bold"><?php echo session()->get('phone') ?></p>
                    </div>
                    <div class="email grid gap-y-4 gap-x-4">
                        <h2 class="col-span-2">Email:</h2>
                        <div class="email-logo bg-[#FB7D5B] h-8 w-8 flex justify-center rounded-full items-center ">
                            <i class="ri-mail-line text-xl text-white"></i>
                        </div>
                        <p class="text-base flex justify-center items-center font-bold"><?php echo session()->get('email') ?></p>
                    </div>
                </div>
            </div>
        </div>


    </main>

</body>

</html>