<?php
$data["judul"] = "Class";
echo view("templates/head", $data);
?>

<!-- untuk mengecek jika waktu yang tepat untuk presensi -->
<?php
date_default_timezone_set('Asia/Jakarta'); // Set timezone
$currentTime = new DateTime();
// dd($currentTime);
$startTime = new DateTime($jam_mulai . ".00");
$endTime = new DateTime($jam_berakhir . ".00");
$diLuarJam = ($currentTime < $startTime || $currentTime > $endTime);

$hasil = $ModelKehadiran->where('kode_kelas', $kode_kelas)
    ->where('id_murid', session()->get('id'))
    ->findAll();

if ($hasil == null || $hasil == 0 || !$hasil) {
    $isPresensi = false;
}

foreach ($hasil as $kehadiran) {
    $created_at = $kehadiran['created_at'];
    $created_at = new DateTime($created_at);

    $id_user = session()->get('id');

    $isPresensi = ($kode_kelas == $kehadiran['kode_kelas'] && $id_user == $kehadiran['id_murid'] && $currentTime->format('d-l') == $created_at->format('d-l'));

    if ($isPresensi) break;
}



// dd($isPresensi);


// dd($created_at->format('d-l'))
// dd($hasil);

?>

<?php

?>


<body>
    <?php echo view("templates/nav"); ?>
    <div class="ml-80 p-8">
        <header class="class-detail grid min-h-80 grid-cols-4 grid-rows-2 gap-8">
            <form class="presensi row-span-2 flex flex-col gap-2" action="<?php echo base_url('presensi/') . $kode_kelas .  '/' . $jam_mulai . '/' . $jam_berakhir ?>" method="POST">
                <h1 class="matpel flex justify-between"><?php echo $matpel ?><i class="ri-git-repository-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p class="hari"><?php echo $hari ?></p>
                <p class="jam"><?php echo $jam_mulai . ".00 - " . $jam_berakhir . ".00" ?></p>
                <?php
                if ($diLuarJam) {
                    echo '<button class="mt-auto bg-red-500 text-slate-100 p-2 rounded-md border-slate-500" disabled><i class="ri-clipboard-fill" ></i>Pelajaran Telah Berakhir</button>';
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
                <div class="list-tugas flex flex-col h-full">
                    <p class="block text-center">Tidak ada tugas</p>
                </div>
            </div>
            <div class="guru">
                <h1 class="flex justify-between"><?php echo $guru ?><i class="ri-id-card-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p>Guru</p>
            </div>
            <div class="total-tugas">
                <h1 class="flex justify-between"> - <i class="ri-task-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400 text-2xl"></i></h1>
                <p>Total Tugas</p>
            </div>

        </header>
        <main class=" mt-8">




            <h1 class="my-2 text-xl font-bold">Tabel Kehadiran</h1>
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
                        foreach ($hasil as $kehadiran) {
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

                        <?php if (!$hasil && $currentTime->format('l') == $hari) { ?>
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