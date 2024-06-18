<?php
$data["judul"] = "Task";
echo view("templates/head", $data);
?>

<body>
    <?php echo view("templates/nav"); ?>
    <main class="ml-80 p-8">

        <h2 class="font-semibold text-blue-500 text-3xl"><?php echo $judul_tugas ?></h2>
        <p class="text-base font-medium text-gray-800 my-8"><?php echo $desc_tugas ?></p>


        <form class="max-w-2xl mt-4" method="POST" action="<?php echo base_url('kirimTugas/') . $id_tugas ?>">
            <label for="link_tugas" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <?php if ($link_tugas) { ?>
                <div class="relative">
                    <input type="search" id="link_tugas" name="link_tugas" class="block w-full p-4  text-sm border  rounded-lg bg-gray-50 ring-green-500 focus:ring-green-500 focus:border-green-500 border-green-500 text-green-500" placeholder="contoh: https://drive.google.com/drive/u/0/home/link/tugas/anda.pdf" value="<?php echo $link_tugas ?>" required />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Submit</button>
                </div>
                <p class="mt-1 text-sm text-gray-500 dark:text-green-500" id="file_input_help">Tugas Berhasil dikumpulkan</p>
            <?php } else { ?>
                <div class="relative">

                    <input type="search" id="link_tugas" name="link_tugas" class="block w-full p-4  text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  " placeholder="contoh: https://drive.google.com/drive/u/0/home/link/tugas/anda.pdf" value="<?php echo $link_tugas ?>" required />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#0ba5ec] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Submit</button>
                </div>

            <?php } ?>
        </form>


    </main>

</body>

</html>