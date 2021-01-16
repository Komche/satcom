<?php
$title = "Liste des membres";

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
                <h2>Memebres </h2>

                <div class="clearfix"></div>
            </div>

            <div class="x_content">


                <div class="table-responsive">
                    <table class="table table-striped table-hover jambo_table bulk_action">
                        <thead>
                            <tr class="headings">

                                <th class="column-title">Nom </th>
                                <th class="column-title">Prénom</th>
                                <th class="column-title">Poste </th>
                                <th class="column-title">Twitter </th>
                                <th class="column-title">Facebook </th>
                                <th class="column-title">Linkden </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $data = Manager::getData('equipe')['data'];
                            if (is_array($data) || is_object($data)) :
                                foreach ($data as $key => $value) :
                                    if (empty($value['src_img'])) {
                                        $src = createAvatarImage($value['nom']);
                                        $slq = "UPDATE equipe SET src_img=? WHERE id_equipe=?";
                                        Manager::modifRecord($slq, [$src, $value['id_equipe']]);
                                    }
                            ?>
                                        <tr class="pointer">
                                            <td class=" "><?= $value['nom'] ?></td>
                                            <td class=" "><?= $value['prenom'] ?></td>
                                            <td class=" "><?= $value['poste'] ?></td>
                                            <td class=" "><?= $value['twitter'] ?></td>
                                            <td class=" "><?= $value['facebook'] ?></td>
                                            <td class=" "><?= $value['linkden'] ?></td>
                                            <td class=" last"><a class="btn btn-primary" href="index.php?action=addEquipe&modif=<?= $value['id_equipe'] ?>"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php
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