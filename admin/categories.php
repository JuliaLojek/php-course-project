<!DOCTYPE html>
<html lang="en">

<?php
    include "includes/header.php";
?>

<body>

    <div id="wrapper">

        <?php
            include "includes/nav.php";
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to the admin site,
                            <small>Subheading</small>
                        </h1>
                        
                        <div class="col-xs-6">

                            <?php    /* INSERTING NEW CATEGORIES INTO DATABASE */
                            add_new_category();
                            ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add category</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add category">
                            </div>
                        </form>

                        <?php      /* UPDATING CATEGORY FORM:
                                        IF 'EDIT' BUTTON IN THE CATEGORY TABLE IS CLICKED
                                        SHOW THIS PIECE OF CODE - DISPLAYS FORM WITH DEFAULT
                                        VAULE IN THE TEXT FIELD (TITLE OF THE CATEGORY WE'RE
                                        EDITING) AND THE BUTTON TO UPDATE THIS TITLE IN THE DATABASE */

                            if(isset($_GET['edit'])){
                                $cat_id = $_GET['edit'];

                                include "includes/update_cat.php";
                            }
                        ?>

                        </div>

                        <div class="col-xs-6">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php    /* ECHOING CATEGORIES FROM DATABASE INTO THE TABLE */
                                        display_categories_into_table();
                                    ?>

                                    <?php     /* DELITING CATEGORIES FROM DATABASE */
                                        delete_category();
                                    ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
