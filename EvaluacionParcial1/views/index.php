<?php
require_once 'club.controller.php';
require_once 'miembro.controller.php';

$clubController = new ClubController();
$miembroController = new MiembroController();

// Crear un club
$clubController->createClub('Club de Fútbol', 'Fútbol', 'Ciudad de México', '2000-01-01');

// Obtener todos los clubes
$clubs = $clubController->listClubs();
print_r($clubs);

// Crear un miembro
$miembroController->createMiembro('Juan', 'Pérez', 'juan.perez@example.com', '555-1234');

// Obtener todos los miembros
$miembros = $miembrosController->listMiembros();
print_r($miembros);
?>