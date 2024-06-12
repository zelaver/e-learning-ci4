<?php
$data["judul"] = "Class";
echo view("templates/head", $data);
?>

<body>
    <?php echo view("templates/nav"); ?>
    <div class="ml-80 p-8">
        <header class="class-detail grid min-h-80 grid-cols-4 grid-rows-2 gap-8">
            <div class="presensi row-span-2 flex flex-col gap-2">
                <h1 class="matpel flex justify-between">Bahasa Inggris<i class="ri-git-repository-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p class="hari">kamis</p>
                <p class="jam">12.00 - 14.00</p>
                <button class="mt-auto bg-blue-500 text-slate-200 p-2 rounded-md border-slate-500"><i class="ri-clipboard-fill"></i>Presensi</button>
            </div>
            <div class="kode-kelas">
                <h1 class="flex justify-between">301<i class="ri-codepen-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p>Kode Kelas</p>
            </div>
            <div class="total-pertemuan">
                <h1 class="flex justify-between">12<i class="ri-bar-chart-2-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p>total Pertemuan</p>
            </div>
            <div class="tugas row-span-2 flex flex-col gap-4">
                <h1 class="flex justify-between w-full content-stretch ">Tugas<i class="ri-list-check-3 bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <div class="list-tugas flex flex-col h-full">
                    <p class="block">Tidak ada tugas</p>
                </div>
            </div>
            <div class="guru">
                <h1 class="flex justify-between">Skibidi<i class="ri-id-card-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400"></i></h1>
                <p>Guru</p>
            </div>
            <div class="total-tugas">
                <h1 class="flex justify-between">6<i class="ri-task-fill bg-blue-100 rounded-full aspect-square w-10 flex justify-center items-center text-blue-400 text-2xl"></i></h1>
                <p>Total Tugas</p>
            </div>

        </header>
        <main class=" mt-8">


            

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 border">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd:bg-white  even:bg-gray-100 ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="odd:bg-white  even:bg-gray-100  border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="odd:bg-white  even:bg-gray-100  border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="odd:bg-white  even:bg-gray-100  border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    Google Pixel Phone
                </th>
                <td class="px-6 py-4">
                    Gray
                </td>
                <td class="px-6 py-4">
                    Phone
                </td>
                <td class="px-6 py-4">
                    $799
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>


        </main>
    </div>

</body>

</html>