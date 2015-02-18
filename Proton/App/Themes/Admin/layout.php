<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proton - Administration</title>

    <!-- Bootstrap -->
      <?php echo $this->css('/css/bootstrap.min.css'); ?>
      <?php echo $this->css('/css/sprite.css'); ?>
      <?php echo $this->css('/css/app.css'); ?>
      <?php echo $this->includeCSS(); ?>

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
            <a class="navbar-brand" href="<?php echo $app->urlFor('admin'); ?>">Administration</a>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <a class="navbar-brand" href="<?php echo $app->urlFor('tutorial_admin_list'); ?>">Tutoriaux</a>
                    <a class="navbar-brand" href="<?php echo $app->urlFor('root'); ?>">Voir le site</a>
                  </ul>
            </div><!-- /.container-fluid -->
        </div>
    </nav>

        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <?php echo Core\Message::affFlashMessage() ?>
              </div>
            </div>
            <div class="row">
                <?php echo $content_for_layout ?>
            </div>

            <?php echo $debug_bar ?>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php echo $this->js('/js/bootstrap.app.js'); ?>
    <?php echo $this->js('/js/markdown.app.js'); ?>
    <?php echo $this->includeJs(); ?>

  </body>
</html>