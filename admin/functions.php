<?php


/* INSERTING NEW CATEGORIES INTO DATABASE */
function add_new_category(){
    
    global $connection;

    if(isset($_POST['submit'])){
        $cat_title = $_POST['cat_title'];

        if($cat_title == "" || empty($cat_title)){
            echo "The category name field cannot be empty!";
        } else{
            $query = "INSERT INTO categories(cat_title) ";
            $query .= "VALUE('{$cat_title}') ";

            $create_cat_query = mysqli_query($connection, $query);

            if(!$create_cat_query){
                die("Database failed") . mysqli_error($connection);
            }
        }
    }
}



/* ECHOING CATEGORIES FROM DATABASE INTO THE TABLE */
function display_categories_into_table(){

    global $connection;
    $query = "SELECT * FROM categories";
    $select_cat = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_cat)){
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo
        "<tr>
        <td>{$cat_id}</td>
        <td>{$cat_title}</td>
        <td><a href='categories.php?delete={$cat_id}'>Delete</th>
        <td><a href='categories.php?edit={$cat_id}'>Edit</th>
        </tr>";
    }
}


/* DELITING CATEGORIES FROM DATABASE */
function delete_category(){

    global $connection;
    
    if(isset($_GET['delete'])){
        $cat_delete_id = $_GET['delete'];
        
        $query = "DELETE FROM categories WHERE cat_id = {$cat_delete_id} ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: categories.php");
    }
}
?>