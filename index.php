<!DOCTYPE html>
<html>
<head>
    <title>Beranda Wisata</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        header {
            background-color: rgb(34, 92, 147);
            padding: 30px;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        header h1 {
            font-family: Algerian;
            margin: 0 0 10px 0;
            width: 100%;
            text-align: center;
        }

        .navigasi-kiri {
            text-align: left;
            padding-left: 20px;
            margin-top: 10px;
        }

        .menulink {
            display: inline;
            margin-right: 20px;
            background: none;
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border: none;
            padding: 0;
        }

        .menulink:hover {
            text-decoration: underline;
        }

        .paket-item {
            width: 180px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fdfdfd;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 10px;
            display: inline-block;
            position: relative;
            height: 270px;
        }

        .paket-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 45px;
            margin-top: 10px;
        }

        .bottonlink {
            display: inline-block;
            padding: 10px 20px;
            background-color: #a0d4f6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-kecil {
            position: inline-block;
            bottom: 10px;
            left: 10px;
            width: 100px;
            padding: 8px 12px;
            background-color:rgb(95, 169, 218);
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .btn-kecil:hover {
            background-color:rgb(27, 78, 109);
        }

        .footer {
            background-color: #b3e0ee;
            padding: 40px 0;
            margin-top: 40px;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 100;
            padding: 0 50px;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
            margin: 10px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-section p,
        .footer-section li,
        .footer-section a {
            font-size: 14px;
            color: black;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .footer-section ul {
            list-style: disc;
            padding-left: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Selamat Datang di pilihan destinasi anda</h1>
    <nav class="navigasi-kiri">
        <a href="index.php" class="menulink">Beranda</a>
        <a href="pesan.php" class="menulink">Pesan Paket</a>
    </nav>
</header>

<div style="text-align:center; margin-top: 20px;">
    <img src="bali-island_PhotoGrid.png" width="1400" height="490" alt="Gambar Wisata">
    <br>
    <a href="https://youtu.be/WuE6kGzaAvs?si=B6zxxB9HEHUQD9DC" target="_blank" class="bottonlink">Tonton Video</a>
</div>

<h2 style="text-align:center;">Daftar Paket</h2>
<div class="paket-container">
    <div class="paket-item">
        <img src="paket.jpeg" width="150">
        <p>Paket ke Bali - 2 Hari</p>
        <a href="pesan.php" class="btn-kecil">Pesan Paket</a>
    </div>
    <div class="paket-item">
        <img src="paket (3).jpeg" width="150">
        <p>Paket Raja Ampat - 3 Hari</p>
        <a href="pesan.php" class="btn-kecil">Pesan Paket</a>
    </div>
    <div class="paket-item">
        <img src="jogja.jpeg" width="150">
        <p>Paket ke Yogyakarta - 3 Hari</p>
        <a href="pesan.php" class="btn-kecil">Pesan Paket</a>
    </div>
    <div class="paket-item">
        <img src="kalimantan.jpeg" width="150">
        <p>Paket ke Kalimantan - 3 Hari</p>
        <a href="pesan.php" class="btn-kecil">Pesan Paket</a>
    </div>
</div>

<footer class="footer">
  <div class="footer-container">
    <div class="footer-section">
      <h3>About Us</h3>
      <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum.</strong></p>
    </div>

    <div class="footer-section">
      <h3>Links</h3>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>Contact Us</h3>
      <p>123 Main Street, Anytown, USA</p>
    </div>
  </div>
</footer>

</body>
</html>
