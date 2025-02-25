<?php
    $full = $menu->getFullMenu();
?>

<div class='flex flex-wrap content-center gap-y-5 mt-5 justify-between'>
    <div class='flex flex-col gap-y-5 block w-[70%] p-6 bg-[#F8F7F3] border border-gray-200 rounded-lg shadow ml-5'>
        <?php 
            for ($i = 0; $i < sizeof($full); $i++){
            $array = $menu->getWrapperFromIndex($i);
            echo $array;
            }
        ?>    
    </div>

    <div class='flex flex-col gap-y-5 block w-[25%] p-6 bg-[#F8F7F3] border border-gray-200 rounded-lg shadow sticky top-0 max-h-[70vh] overflow-y-scroll mr-5' id='cartcontainer'>
            
    </div>

    <div onclick="updateCart()" class="bg-white h-[25vh] w-[25vh]">
            
    </div>
</div>

<script src="javascript/App/Models/MenuItems.js"></script>
<script src="javascript/App/Models/ShoppingCart.js"></script>
<script src="javascript/App/Controller/basket.js"></script>