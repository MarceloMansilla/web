<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\models\TipoUsuario;
use app\assets\AppAssetWebSite;
use yii\bootstrap\BootstrapAsset;
AppAssetWebSite::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title>
        <?= Html::encode($this->title) ?>
    </title>
    <?php $this->head() ?>
</head>
<body>
    <?php
    $this->beginBody();
    /* include('testMaps.php'); */
    ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => '<img src="img/logo.ico" style="display:inline; margin-top: -15px; vertical-align: top; width:50px; height:50px;">&nbsp&nbsp&nbsp&nbsp<b styel="size:15px">RemisYA</b>',
            'brandUrl' => Yii::$app->homeUrl,
            'id' => 'barra-menu-main',
            'options' => ['class' => 'nav-pills navbar-fixed-top'],
                //'options' => [
                //   'class' => 'navbar-inverse navbar-fixed-top',
                //],
        ]);
        ;
        echo Nav::widget([
            'encodeLabels' => false,
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => '<span class="fa fa-home"></span> ' . Html::encode('Home'), 'url' => ['/site/index']],
                ['label' => '<span class="fa fa-users"></span> ' . Html::encode('Qui�nes Somos'), 'url' => ['/site/about']],
                ['label' => '<span class="fa fa-comment-o"></span> ' . Html::encode('Contactarnos'), 'url' => ['/site/contact']],
                ['label' => '<span class="fa fa-user-plus"></span> ' . Html::encode('Registrar'),
                    'items' => [
                        ['label' => '<span class="fa fa-user"></span> ' . Html::encode('Usuario'), 'url' => ['/site/registro'],],
                        '<li class="divider"></li>',
                        ['label' => '<span class="fa fa-industry"></span> ' . Html::encode('Remiseria'), 'url' => ['/site/solicitud_registrar_agencia'],],
                    ],],
                Yii::$app->user->isGuest ? (
                        //['label' => 'Login', 'url' => ['/site/login'], 'id'=>'btn-login','onClick()'=>'abrirLoginDesdeBotonLoginHeader()']
                        ['label' => '<span class="fa fa-sign-in"></span> ' . Html::encode('Login'), 'url' => ['/site/login']]
                        ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                        . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->Usuario . ')', ['class' => 'btn btn-link']
                        )
                        . Html::endForm()
                        . '</li>'
                        )
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <!--<hr style="border:1px solid gray;">-->
            <span id="footer-copy-right" style="text-align:center">Derechos Reservado &copy 2016</span>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>