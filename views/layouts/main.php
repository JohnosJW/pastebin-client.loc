<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Simple Pastebin Client</title>

        <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Custom styles for this template -->
        <link href="public/css/simple-sidebar.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <div class="container page-header">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="index.php">Home</a></li>
                    <li role="presentation"><a href="create">Create</a></li>
                </ul>
            </div>
            <div id="page-content-wrapper">

                <!-- Page Content -->
                <?php   require_once("./views/" . $viewName . ".php"); ?>
                <!-- /#page-content-wrapper -->
            </div>
        </div>
    </body>
</html>