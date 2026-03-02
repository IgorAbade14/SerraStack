<?php
$host = 'db';
$user = 'root';
$pass = '07ghosth';
$db   = 'mysql'; // Usando o banco padrão do MySQL para facilitar

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Erro de conexão: " . $conn->connect_error);
}

echo "<h1>🚀 SerraStack Conectado!</h1>";

// 1. Criar tabela de logs se não existir
$tableSql = "CREATE TABLE IF NOT EXISTS acessos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($tableSql);

// 2. Inserir um novo acesso
$conn->query("INSERT INTO acessos () VALUES ()");

// 3. Listar os últimos acessos
echo "<h3>Últimos acessos registrados no Banco:</h3>";
$result = $conn->query("SELECT * FROM acessos ORDER BY id DESC LIMIT 5");

while($row = $result->fetch_assoc()) {
    echo "🔹 ID: " . $row['id'] . " - Horário: " . $row['data_hora'] . "<br>";
}

$conn->close();
?>