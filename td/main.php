<?php
require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\DependencyInjection\ContainerBuilder;


$container = new ContainerBuilder();
$container->register('vehicule','td\Voiture')
    ->setShared(false);

$unevoiture = $container->get('vehicule');
$unevoiture->demarre();

$uneAutrevoiture = $container->get('vehicule');
$uneAutrevoiture->demarre();
