<?php
$cats = $connection->getAllCat();
?>

<div class='flex flex-wrap justify-center text-black placeholder-black::placeholder'>
    <div class='block w-full p-6 bg-white border border-gray-200 rounded-lg shadow'>
        <form class="flex w-[90%]" method="post" action="./php/addItem.php">
            <div class='block w-full p-6 bg-white border border-gray-200 rounded-lg shadow'>
                <h5 class='mb-2 text-2xl font-bold tracking-tight'><input type="text" name="naam" id="name" placeholder="naam"></h5>
                <p class='font-normal'><input type="text" name="aller" id="aller" placeholder="allergeen"></p>
                <p class='font-normal'><input type="text" name="prijs" onkeypress="checkNum()" id="prijs" placeholder="0.00"></p>
                <p class='font-normal'><input type="text" name="img_path" id="img_path" placeholder="img_path"></p>
                <select name="cat">
                    <?php
                        var_dump($cats);
                        for ($i = 0; $i < sizeof($cats); $i++) {
                            echo "<option value=" . $cats[$i]['catID'] . ">" . $cats[$i]['categorie'] . "</option>";
                        }
                    ?>
                </select>
                <button type="submit" id="submitBut">Voeg toe</button>
                <button type="reset">Maak leeg</button>
            </div>
        </form>
    </div>
</div>

<script src="javascript/App/Controller/addmenu.js"></script>