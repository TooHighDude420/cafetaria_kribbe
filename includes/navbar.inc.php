<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between w-full items-center p-4 gap-y-[150px] max-w-full">
        <a href="index.php?page=home" class="flex items-center space-x-4 rtl:space-x-reverse">
            <img src="img/icon/icon.png" class="h-11" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-[#07B0C1]">Cafetaria <i
                    class="freckle-face-regular">Kribbe</i></span>
        </a>
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <p class="self-center text-5xl font-semibold whitespace-nowrap dark:text-[#07B0C1] freckle-face-regular">
                Krib d'r niet genoeg van!</p>
        </div>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="index.php?page=menu" class="text-sm text-gray-500 dark:text-blue-500 hover:underline">
                <button type="button"
                    class="text-orange-700 hover:text-white border border-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-orange-500 dark:text-orange-500 dark:hover:text-white dark:hover:bg-orange-500 dark:focus:ring-orange-800">Menu</button>
            </a>
            <a href="index.php?page=login" class="text-sm  text-gray-500 dark:text-blue-500 hover:underline">
                <button type="button"
                    class="text-orange-700 hover:text-white border border-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-orange-500 dark:text-orange-500 dark:hover:text-white dark:hover:bg-orange-500 dark:focus:ring-orange-800">Login</button>
            </a>
        </div>
    </div>
</nav>

<?php
if (isset($_GET['page'])) {
    if ($_GET['page'] == "menu") {
        echo "
        <nav class='bg-gray-50 dark:bg-gray-700'>
            <div class='max-w-screen-xl px-4 py-3 mx-auto'>
                <div class='flex items-center'>
                    <ul class='flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm'>
                        <li>
                            <a href='#' class='text-gray-900 dark:text-white hover:underline' aria-current='page'>Home</a>
                        </li>
                        <li>
                            <a href='#' class='text-gray-900 dark:text-white hover:underline'>Company</a>
                        </li>
                        <li>
                            <a href='#' class='text-gray-900 dark:text-white hover:underline'>Team</a>
                        </li>
                        <li>
                            <a href='#' class='text-gray-900 dark:text-white hover:underline'>Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        ";
    }
}
?>