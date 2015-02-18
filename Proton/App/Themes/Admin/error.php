<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proton - Error</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_THEME.'Admin'.DS.'css'.DS.'bootstrap.min.css' ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 70px;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-12">
                       <p>
                         Error
                       </p>
                       <p>
                         <?php var_dump($error); ?>
                       </p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo BASE_THEME.DS.'Admin'.DS.'js'.DS.'bootstrap.min.js' ?>"></script>
  </body>
</html>