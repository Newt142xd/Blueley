

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_online";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
<?php
include 'conexion.php';

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<img src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
        echo "<h3>" . $row['nombre'] . "</h3>";
        echo "<p>$" . $row['precio'] . "</p>";
        echo "<button>Añadir al Carrito</button>";
        echo "</div>";
        
    }
} else {
    echo "No hay productos disponibles.";
}
ALTER TABLE `pedidos` ADD `Perfumes` VARCHAR(15) NOT NULL AUTO_INCREMENT , ADD PRIMARY KEY (`Perfumes `);
$conn->close();
?>