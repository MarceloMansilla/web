<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\AppAssetAgencia;
use app\assets\BootswatchAsset;

raoul2000\bootswatch\BootswatchAsset::$theme = 'superhero';
BootswatchAsset::register($this);
AppAssetAgencia::register($this);
AppAsset::register($this);
/* @var $this yii\web\View */             //modifique el div class ="site-index" por el "agencia-index"
$this->title = 'Service Remis';
?>
<div class="section-tout" style="background-color:#eaf1f1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <h3 class="caracteristicasTitulo">
                    <i class="fa fa-thumbs-up"></i>  Satisfacci&oacute;n a los requerimientos de los clientes
                </h3>
                <p class="caracteristicas"> Al brindarle una atenci&oacute;n r&aacute;pida y personalizada, pudiendo elegir la remiseria que m&aacute;s le convenga en ubicacion, precio y servicio. Entre otros beneficios, el cliente tiene acceso inmediato a su historial y estad&iacute;sticas de consumo.
                 </p>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h3 class="caracteristicasTitulo">
                    <i class="fa fa-puzzle-piece"></i>Totalmente adaptable a sus necesidades
                </h3>
                <p class="caracteristicas">
                    Adaptable a sus modalidades operativas y administrativas, ofreciendo la mejor alternativas de funcionamiento para uno o varios equipos y operadores.
                </p>
            </div>
          
            <div class="col-lg-4 col-sm-6">
                <h3 class="caracteristicasTitulo">
                    <i class="fa fa-sitemap"></i>  Dise&ntilde;o espec&iacute;fico
                </h3>
                <p class="caracteristicas">
                    Con la m&aacute;s amplia gama de plantillas, formularios, desarrollados y optimizados para la mas sencilla y completa administraci&oacute;n de Servicios de Remiser&iacute;a. Un software con m&uacute;ltiples herramientas que le permiten la posibilidad de realizar m&aacute;s tareas en menos tiempo y obtener datos precisos para la toma de decisiones.
                </p>
                <br />
            </div>
        
            <div class="col-lg-4 col-sm-6">
                <h3 class="caracteristicasTitulo">
                    <i class="fa fa-line-chart"></i>  Reducci&oacute;n de costos que optimizan las ganancias de negocio
                </h3>
                <p class="caracteristicas">
                    Al posibilitar la disminuci&oacute;n de recursos de personal y tiempo destinados a tareas administrativas, a trav&eacute;s del ordenamiento y automatizaci&oacute;n de dichas tareas y por lo tanto, optimizando las ganancias de negocio.
                </p>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h3 class="caracteristicasTitulo">
                    <i class="fa fa-shield"></i>  Seguridad
                </h3>
                <p class="caracteristicas">
                    Actualizaci&oacute;n de tecnolog&iacute;a al servicio del cliente. Veh&iacute;culos habilitados y con el seguro correpondiente. Seguimiento de la flota v&iacute;a web. Env&iacute;o de SMS con los datos del m&oacute;vil asignado.
                </p>
            </div>

            <div class="col-lg-4 col-sm-6">
                <h3 class="caracteristicasTitulo">
                    <i class="fa fa-users"></i>  Optimizaci&oacute;n del trabajo del personal operativo
                </h3>
                <p class="caracteristicas">
                    Al llevar un detallado registro del estado de situaci&oacute;n de los todos los servicios y el personal asignado, y las unidades operativas.
                </p>
            </div>
        </div>
    </div>
</div>