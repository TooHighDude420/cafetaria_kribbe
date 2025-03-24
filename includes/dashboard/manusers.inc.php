<?php
if (isset($_COOKIE['loggedin'])) {
    if ($_COOKIE['role'] != 1) {
        header("location: index.php?page=home");
    }
}
?>

<section>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table{
            width: 20%;
        }

        td{
            text-align: center;
        }
    </style>
    
    <?php
    if (isset($_COOKIE['addeduser'])) {
        echo "<div><p>user added!</p></div>";
        unset($_COOKIE['addeduser']);
        setcookie("addeduser", "", -1, '/');
    }
    ?>

    <div>
        <h1>Add user</h1>
    </div>

    <div>
        <form action="php/insertUser.php" method="post">
            <label>Username:</label>
            <input type="text" name="username" id="username">

            <label>Password:</label>
            <input type="password" name="password" id="password">

            <lable>Role:</lable>
            <select name="role" id="role">
                <option value="1">admin</option>
                <option value="2">worker</option>
            </select>
            <button type="submit">Go!</button>
        </form>
    </div>

    <div>
        <h2>edit users</h2>
    </div>

    <div>
        <table style="width: 20%;">
            <tr>
                <th> UserID </th>
                <th> Username </th>
                <th> Role </th>
            </tr>

            <?php
            $tableData = $connection->slectAllFromUsers();

            foreach ($tableData as $data) {
                $id = $data["userID"];
                $username = $data["username"];
                $role = $data["role"];

                echo "
                        <tr>
                            <td>$id</td>
                            <td>$username</td>
                            <td>$role</td>
                        </trl>
                    ";
            }
            ?>
        </table>
    </div>
</section>