<h1>Liste des tutorials</h1>

<div class="row">
    <div class="col-lg-12">
        <?php echo $Helper->affLienImage($app->urlFor('tutorial_admin_new'),"Ajouter","plus-green ");?>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <table class="table table-striped">
            <?php foreach ($tutoriaux as $key => $value): ?>
                <tr  >
                    <td style="width: 30px;">
                        <?php echo $Helper->affLienImage($app->urlFor('tutorial_admin_delete',array('id'=>$value->getId() )),"","cross-orange");?>
                    </td>
                    <td style="width: 30px;">
                        <?php echo $Helper->affLienImage($app->urlFor('tutorial_admin_edit',array('id'=>$value->getId() )),"","pencil");?>
                    </td>
                    <td style="width: 30px;">
                        <?php echo $Helper->affBoolean($value->getValidate());?>
                    </td>
                    <td>
                        <?php echo $value->getName() ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <div class="col-lg-4">
    </div>
</div>

