<nav class="fixed h-full w-80 flex flex-col justify-start border-r border-b">
    <div class="judul my-4">
        <h1 class="font-bold text-center text-2xl text-[#4f4f4f]"><span class="text-[#0BA5EC]">E</span>-Learning</h1>
        <h2 class="text-center font-bold text-[#0BA5EC] ">Admin</h2>

    </div>
    <ul class="list-none flex flex-col gap-4 p-4">
        <li class="group">
            <a href="<?php echo base_url('profile') ?>" class="nav-link group-hover:text-white transition-colors duration-100">
                <i class="fa-xl fa-solid fa-user group-hover:text-white transition-colors duration-100"></i>
                <p>Profile</p>
            </a>
        </li>
        <li class="group">
            <a href="<?php echo base_url('pengumuman') ?>" class="nav-link group-hover:text-white transition-colors duration-100 ">
                <i class="ri-news-line group-hover:text-white transition-colors duration-100 text-2xl h-6 aspect-square flex text-[#98a2b3] items-center"></i>
                <p>Classes Data</p>
            </a>
        </li>
        <li class="group">
            <a href="<?php echo base_url('classes') ?>" class="nav-link group-hover:text-white transition-colors duration-100">
                <i class="fa-xl fa-solid fa-book group-hover:text-white transition-colors duration-100"></i>
                <p>Tasks Data</p>
                <i class="fa-xl fa-solid fa-angle-right group-hover:text-white transition-colors duration-100"></i>
            </a>
        </li>
        <li class="group">
            <a href="<?php echo base_url('task') ?>" class="nav-link group-hover:text-white transition-colors duration-100">
                <i class="fa-xl fa-solid fa-list-check group-hover:text-white transition-colors duration-100"></i>
                <p>User Data</p>
            </a>
        </li>

    </ul>

    <!-- Footer -->
    <div class="footer mt-auto mb-32 flex flex-col ">
        <!-- Settings Button -->
        <ul>
            <li class="group">
                <a href="#" class="flex justify-start gap-2 w-full font-medium text-gray-700 align-middle hover:bg-gray-300 p-6 transition-colors duration-100 cursor-default">
                    <i class="ri-group-line text-gray-500 text-2xl" aria-hidden="true"></i>
                    <p class="text-base self-center">Help</p>
                </a>


            </li>
            <li>
                <a href="<?php echo base_url('logout') ?>" class="flex justify-start gap-2 w-full font-medium text-gray-700 align-middle hover:bg-gray-300 p-6 transition-colors duration-100 cursor-pointer">
                    <i class="ri-logout-circle-line text-gray-500 text-2xl" aria-hidden="true"></i>
                    <p class="text-base self-center">Logout</p>
                </a>
            </li>
        </ul>



        <!-- Profile section  -->
        <div class="profile flex justify-between pt-4 px-4 border-t h-16 border-[#EAECF0]">
            <img src="<?php echo base_url('img/profile/') . session()->get('profilePict') ?>" alt="pp" class=" aspect-square h-full rounded-full object-cover object-center">
            <div class="username-email ml-2 mr-auto">
                <p class="font-medium"><?php echo session()->get('nama') ?></p>

                <p class="font-light text-gray-500"><?php echo session()->get('email') ?></p>
            </div>
            <!-- <a href="logout" class="inline-block">
                <i class="fa fa-sign-out text-gray-500 fa-lg" aria-hidden="true"></i>

            </a> -->
        </div>
    </div>
</nav>