<?php
$data["judul"] = "Classes";
echo view("templates/head", $data);
?>


<body class="">
    <?php echo view("templates/nav"); ?>
    <main class="ml-80 h-min-[100vh] p-8">
        <h1 class="font-semibold text-gray-500 my-4">Class</h1>


        <!-- Class Container -->
        <div class="class-container grid lg:grid-cols-4 gap-x-8 gap-y-14 grid-cols-1 md:grid-cols-2">
            <!-- <div class="class border-2 border-t-0 min-h-80 p-6 rounded-lg grid grid-cols-2  text-gray-400 shadow-sm ">
                <h2 class=" mb-4 col-span-2 text-slate-800 font-[500] text-2xl">Matematika</h2>
                <p class="col-span-2 "><i class="ri-user-fill mr-2"></i>Spd. Hitam</p>
                <p class=""><i class="ri-calendar-schedule-fill mr-2"></i>Rabu</p>
                <p class=""><i class="ri-timer-fill mr-2"></i>3 Jam</p>
                <button class="col-span-2 h-10 border-2 px-2 rounded-xl bg-indigo-500 font-semibold text-white text-sm transition-colors duration-200 hover:bg-indigo-700">Masuk</button>
            </div> -->



            <?php
            $classes = json_decode(session()->get('classes'));
            // dd($classes);
            // dd($classes);
            foreach ($classes as $class) {
                $class_info = $ModelClass->where('kode_kelas', $class)->first();
                // echo dd($class_info);
                $kode = $class_info['kode_kelas'];
                $nama = $class_info['matpel'];
                $hari = $class_info['hari'];
                $jam_mulai  = $class_info['jam_mulai'];
                $jam_berakhir  = $class_info['jam_berakhir'];
                $guru = $class_info['guru'];

                

                echo
                "
                <form action='classes/" . $kode . "' method='GET'>
                    <div class='class border-2 border-t-0  p-6 rounded-lg grid grid-cols-2 text-gray-400 shadow-s min-h-80'>
                        <h2 class='text-2xl mb-4 col-span-2 text-slate-800 font-semibold'>" . $nama . "</h2>
                        <p class='col-span-2 '><i class='ri-user-fill mr-2'></i>" . $guru . "</p>
                        <p class=''><i class='ri-calendar-schedule-fill mr-2'></i>" . $hari . "</p>
                        <p class=''><i class='ri-timer-fill mr-2'></i>" . $jam_mulai . ".00 - ". $jam_berakhir. ".00" . "</p>
                        <button class='col-span-2 h-10 border-2 px-2 rounded-xl bg-indigo-500 font-semibold text-white text-sm transition-colors duration-200 hover:bg-indigo-700'>Masuk</button>
                    </div>
                </form>
                ";
            }

            ?>

        </div>
    </main>

</body>

</html>