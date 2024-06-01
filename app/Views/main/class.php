<?php
$data['judul'] = 'Class';
echo view('templates/head', $data)
?>


<body class="">
    <?php
    echo view('templates/nav')
    ?>
    <main class="ml-80 h-min-[100vh] p-8">
        <h1 class="font-semibold text-xl text-[#101828] mb-4 ">Classes</h1>

        <!-- Class Container -->
        <div class="class-container  grid lg:grid-cols-4 gap-x-8 gap-y-14 grid-cols-1 md:grid-cols-2">
            <div class="class border-2 border-t-0 min-h-80 p-6 rounded-lg grid grid-cols-2  text-gray-400 shadow-sm ">
                <h2 class="text-2xl mb-4 col-span-2 text-slate-800 font-[500]">Matematika</h2>
                <p class="col-span-2 "><i class="ri-user-fill mr-2"></i>Spd. Hitam</p>
                <p class=""><i class="ri-calendar-schedule-fill mr-2"></i>Rabu</p>
                <p class=""><i class="ri-timer-fill mr-2"></i>3 Jam</p>
                <button class="col-span-2 h-10 border-2 px-2 rounded-xl bg-indigo-500 font-semibold text-white text-sm transition-colors duration-200 hover:bg-indigo-700">Masuk</button>
            </div>
            
            <?php 
                for($i = 0; $i<10 ;$i++){
                    echo "<div class='class border-2 border-t-0  p-6 rounded-lg grid grid-cols-2 text-gray-400 shadow-sm min-h-80'>
                    <h2 class='text-2xl mb-4 col-span-2 text-slate-800 font-semibold'>Matematika</h2>
                    <p class='col-span-2 '><i class='ri-user-fill mr-2'></i>Spd. Hitam</p>
                    <p class=''><i class='ri-calendar-schedule-fill mr-2'></i>Rabu</p>
                    <p class=''><i class='ri-timer-fill mr-2'></i>3 Jam</p>
                    <button class='col-span-2 h-10 border-2 px-2 rounded-xl bg-indigo-500 font-semibold text-white text-sm transition-colors duration-200 hover:bg-indigo-700'>Masuk</button>
                </div>";
                }
            ?>
            

        </div>
    </main>

</body>

</html>