<?php
$data['judul'] = 'Class';
echo view('templates/head', $data)
?>

<body>
    <?php
    echo view('templates/nav')
    ?>
    <main class="ml-80 p-8">

        <h1 class="font-semibold text-gray-500">Tugas</h1>

        <!-- Task Info -->
        <div class="task-info flex gap-4 my-4 justify-center">
            <div class="task-total p-4 border rounded-md min-w-64 shadow-md">
                <h2 class="font-medium text-xl text-gray-500 mb-3">Total tugas</h2>
                <p class="font-semibold text-3xl">1028</p>
            </div>
            <div class="task-total p-4 border rounded-md min-w-64 shadow-md">
                <h2 class="font-medium text-xl text-gray-500 mb-3">Total tugas</h2>
                <p class="font-semibold text-3xl">628</p>
            </div>
            <div class="task-total p-4 border rounded-md min-w-64 shadow-md">
                <h2 class="font-medium text-xl text-gray-500 mb-3">Total tugas</h2>
                <p class="font-semibold text-3xl">628</p>
            </div>
        </div>

        <div class="task-list grid grid-cols-3 gap-8 my-8">
            <div class="task flex gap-3 bg-gray-100 p-4 rounded-2xl">
                <div class="task-icon h-14 aspect-square size-fit p-4 bg-blue-400 bg-opacity-20 flex items-center justify-center rounded-xl ">
                    <i class="ri-book-open-line text-2xl text-blue-400"></i>
                </div>
                <div class="task-text">
                    <h3 class="font-semibold">Membuat Video Wawancara</h3>
                    <p class="font-normal text-gray-400">8:00 AM - 10:00 AM</p>
                </div>
            </div>

            <?php
            for ($i = 0; $i < 10; $i++) {
                echo "<div class='task flex gap-3 bg-gray-100 p-4 rounded-2xl'>
                    <div class='task-icon h-14 aspect-square size-fit p-4 bg-blue-400 bg-opacity-20 flex items-center justify-center rounded-xl '>
                        <i class='ri-book-open-line text-2xl text-blue-400'></i>
                    </div>
                    <div class='task-text'>
                        <h3 class='font-semibold'>Membuat Video Wawancara</h3>
                        <p class='font-normal text-gray-400'>8:00 AM - 10:00 AM</p>
                    </div>
                </div>";
            }
            ?>

        </div>
    </main>

</body>

</html>