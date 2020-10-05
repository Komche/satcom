<?php
$title = "Detail du produit";
$data = null;
if (!empty($_GET['detail'])) {
    $data = Manager::getData('produit', 'id_produit', $_GET['detail'])['data'];
    $title = "Detail " . $data['libelle_produit'];
} else {
    header('Location:index.php');
}

ob_start();
?>

<style>
    /**
 * Oscuro: #283035
 * Azul: #03658c
 * Detalle: #c7cacb
 * Fondo: #dee1e3
 ----------------------------------*/

    a {
        color: #03658c;
        text-decoration: none;
    }

    ul {
        list-style-type: none;
    }


    /** ====================
 * Lista de Comentarios
 =======================*/
    .comments-container {
        margin: 60px auto 15px;
        width: 768px;
    }

    .comments-container h1 {
        font-size: 36px;
        color: #283035;
        font-weight: 400;
    }

    .comments-container h1 a {
        font-size: 18px;
        font-weight: 700;
    }

    .comments-list {
        margin-top: 30px;
        position: relative;
    }

    /**
 * Lineas / Detalles
 -----------------------*/
    .comments-list:before {
        content: '';
        width: 2px;
        height: 100%;
        background: #c7cacb;
        position: absolute;
        left: 32px;
        top: 0;
    }

    .comments-list:after {
        content: '';
        position: absolute;
        background: #c7cacb;
        bottom: 0;
        left: 27px;
        width: 7px;
        height: 7px;
        border: 3px solid #dee1e3;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    .reply-list:before,
    .reply-list:after {
        display: none;
    }

    .reply-list li:before {
        content: '';
        width: 60px;
        height: 2px;
        background: #c7cacb;
        position: absolute;
        top: 25px;
        left: -55px;
    }


    .comments-list li {
        margin-bottom: 15px;
        display: block;
        position: relative;
    }

    .comments-list li:after {
        content: '';
        display: block;
        clear: both;
        height: 0;
        width: 0;
    }

    .reply-list {
        padding-left: 88px;
        clear: both;
        margin-top: 15px;
    }

    /**
 * Avatar
 ---------------------------*/
    .comments-list .comment-avatar {
        width: 65px;
        height: 65px;
        position: relative;
        z-index: 99;
        float: left;
        border: 3px solid #FFF;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .comments-list .comment-avatar img {
        width: 100%;
        height: 100%;
    }

    .reply-list .comment-avatar {
        width: 50px;
        height: 50px;
    }

    .comment-main-level:after {
        content: '';
        width: 0;
        height: 0;
        display: block;
        clear: both;
    }

    /**
 * Caja del Comentario
 ---------------------------*/
    .comments-list .comment-box {
        width: 680px;
        float: right;
        position: relative;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    }

    .comments-list .comment-box:before,
    .comments-list .comment-box:after {
        content: '';
        height: 0;
        width: 0;
        position: absolute;
        display: block;
        border-width: 10px 12px 10px 0;
        border-style: solid;
        border-color: transparent #FCFCFC;
        top: 8px;
        left: -11px;
    }

    .comments-list .comment-box:before {
        border-width: 11px 13px 11px 0;
        border-color: transparent rgba(0, 0, 0, 0.05);
        left: -12px;
    }

    .reply-list .comment-box {
        width: 610px;
    }

    .comment-box .comment-head {
        background: #FCFCFC;
        padding: 10px 12px;
        border-bottom: 1px solid #E5E5E5;
        overflow: hidden;
        -webkit-border-radius: 4px 4px 0 0;
        -moz-border-radius: 4px 4px 0 0;
        border-radius: 4px 4px 0 0;
    }

    .comment-box .comment-head i {
        float: right;
        margin-left: 14px;
        position: relative;
        top: 2px;
        color: #A6A6A6;
        cursor: pointer;
        -webkit-transition: color 0.3s ease;
        -o-transition: color 0.3s ease;
        transition: color 0.3s ease;
    }

    .comment-box .comment-head i:hover {
        color: #03658c;
    }

    .comment-box .comment-name {
        color: #283035;
        font-size: 14px;
        font-weight: 700;
        float: left;
        margin-right: 10px;
    }

    .comment-box .comment-name a {
        color: #283035;
    }

    .comment-box .comment-head span {
        float: left;
        color: #999;
        font-size: 13px;
        position: relative;
        top: 1px;
    }

    .comment-box .comment-content {
        background: #FFF;
        padding: 12px;
        font-size: 15px;
        color: #595959;
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 4px;
    }

    .comment-box .comment-name.by-author,
    .comment-box .comment-name.by-author a {
        color: #03658c;
    }

    .comment-box .comment-name.by-author:after {
        content: 'autor';
        background: #03658c;
        color: #FFF;
        font-size: 12px;
        padding: 3px 5px;
        font-weight: 700;
        margin-left: 10px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    /** =====================
 * Responsive
 ========================*/
    @media only screen and (max-width: 766px) {
        .comments-container {
            width: 480px;
        }

        .comments-list .comment-box {
            width: 390px;
        }

        .reply-list .comment-box {
            width: 320px;
        }
    }
</style>
<!-- Single Section -->
<section>
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInDown">
                    <h2 class="section-heading" style="color: #1C563D;"><strong><?= $title ?></strong></h2>

                </div>
                <div class="row gap">
                    <div class="col-md-4 wow fadeInLeft">
                        <img src="admin/<?= $data['src_img'] ?>" class="img-responsive" />
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <?= $data['detail'] ?>
                    </div>
                </div>
                <div class="comment">
                    <form class="form-horizontal" method="POST" action="">
                        <? if(empty($_SESSION['client'])): ?>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12">
                                <input class="form-control" name="nom" id="nom" placeholder="Votre nom" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-sm-12">
                                <input class="form-control" name="numero_telephone" id="numero_telephone" placeholder="Votre N° de téléphone" required>
                            </div>
                        </div>
                        <? endif ?>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12">
                                <input class="form-control" type="hidden" name="produit" id="produit" value="<?= $data['id_produit'] ?>" placeholder="Votre nom" required>
                                <textarea required class="form-control" name="detail" id="detail" placeholder="Veuillez écrire votre commentaire"></textarea>
                            </div>
                        </div>
                        <?php
                        if (!empty($_SESSION['messages'])) {
                            Manager::messages($_SESSION['messages']['msg'], $_SESSION['messages']['code']);
                        }
                        ?>
                        <button type="submit" class="btn btn-success">Commenter</button>
                    </form>
                    <div class="row">
                        <!-- Contenedor Principal -->
                        <div class="comments-container">

                            <ul id="comments-list" class="comments-list">
                                <?php
                                $sql = "SELECT cl.nom cln, u.nom, u.prenom, c.detail, date_commentaire, u.src_img uimg,
                                c.client clt, c.utilisateur utl, cl.src_img cimg FROM commentaire c
                                LEFT JOIN client cl ON cl.id_client=c.client
                                LEFT JOIN utilisateur u ON  u.id_utilisateur = c.utilisateur  
                                WHERE  c.produit=?  GROUP BY id_commentaire ORDER BY date_commentaire DESC";

                                $commentaire = Manager::getMultiplesRecords($sql, [$data['id_produit']]);
                                if (is_array($commentaire) || is_object($commentaire)) :
                                    foreach ($commentaire as $key => $value) :

                                ?>
                                        <li>
                                            <div class="comment-main-level">
                                                <!-- Avatar -->
                                                <div class="comment-avatar"><img src="<?= empty($value['clt']) ? 'admin/'.$value['uimg']: $value['cimg']  ?>" alt=""></div>
                                                <!-- Contenedor del Comentario -->
                                                <div class="comment-box">
                                                    <div class="comment-head">
                                                        <h6 class="comment-name"><a href="#"><?= empty($value['clt']) ? $value['nom'] . ' ' . $value['prenom'] : $value['cln']  ?></a></h6>
                                                        <span><?= $value['date_commentaire'] ?></span>
                                                        <!-- <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i> -->
                                                    </div>
                                                    <div class="comment-content">
                                                        <?= $value['detail'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                <?php endforeach;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="related-items" class="gap row">
                    <div class="col-md-12">
                        <h3 class="single-section-title"><strong>Produit</strong> du même catégorie</h3>
                        <div class="row">
                            <ul class="direction-aware owl-carousel wow fadeInUp" data-items="5" data-items-tablet="[768,3]" data-items-mobile="[479,1]">
                                <?php
                                $sql = "SELECT * FROM produit p, type_produit t WHERE t.id_type_produit=p.type_produit AND p.type_produit=?";

                                $produit = Manager::getMultiplesRecords($sql, [$data['type_produit']]);
                                if (is_array($produit) || is_object($produit)) :
                                    foreach ($produit as $key => $value) :
                                ?>
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="admin/<?= $value['src_img'] ?>" title="pc">
                                                <img src="admin/<?= $value['src_img'] ?>" class="img-responsive" alt="" style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="item-caption">
                                                <h4><?= $value['libelle_produit'] ?></h4>
                                            </div>
                                        </li>
                                <?php endforeach;
                                endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require('template.php');
?>