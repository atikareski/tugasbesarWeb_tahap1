<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Form Pemesanan Kendaraan | DriveNow</title>
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.form-container');

        form.addEventListener('submit', function(event) {
            const username = document.getElementById('username').value.trim();
            const nama = document.getElementById('nama').value.trim();
            const vehicle = document.getElementById('vehicle').value;
            const telpon = document.getElementById('telpon').value.trim();

            if (username === '' || nama === '' || vehicle === '' || telpon === '' ) {
                event.preventDefault(); // Mencegah pengiriman form
                alert('Semua field harus diisi!');
            } else {
                alert('Pemesanan berhasil! Terima kasih telah memesan di DriveNow.');
            }
        });
    });
</script>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1 class="navbar-brand text-white m-0 fw-bold">DriveNow</h1>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-3"><a class="nav-link text-white" href="LandingPage.php">Home</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="DaftarKendaraan.php">Daftar Kendaraan</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="Login.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <header class="judul-form text-left my-10">
        <h2>Form Pemesanan Kendaraan</h2>
        <p>Isi data berikut untuk memesan kendaraan pilihanmu.</p>
    </header>
    <form class="form-container" method="post" style="max-width: 600px;">
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="mb-3">
            <label for="telpon" class="form-label">Nomor Telepon (WA):</label>
            <input type="tel" id="telpon" name="telpon" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" class="form-control" placeholder="0812-3456-7890">
        </div>
        <div class="mb-3">
            <label for="vehicle" class="form-label">Pilih Kendaraan:</label>
            <select id="vehicle" name="vehicle" class="form-select">
                <option value="" disabled selected>Pilih Kendaraan</option>
                <option value="mobil-alphard">Toyota Alphard</option>
                <option value="mobil-avanza">Toyota Avanza</option>
                <option value="motor-nmax">Yamaha NMAX</option>
                <option value="motor-vario">Honda Vario</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="rental-period" class="form-label">Lama Sewa (hari):</label>
            <input type="number" id="rental-period" name="rental-period" class="form-control" min="1" placeholder="0">
        </div>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <button type="submit" class="btn btn-warning text-white px-4">Pesan</button>
            <button type="reset" class="btn btn-secondary px-4">Reset</button>
        </div>
    </form>
    <footer>
        <p class="m-0">&copy; 2025 DriveNow. All rights reserved.</p>
    </footer>
</body>
</html>
