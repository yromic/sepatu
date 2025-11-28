<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu Modern</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>👟 Toko Sepatu</h1>
        <p>Temukan koleksi sepatu terbaik kami.</p>
        
        <form action="search.php" method="GET">
            <input type="text" name="keyword" placeholder="Cari sepatu (misal: Nike)..." required>
            <button type="submit">Cari</button>
        </form>
    </div>

</body>
</html>