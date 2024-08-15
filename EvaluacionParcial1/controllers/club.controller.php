<?php
require_once 'club.models.php';

class ClubController {
    private $clubModel;

    public function __construct() {
        $this->clubModel = new ClubModel();
    }

    public function createClub($nombre, $deporte, $ubicacion, $fecha_fundacion) {
        return $this->clubModel->create($nombre, $deporte, $ubicacion, $fecha_fundacion);
    }

    public function getClub($club_id) {
        return $this->clubModel->read($club_id);
    }

    public function updateClub($club_id, $nombre, $deporte, $ubicacion, $fecha_fundacion) {
        return $this->clubModel->update($club_id, $nombre, $deporte, $ubicacion, $fecha_fundacion);
    }

    public function deleteClub($club_id) {
        return $this->clubModel->delete($club_id);
    }

    public function listClubs() {
        return $this->clubModel->getAll();
    }
}
?>