<section class="flex flex-col items-center gap-y-[10px]">
    <div>
        <h1>Edit menu</h1>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-5">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    menuID
                </th>
                <th scope="col" class="px-6 py-3">
                    naam
                </th>
                <th scope="col" class="px-6 py-3">
                    allergeen
                </th>
                <th scope="col" class="px-6 py-3">
                    img_path
                </th>
                <th scope="col" class="px-6 py-3">
                    categorie
                </th>
                <th scope="col" class="px-6 py-3">
                    prijs
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Delete</span>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $men = $menu->getMenu();


            foreach ($men as $item) {
                $id = $item->getID();
                $naam = $item->getNaam();
                $aller = $item->getAllergeen();
                $img_path = $item->getPath();
                $cat = $item->getCategorie();
                $prijs = $item->getPrijs();

                echo "
                        <tr id='$id' class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600'>
                            <th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>$id</th>
                            <td id='naam$id' class='px-6 py-4'>$naam</td>
                            <td id='aller' class='px-6 py-4'>$aller</td>
                            <td id='img' class='px-6 py-4'>$img_path</td>
                            <td id='cat' class='px-6 py-4'>$cat</td>
                            <td id='prijs' class='px-6 py-4'>$prijs</td>
                            <td id='edit' class='px-6 py-4 text-right'>
                                <a onclick='getitem($id)' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
                            </td>
                            <td id='edit' class='px-6 py-4 text-right'>
                                <a onclick='deleteItem($id)' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Delete</a>
                            </td>
                        </tr>
                    ";
            }
            ?>
        </tbody>
    </table>
</div>
</section>

<script src="javascript/App/Controller/editmenu.js">

    
</script>