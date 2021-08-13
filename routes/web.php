<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/home', array('controller' => 'PessoaController', 'method'=>'index')));
$routes->add('search', new Route(constant('URL_SUBFOLDER') . '/search/?keywords={keywords}', array('controller' => 'PessoaController', 'method'=>'search'), array('keywords' => '.+')));
$routes->add('edit', new Route(constant('URL_SUBFOLDER') . '/edit/{id}', array('controller' => 'PessoaController', 'method'=>'edit'), array('id' => '[0-9]+')));
$routes->add('delete', new Route(constant('URL_SUBFOLDER') . '/delete/{id}', array('controller' => 'PessoaController', 'method'=>'delete'), array('id' => '[0-9]+')));
$routes->add('save', new Route(constant('URL_SUBFOLDER') . '/save/{id}', array('controller' => 'PessoaController', 'method'=>'save'), array('id' => '[0-9]+')));
$routes->add('show', new Route(constant('URL_SUBFOLDER') . '/show/{id}', array('controller' => 'PessoaController', 'method'=>'show'), array('id' => '[0-9]+')));