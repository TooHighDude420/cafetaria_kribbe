<div class="flex">
    <div class='flex flex-wrap w-[100%] content-center gap-y-5 mt-5 justify-between'>
        <?php
        if (isset($_POST['search'])) {
            $menu->getFilterdMenuAsItems($_POST['search']);
        } else {
            $menu->displayFullMenu();
        }

        ?>
    </div>

    <div class='flex flex-col justify-between gap-y-5 block w-[20%] p-6 mt-5 bg-[#F8F7F3] border border-gray-200 rounded-lg shadow sticky top-5 max-h-[70vh] overflow-y-scroll mr-5'
        id='cartcontainer'>

    </div>
</div>

<script src="javascript/App/Models/MenuItems.js"></script>
<script src="javascript/App/Models/ShoppingCart.js"></script>
<script src="javascript/App/Controller/basket.js"></script>