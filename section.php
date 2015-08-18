<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Section Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/timeline.css" />
             
   
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        
                        <?php 
                        session_start();
                        $_SESSION['course_id']=@$_REQUEST['course'];
                           echo $_SESSION['course'].@$_SESSION['user'] ;//or die("NO user");
                        ?>
                    </a>
                </li>
                <li>
                    <a class="response" data-toggle="modal" data-target="#section" data-value="add_section" href="#" >Add Section</a>
                </li>
                <li>
                    <a class="response" data-toggle="modal" data-target="#video" data-value="add_video" href="#">Add Video</a>
                </li>
                <li>
                    <a class="view" data-value="video/view.php" href="#">View</a>
                </li>
                <li>
                    <a class="response_close" data-value="Close" href="#"> Close </a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper ">
            <div class="navbar navbar-default">
            <div class="container-fluid">
                <div class="row">
                        <a href="#menu-toggle" class="btn btn-default navbar-btn" id="menu-toggle">         
                        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>Menu</a>
                    </div>
                </div>
            </div>
            </div>
        <!-- /#page-content-wrapper -->
         <div class="responseholder">
        <!-- #page-content- -->
         </div>
               
    </div>
    <!-- /#wrapper -->
    <!--Modal Windows-->
    <?php require_once("functions/sections.php");?>
    <?php require_once("functions/video.php");?>
    <!--/End of Modal windows-->
    <!-- jQuery -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/js_built_in.js"></script>
    <script src="js/section.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
