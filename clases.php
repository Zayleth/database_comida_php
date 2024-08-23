<?php
// conexion base de datos por POO
class Database {
    private $host = 'localhost'; // ubicacion
    private $user = 'root'; // usuario
    private $password = '';
    private $database = 'comida';
    public $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
	
	public function disconnect() {
        $this->conn->close();
    }
}

// para evaluar las categorias (tabla)
class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
        $this->db->connect();
    }

    public function mostrarselect() {
        $query = "SELECT * FROM categorias";
        $result = $this->db->conn->query($query);
        echo "<select name='categoria'>";

        while ($categoria = $result->fetch_assoc()) {
            echo "<option value='" . $categoria['id'] . "'>" . $categoria['nombre'] . "</option>";
        }
    echo "</select>";
    }

    public function guardarcomidas($nombre, $precio, $categoria) {
        $query = "INSERT INTO platos VALUES ('','$categoria','$nombre', '$precio',0)";
        if ($this->db->conn->query($query)) {
            echo "Se ingreso con exito";
        } else {
            echo "Fallo al ingresar";
        }
    }

}
	?>