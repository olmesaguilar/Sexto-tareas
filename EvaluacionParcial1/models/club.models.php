<?php
require_once 'conexion.php';

class ClubModel {
    public function create($nombre, $deporte, $ubicacion, $fecha_fundacion) {
        global $pdo;
        $sql = "INSERT INTO Clubes (nombre, deporte, ubicacion, fecha_fundacion) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nombre, $deporte, $ubicacion, $fecha_fundacion]);
    }

    public function read($club_id) {
        global $pdo;
        $sql = "SELECT * FROM Clubes WHERE club_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$club_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($club_id, $nombre, $deporte, $ubicacion, $fecha_fundacion) {
        global $pdo;
        $sql = "UPDATE Clubes SET nombre = ?, deporte = ?, ubicacion = ?, fecha_fundacion = ? WHERE club_id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nombre, $deporte, $ubicacion, $fecha_fundacion, $club_id]);
    }

    public function delete($club_id) {
        global $pdo;
        $sql = "DELETE FROM Clubes WHERE club_id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$club_id]);
    }

    public function getAll() {
        global $pdo;
        $sql = "SELECT * FROM Clubes";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>