<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//RUTA DE CONEXION BDD
$routes->get('/testdb','cBdd::testBdd');
//RUTA DEL MO
$routes->get('/inv','cBdd::Select_Controlador_bdd');