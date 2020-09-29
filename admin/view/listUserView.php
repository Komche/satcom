<?php
$title = "List des utilisateurs";

ob_start();
?>
<div class="page-title">
    <div class="title_left">
        <h3><?= $title ?></h3>
    </div>


</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Utilisateurs </h2>

                <div class="clearfix"></div>
            </div>

            <div class="x_content">


                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">

                                <th class="column-title">Nom </th>
                                <th class="column-title">Prénom</th>
                                <th class="column-title">N° de téléphone </th>
                                <th class="column-title">Email </th>
                                <th class="column-title">Status </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $i = 0;
                            $data = Manager::getData('utilisateur')['data'];
                            if (is_array($data) || is_object($data)) :
                                foreach ($data as $key => $value) :
                                    $i++;
                                    if ($i % 2 == 0) :
                            ?>
                                        <tr class="even pointer">
                                            <td class=" "><?= $value['nom'] ?></td>
                                            <td class=" "><?= $value['prenom'] ?></td>
                                            <td class=" "><?= $value['numero_telephone'] ?></td>
                                            <td class=" "><?= $value['email'] ?></td>
                                            <td class=" "><?= $value['status'] == 1 ? 'Activer' : 'non activer' ?></td>

                                            <td class=" last"><a class="btn btn-primary" href="index.php?action=addUser&modif=<?= $value['id_utilisateur'] ?>"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php else : ?>
                                        <tr class="odd pointer">
                                            <td class=" "><?= $value['nom'] ?></td>
                                            <td class=" "><?= $value['prenom'] ?></td>
                                            <td class=" "><?= $value['numero_telephone'] ?></td>
                                            <td class=" "><?= $value['email'] ?></td>
                                            <td class=" "><?= $value['status'] == 1 ? 'Activer' : 'non activer' ?></td>

                                            <td class=" last"><a class="btn btn-primary" href="index.php?action=addUser&modif=<?= $value['id_utilisateur'] ?>"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                            <?php endif;
                                endforeach;
                            endif
                            ?>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>