<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Hasil Pencarian</h1>

    <?php
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];

        $query = "SELECT * FROM products WHERE nama LIKE '%$keyword%'";
        
        echo "<div class='debug-info'><b>Query dieksekusi:</b><br><code>$query</code></div>";
        
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='results-list'>";
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class='result-card'>";
                echo "<h3>" . $row['nama'] . "</h3>";
                echo "<p>ID Produk: " . $row['id'] . "</p>";
                
                echo "<div class='price'>Rp " . number_format($row['harga'], 0, ',', '.') . "</div>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>Tidak ada sepatu yang ditemukan.</p>";
        }
    }
    ?>

    <a href="index.php" class="back-link">&larr; Kembali ke Pencarian</a>
</div>

</body>
</html>