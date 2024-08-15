<?php
require_once 'conexion.php';

class MiembroModel {
    public function create($nombre, $apellido, $email, $telefono) {
        global $pdo;
        $sql = "INSERT INTO Miembros (nombre, apellido, email, telefono) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nombre, $apellido, $email, $telefono]);
    }

    public function read($miembro_id) {
        global $pdo;
        $sql = "SELECT * FROM Miembros WHERE miembro_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$miembro_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($miembro_id, $nombre, $apellido, $email, $telefono) {
        global $pdo;
        $sql = "UPDATE Miembros SET nombre = ?, apellido = ?, email = ?, telefono = ? WHERE miembro_id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nombre, $apellido, $email, $telefono, $miembro_id]);
    }

    public function delete($miembro_id) {
        global $pdo;
        $sql = "DELETE FROM Miembros WHERE miembro_id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$miembro_id]);
    }

    public function getAll() {
        global $pdo;
        $sql = "SELECT * FROM Miembros";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>