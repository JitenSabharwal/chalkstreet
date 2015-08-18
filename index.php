<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

   
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                   <a class="response" data-toggle="modal" data-target="#course" data-value="add_course" href="" >Add Courses</a>
                </li>
                <li>
                    <a class="response" data-value="courses/toc.php" href="#">View Courses</a>
                </li>
                <li>
                    <a class="response" data-value="overview" href="#">Overview</a>
                </li>
                <li>
                    <a class="logout" onclick="logout()" href="#">Logout</a>
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
    
    <!--Modal for course addition -->
      <?php require_once("functions/course.php");?>  

    <!--/end of course-->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/js_built_in.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
