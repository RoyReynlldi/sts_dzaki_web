<?php
// Query untuk mengambil data yang akan ditampilkan di sidebar
$sql = "SELECT id, barang_barang FROM menu";
$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <div id="sidebar">
        <h2>Menu</h2>
        <ul>
            <?php
            // Menampilkan data dari query SQL di sidebar
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li><a href='editbarang.php?id=" . $row["id"] . "'>" . $row["user_username"] . "</a></li>";
                }
            } else {
                echo "0 hasil";
            }
            ?>
        </ul>
    </div>
    <div id="content">
        <!-- Konten utama dari halaman web -->
    </div>
</body>
</html>
