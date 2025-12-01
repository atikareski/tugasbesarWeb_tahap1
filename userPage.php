<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>User | DriveNow</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1 class="navbar-brand text-white m-0 fw-bold">DriveNow</h1>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-3"><a class="nav-link text-white" href="LandingPage.php">Home</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="DaftarKendaraan.php">Daftar Kendaraan</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="#">Daftar Pesanan</a></li>
            </ul>
        </div>
    </nav>
    <div class="judul-daftar container mt-65 text-left">
        <h2>Hello, User</h2>
    </div>
    <div class="judul-daftar container mt-65 text-left">
        <h4>Daftar Pesanan</h4>
    </div>
    <div class="tabel-daftar">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Nomor Telepon</th>
                        <th>Kendaraan</th>
                        <th>Lama Sewa (Hari)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Atika</td>
                        <td>08123456789</td>
                        <td>Yamaha NMAX</td>
                        <td>3</td>
                        <td><a href="#">Delete</a> <a href="#">Edit</a></td>
                    </tr>
                    
                </tbody>
            </table>
    </div>
    <div class="userPage-button ">
            <a href="LandingPage.php" class="btn btn-warning text-white px-4 py-2 rounded-pill">Kembali ke Home</a>
            <a href="logout.php" class="btn btn-danger text-white px-4 py-2 rounded-pill">Logout</a>
    </div>
    <footer>
        <p class="m-0">&copy; 2025 DriveNow. All rights reserved.</p>
    </footer>
</body>
</html>
