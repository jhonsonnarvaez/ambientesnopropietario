<?php

$conn = new mysqli($host, $usuario, $contrasena, $bdd);

$user = $_POST['usuario'];


$q_buscar = "SELECT * FROM registro WHERE usuario = '" . $user . "'";
$result = $conn->query($q_buscar);
$num_rows = $result->num_rows;


if ($num_rows != 0) {
    echo "El nombre de usuario ya existe";
}

function isUsernameAvailable($username) {
    $this->db->select('usuario');
    $this->db->where('LOWER(usuario)=', strtolower($usuario));
    $query = $this->db->get($this->usersTable);
    if ($query->num_rows() == 0) {
        return true;
    } else {
        return false;
    }
}

?>