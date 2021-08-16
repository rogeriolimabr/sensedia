<?php

// Composer Auto-load
require_once '../vendor/autoload.php';

// Carrega as configurações de aplicacções;
require_once '../config/app.php';

// Configura a base de dados no ORM;
use \App\Models\Database;
new Database();

// Routes
require_once '../routes/web.php';
require_once '../app/Router.php';