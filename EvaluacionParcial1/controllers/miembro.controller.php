<?php
require_once 'miembro.models.php';

class MiembroController {
    private $miembroModel;

    public function __construct() {
        $this->miembroModel = new MiembroModel();
    }

    public function createMiembro($nombre, $apellido, $email, $telefono) {
        return $this->miembroModel->create($nombre, $apellido, $email, $telefono);
    }

    public function getMiembro($miembro_id) {
        return $this->miembroModel->read($miembro_id);
    }

    public function updateMiembro($miembro_id, $nombre, $apellido, $email, $telefono) {
        return $this->miembroModel->update($miembro_id, $nombre, $apellido, $email, $telefono);
    }

    public function deleteMiembro($miembro_id) {
        return $this->miembroModel->delete($miembro_id);
    }

    public function listMiembros() {
        return $this->miembroModel->getAll();
    }
}
?>