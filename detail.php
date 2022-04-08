<?php
/**
 * Fragment Header HTML page
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>
<?php  require_once 'header.php'; ?><!doctype html>
<html lang="fr" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Homepage : GeoWorld</title>
<?php
require_once 'inc/connect-db.php';
require_once 'inc/manager-db.php';
  $id = $_GET['id'];
  $capitale = $_GET['Capitale'];
$detailsPays = getDetailsPays($id);
?>
      <?php foreach ($detailsPays as $dPays): ?> 
<ul class="list-group">
  <li class="list-group-item active">Détails</li>
  <li class="list-group-item">Pays : <?php echo $dPays->Name ?> </li>
  <li class="list-group-item">Capitale: <?php echo $capitale ?> </li>
  <li class="list-group-item">Continent : <?php echo $dPays->Continent ?> </li>
  <li class="list-group-item">Region : <?php echo $dPays->Region ?> </li>
  <li class="list-group-item">Année d'Independance : <?php echo $dPays->IndepYear ?> </li>
  <li class="list-group-item">Nom Local: <?php echo $dPays->LocalName ?> </li>
  <li class="list-group-item">Population : <?php echo $dPays->Population ?> </li>
  <li class="list-group-item">PIB: <?php echo $dPays->GNP?> </li>
  <li class="list-group-item">Type de Gouvernement: <?php echo $dPays->GovernmentForm ?> </li>
  <li class="list-group-item">Chef d'etat: <?php echo $dPays->HeadOfState ?> </li>

</ul>
<?php endforeach; ?>   
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
