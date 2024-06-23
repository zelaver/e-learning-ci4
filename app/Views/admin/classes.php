<?php

use PHPUnit\Util\Json;

$data["judul"] = "Classes Data";
echo view("templates/head", $data);
// dd($katakunci)
?>

<body>
    <?php echo view("templates/nav_admin"); ?>

    <!-- MODAL START -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Tambah Data Kelas
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <?= form_open_multipart('ClassesDataSave'); ?>
                <div class="my-4 flex flex-col gap-4">
                    <input type="hidden" id="kode_kelas" name="kode_kelas">

                    <div class="relative mx-4">
                        <input class=" input-nama block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500 " type="" id="matpel" placeholder="" required name="matpel">
                        <label for="matpel" class="label-nama absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Mata Pelajaran</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="matpel">
                            <i class="ri-graduation-cap-line text-3xl"></i>
                        </label>

                    </div>
                    <div class="relative mx-4">
                        <select id="hari" name="hari" class="h-16 pl-14 input-class d bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " required>
                            <option selected hidden>Pilih Hari</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thrusday">Thrusday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                        <!-- <label for="hari" class="label-class absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Hari</label> -->
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="hari">
                            <i class="ri-calendar-2-fill text-3xl"></i>
                        </label>
                    </div>
                    <div class="relative mx-4">
                        <input class=" input-parent block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="jam_mulai" placeholder="" required name="jam_mulai">
                        <label for="jam_mulai" class="label-parent absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Jam Mulai</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="jam_mulai">
                            <i class="ri-time-line text-3xl"></i>
                        </label>
                    </div>
                    <div class="relative mx-4">
                        <input class=" input-address block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="jam_berakhir" placeholder="" required name="jam_berakhir">
                        <label for="jam_berakhir" class="label-address absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Jam Berakhir</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="jam_berakhir">
                            <i class="ri-time-fill text-3xl"></i>
                        </label>
                    </div>
                    <div class="relative mx-4">
                        <input class=" input-phone block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="guru" placeholder="" required name="guru">
                        <label for="guru" class="label-phone absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Guru</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="total_pertemuan">
                            <i class="ri-user-line text-3xl"></i>
                        </label>
                    </div>
                    <div class="relative mx-4">
                        <input class=" input-email block w-full outline-none h-16 rounded-lg pl-14 border-gray-300 border relative peer invalid:border-red-500 invalid:text-red-500" id="total_pertemuan" placeholder="" required name="total_pertemuan">
                        <label for="total_pertemuan" class="label-email absolute top-1/2 -translate-y-1/2 ml-12 transition-all text-gray-400 bg-white px-2 duration-100 peer-invalid:text-red-500">Total Pertemuan</label>
                        <label class="absolute  top-1/2 -translate-y-1/2 flex items-center p-4 gap-2 text-sm" for="total_pertemuan">
                            <i class="ri-hashtag text-3xl"></i>
                        </label>
                    </div>
                    <!-- <div class="relative mx-4">
                        <label class="custom-file-label block font-bold" for="profilePict">Ganti profile picture</label>
                        <input type="file" class="custom-file-input border border-slate-500 rounded-lg my-2" id="profilePict" name="profilePict" onchange="previewFile()">
                        <img id="previewImage" class="img-thumbnail w-60" alt="">
                    </div> -->

                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-red-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-red-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                    </div>
                </div>
                <?= form_close(); ?>

            </div>
        </div>
    </div>
    <!-- MODAL END -->

    <main class="ml-80 p-8">
        <form class="max-w-md mx-auto" method="get">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <input type="search" id="katakunci" name="katakunci" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Classes..." value="<?= $katakunci ?>" />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

        <div class="">
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="tambah-data w-36 mb-2 p-2.5 ms-2 text-sm font-medium text-blue-500  rounded-md border border-blue-700 focus:ring-2 focus:outline-none focus:ring-blue-300  ">
                <!-- <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg> -->
                tambah data
            </button>
        </div>


        <div class="relative overflow-x-auto sm:rounded-lg border-2">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Kode Kelas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mata pelajaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jam
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Guru
                        </th>
                        <th scope="col" class="px-6 py-3">
                            total_pertemuan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            materi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataClass as $col) { ?>
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <?= $col['kode_kelas'] ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $col['matpel'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $col['hari'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $col['jam_mulai'] ?>.00 - <?= $col['jam_berakhir'] ?>.00
                            </td>
                            <td class="px-6 py-4">
                                <?= $col['guru'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $col['total_pertemuan'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <ol>
                                    <?php
                                    $materi = $col['materi'];
                                    $materi = json_decode($materi, true);
                                    foreach ($materi as $m) {
                                        $judul = $m['judul'];
                                        $semester = $m['semester'];
                                    ?>
                                        <li><?= $judul . ' (' . $semester . ')' ?></li>

                                    <?php } ?>

                                </ol>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline" data-modal-target="default-modal" data-modal-toggle="default-modal" onclick="edit(<?= $col['kode_kelas'] ?>)">Edit</a>
                                <span> | </span>
                                <a href="#" class="font-medium text-red-600 hover:underline" onclick="hapus(<?php echo $col['kode_kelas'] ?>)">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <?php
        $linkPagination = $pager->links();
        // -untuk mengubah pola pagination yang sedang active
        $linkPagination  = str_replace('<li class="active">', '<li class="page-item active  text-[#0BA5EC]">', $linkPagination);
        $linkPagination  = str_replace('<ul class="pagination">', '<ul class="justify-content-center pagination text-center flex flex-row justify-center gap-6 my-4 ">', $linkPagination);
        // -untuk mengubah pagination yang tidak active
        $linkPagination = str_replace('<li>', '<li class="page-item">', $linkPagination);
        $linkPagination = str_replace('<a', '<a class="page-link px-2"', $linkPagination);
        echo $linkPagination
        ?>

    </main>

    <script>
        function hapus($id) {
            var result = confirm('Are you sure you want to delete this');
            if (result) {
                window.location = "<?php echo site_url("ClassesDataDelete") ?>/" + $id;
            }
        }


        function edit($id) {
            $.ajax({
                url: "<?php echo base_url("ClassesDataEdit") ?>/" + $id,
                type: "get",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.kode_kelas) {
                        $('#kode_kelas').val($obj.kode_kelas);
                        $('#matpel').val($obj.matpel);
                        $('#hari').val($obj.hari);
                        $('#jam_mulai').val($obj.jam_mulai);
                        $('#jam_berakhir').val($obj.jam_berakhir);
                        $('#guru').val($obj.guru);
                        $('#total_pertemuan').val($obj.total_pertemuan);
                    }
                }
            })
        }
        $('.tambah-data').on('click', function() {
            $('#kode_kelas').val('');
            $('#matpel').val('');
            $('#hari').val('Pilih Hari');
            $('#jam_mulai').val('');
            $('#jam_berakhir').val('');
            $('#guru').val('');
            $('#total_pertemuan').val('');
        });
        $('#modal-tambah').on('hidden.bs.modal', function(e) {
            e.preventDefault();
            if (!$('.success').hasClass('d-none')) {
                window.location.href = "<?php echo current_url() . '?' . $_SERVER['QUERY_STRING'] ?>";
                // alert('success tidak mempunyai d-none')
            }
            $('.alert').addClass('d-none');
            // alert("modal tertutup")

        })

        $('#tombolSimpan').on('click', function() {
            var $id = $('#inputId').val();
            var $nama = $('#inputNama').val();
            var $email = $('#inputEmail').val();
            var $bidang = $('#inputBidang').val();
            var $alamat = $('#inputAlamat').val();

            // console.log($nama)
            // console.log($email)
            // console.log($bidang)
            // console.log($alamat)



            // -menambahkan alert data sudah disimpan
            $.ajax({
                url: "<?php echo site_url("simpan") ?>",
                type: "POST",
                data: {
                    id: $id,
                    nama: $nama,
                    email: $email,
                    bidang: $bidang,
                    alamat: $alamat

                },
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if (!$obj.success) {
                        // alert("saya gagal, pesan: " + $obj.error);
                        $('.success').addClass('d-none');
                        $('.error').removeClass('d-none');
                        $('.error').html($obj.error);
                    } else {
                        $('.error').addClass('d-none');
                        $('.success').removeClass('d-none');
                        $('.success').text("berhasil wak");
                    }
                }
            });
        });
    </script>
</body>

</html>