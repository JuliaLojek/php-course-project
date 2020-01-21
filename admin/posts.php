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
                        
                        <?php

                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            } else{
                                $source = "";
                            }

                            switch($source){
                                case '34':
                                    echo "";
                                break;

                                default:
                                    include "includes/view_all_posts.php";
                                break;
                            }

                        ?>

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
