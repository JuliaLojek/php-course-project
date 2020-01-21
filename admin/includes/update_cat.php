<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Edit category</label>

        <?php     /* DISPLAYS CATEGORY TITLE IN A FORM (TEXT FIELD) AFTER
                    CLICKING THE 'EDIT' LINK IN THE CATEGORY TABLE */

        if(isset($_GET['edit'])){
            $cat_edit_id = $_GET['edit'];
                                
            $query = "SELECT * FROM categories WHERE cat_id = $cat_edit_id";
            $edit_query = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($edit_query)){
                $cat_title = $row['cat_title'];
            ?>

                <input value="<?php if(isset($cat_title)){ echo $cat_title; } ?>" class="form-control" type="text" name="cat_title">

        <?php
            }
        }
        ?>

        <?php      /* UPDATES CATEGORY TITLE IN THE DATABASE */

        if(isset($_POST['update'])){
            $cat_update_title = $_POST['cat_title'];
                                    
            $query = "UPDATE categories SET cat_title = '$cat_update_title' WHERE cat_id = $cat_edit_id ";
            $update_query = mysqli_query($connection, $query);

            if(!$update_query){
                die("Database failed" . mysqli_error($connection));
            }
        }

        ?>

    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update" value="Update">
    </div>
</form>