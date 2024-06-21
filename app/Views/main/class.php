<?php
$data["judul"] = "Class";
echo view("templates/head", $data);

// dd($isPresensi);
?>

<body>
    <?php echo view("templates/nav"); ?>
    <div class="ml-80 p-8">
        <!-- <a href="https://cdn.discordapp.com/attachments/1114426119324704869/1253335776956252210/Modul_Web_Programming_II_682-UBSI_upd_Maret_2024.pdf?ex=66757b67&is=667429e7&hm=2260e53fc349cba4ede5baf00e0aac9d5e951a0525e3d4625d6b72047e6c165e&">ini link download</a> -->
        <!-- <a href="<?php echo base_url('downloadMateri/') . 'modul-web-2.pdf' ?>" class="block">link download file</a> -->
        <h1 class="my-2 text-xl font-bold text-gray-500">Presensi</h1>
        <header class="class-detail grid max-h-80 grid-cols-4 grid-rows-2 gap-8">
            <form class="presensi row-span-2 flex flex-col gap-2" <?php echo (!$isPresensi && !$diLuarJam && !$diLuarHari) ? 'action="' . base_url('presensi/') . $kode_kelas . '"' . 'method="POST"' : '' ?>>
                <h1 class="matpel flex justify-between"><?php echo $matpel ?><i class="ri-git-repository-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p class="hari"><?php echo $hari ?></p>
                <p class="jam"><?php echo $jam_mulai . ".00 - " . $jam_berakhir . ".00" ?></p>
                <?php
                if ($diLuarHari) {
                    echo '<button class="mt-auto bg-red-500 text-slate-100 p-2 rounded-md border-slate-500" disabled><i class="ri-clipboard-fill" ></i>Tidak ada Jam Pelajaran</button>';
                } elseif ($diLuarJam) {
                    echo '<button class="mt-auto bg-red-500 text-slate-100 p-2 rounded-md border-slate-500" disabled>Pelajaran Telah Berakhir</button>';
                } elseif ($isPresensi) {
                    echo '<button class="mt-auto bg-green-500 text-slate-100 p-2 rounded-md border-slate-500" disabled>Anda Sudah Absen</button>';
                } else {
                    echo '<button class="mt-auto bg-blue-500 text-slate-100 p-2 rounded-md border-slate-500" type="submit"><i class="ri-clipboard-fill" ></i>Presensi</button>';
                }
                ?>

            </form>
            <div class="kode-kelas">
                <h1 class="flex justify-between"><?php echo $kode_kelas ?><i class="ri-codepen-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p>Kode Kelas</p>
            </div>
            <div class="total-pertemuan">
                <h1 class="flex justify-between"><?php echo $total_pertemuan ?><i class="ri-bar-chart-2-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p>total Pertemuan</p>
            </div>
            <div class="tugas row-span-2 flex flex-col gap-4">
                <h1 class="flex justify-between w-full content-stretch ">Tugas<i class="ri-list-check-3 bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <div class="list-tugas flex flex-col overflow-y-auto">
                    <?php if ($tasks) {
                        foreach ($tasks as $task) {
                            $id_tugas = $task['id_tugas'];
                            $judul_tugas = $task['judul_tugas'];
                            $link_tugas = $task['link_tugas'];
                            if (!$link_tugas) {
                    ?>
                                <p >
                                    <a href="<?php echo base_url('task/') . $id_tugas ?>"> - <?php echo $judul_tugas ?></a>
                                </p>
                        <?php }
                        }
                    } else { ?>
                        <p class="block text-center">Tidak ada tugas</p>

                    <?php } ?>

                </div>
            </div>
            <div class="guru">
                <h1 class="flex justify-between"><?php echo $guru ?><i class="ri-id-card-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p>Guru</p>
            </div>
            <div class="total-tugas">
                <h1 class="flex justify-between"> <?php echo count($tasks) ?> <i class="ri-task-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400 text-2xl"></i></h1>
                <p>Total Tugas</p>
            </div>

        </header>

        <h1 class="my-4 text-xl font-bold text-gray-500">File</h1>
        <section class="my-4 grid grid-cols-4 gap-6">
            <a href="#" class="flex items-center bg-gray-100 justify-between px-6 py-4 rounded-lg">
                <div class="circle w-2 h-2 bg-blue-600 rounded-full"></div>
                <div class="text mr-auto ml-8">
                    <h2 class="font-bold text-lg">LKS</h2>
                    <p class="text-sm text-gray-400">Semester Ganjil</p>
                </div>
                <i class="ri-download-line text-lg"></i>
            </a>
            <a href="#" class="flex items-center bg-gray-100 justify-between px-6 py-4 rounded-lg">
                <div class="circle w-2 h-2 bg-blue-600 rounded-full"></div>
                <div class="text mr-auto ml-8">
                    <h2 class="font-bold text-lg">LKS</h2>
                    <p class="text-sm text-gray-400">Semester Ganjil</p>
                </div>
                <i class="ri-download-line text-lg"></i>
            </a>
            <a href="#" class="flex items-center bg-gray-100 justify-between px-6 py-4 rounded-lg">
                <div class="circle w-2 h-2 bg-blue-600 rounded-full"></div>
                <div class="text mr-auto ml-8">
                    <h2 class="font-bold text-lg">LKS</h2>
                    <p class="text-sm text-gray-400">Semester Ganjil</p>
                </div>
                <i class="ri-download-line text-lg"></i>
            </a>
            <a href="#" class="flex items-center bg-gray-100 justify-between px-6 py-4 rounded-lg">
                <div class="circle w-2 h-2 bg-blue-600 rounded-full"></div>
                <div class="text mr-auto ml-8">
                    <h2 class="font-bold text-lg">LKS</h2>
                    <p class="text-sm text-gray-400">Semester Ganjil</p>
                </div>
                <i class="ri-download-line text-lg"></i>
            </a>
            
        </section>
        <main class=" mt-8">
            <h1 class="my-2 text-xl font-bold text-gray-500">Tabel Kehadiran</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 border">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guru
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index = 0;
                        foreach ($listKehadiran as $kehadiran) {
                            $index++;
                        ?>
                            <tr class="odd:bg-white  even:bg-gray-100 ">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <?php echo $index ?>.
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo session()->get('nama') ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $matpel ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $guru ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php
                                    $tanggal = $kehadiran['created_at'];
                                    $tanggal = new DateTime($tanggal);
                                    $tanggal = $tanggal->format('l, d-m-y');
                                    echo $tanggal;
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="bg-green-500 inline text-white p-2 rounded-md">Hadir</div>
                                </td>
                            </tr>
                        <?php } ?>

                        <?php if (!$isPresensi && !$diLuarHari) { ?>
                            <tr class="odd:bg-white  even:bg-gray-100 ">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <?php echo $index ?>.
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo session()->get('nama') ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $matpel ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $guru ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php
                                    $tanggal = new DateTime();
                                    $tanggal = $tanggal->format('l, d-m-y');
                                    echo $tanggal;
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="bg-red-500 inline text-white p-2 rounded-md">Tidak Hadir</div>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>


        </main>
    </div>

</body>

</html>