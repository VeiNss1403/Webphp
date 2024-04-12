<form autocomplete="off" action="<?php echo BASE_URL ?>/category/insertcategory" method="POST">
    <?php 
    if(isset($data)){
        echo '<span style="color:red;font-weight:bold">' . $data . '</span>';
    }
        ?>
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="description" required></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="addcategory" value="Insert">
            </td>
        </tr>
    </table>
</form>
