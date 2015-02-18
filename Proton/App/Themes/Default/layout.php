  <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"> 
    <title>Layout du projet</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_THEME.'Default'.DS.'css'.DS.'app.css' ?>">
        <link href="http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <h1 class="main-title">Spirit</span></h1>
        </div>
		<h1>Bienvenue sur le site</h1>
                <?php echo Core\Message::affFlashMessage() ?>

        <p>
            <a href="<?php echo $app->urlFor('Adminproduct'); ?>">Admin des produits</a>
        </p>

        <?php echo $content_for_layout ?>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="<?php echo BASE_THEME.DS.'Default'.DS.'js'.DS.'rAF.js' ?>"></script>
    <script type="text/javascript" src="<?php echo BASE_THEME.DS.'Default'.DS.'js'.DS.'app.js' ?>"></script>
    </body>
    </html>