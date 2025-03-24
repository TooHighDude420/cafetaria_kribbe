<?php
if (isset($_COOKIE['loggedIn']) == false) {
    header("location: index.php?page=home");
}

$username = $_COOKIE['username'];

$array = [
    'Home' => 'home',
    'Edit Menu' => 'manmenu',
    'Add to menu' => 'addmenu',
    'Manage Users' => 'manusers',
    'Manage reservations' => 'manres'
];

if (isset($_GET['dashpage'])) {
    $dashPage = $_GET['dashpage'];
} else {
    $dashPage = "home";
}
?>
<div class='flex h-screen text-gray-400 bg-gray-900'>
    <!-- Component Start -->
    <!-- side icons -->
    <div class='flex flex-col items-center w-16 pb-4 overflow-auto border-r border-gray-800 text-gray-500'>
        <?php
        foreach ($array as $key => $val) {
            echo "
                        <a class='flex items-center justify-center flex-shrink-0 w-full h-16' href='index.php?page=dashboard&dashpage=$val&title=$key'>
                        <img src='img/dashboard/icons/$val.png' alt='$key'>
                    </a>
                    ";
        }
        ?>
    </div>
    <!-- page title and action buttons and three dots -->
    <div class='flex flex-col flex-grow'>
        <div class='flex items-center flex-shrink-0 h-16 px-8 border-b border-gray-800'>
            <h1 class='text-lg font-medium'><?php echo $_GET['title']; ?></h1>
            <button
                class='flex items-center justify-center h-10 px-4 ml-auto text-sm font-medium rounded hover:bg-gray-800'>
                Home
            </button>
            <button
                class='flex items-center justify-center h-10 px-4 ml-2 text-sm font-medium bg-gray-800 rounded hover:bg-gray-700'>
                Logout
            </button>
            <button class='relative ml-2 text-sm focus:outline-none group'>
                <div class='flex items-center justify-between w-10 h-10 rounded hover:bg-gray-800'>
                    <svg class='w-5 h-5 mx-auto' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'
                        stroke='currentColor'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
                            d='M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z' />
                    </svg>
                </div>
                <div
                    class='absolute right-0 flex-col items-start hidden w-40 mt-1 pb-1 bg-gray-800 border border-gray-800 shadow-lg group-focus:flex'>

                </div>
            </button>
        </div>

        <div class='flex-grow p-6 overflow-auto bg-gray-800'>
            <?php include "includes/dashboard/$dashPage" . ".inc.php"; ?>
        </div>
    </div>
    <!-- Component End  -->
</div>