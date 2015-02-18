  <!DOCTYPE html>
    <html>
    <head>
    <title></title>
    <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Bootstrap -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 70px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.php">Documentation Proton</a>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class=""><a href="index.php?rub=structure">Structure </a></li>
                    <li class=""><a href="index.php?rub=markdown">Le Markdown </a></li>
                    <li class=""><a href="index.php?rub=afaire">A faire </a></li>
                  </ul>
            </div><!-- /.container-fluid -->
        </div>
    </nav>

    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
					<?php 
					include_once 'Parsedown.php';
					$Parsedown = new Parsedown();
                    // $file = 'doc.md';
                    if (isset($_GET['rub'])) {
                        echo $Parsedown->text(file_get_contents($_GET['rub'].'.md'));

                    }
                    else{ ?>
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-3"><img src="atome.jpg" alt="Proton" class="img-rounded"></div>
                                <div class="col-md-9">
                                    <?php  echo $Parsedown->text(file_get_contents('index.md'));?>
                                    <p><a class="btn btn-primary btn-lg" href="index.php?rub=structure" role="button">En savoir plus</a></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
    			</div>
    		</div>
    	</div>
    </body>
    </html>
