<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Login | DriveNow</title>
    <meta http-equiv="refresh" content="0; url=LandingPage.php">
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loginForm = document.querySelector('.login-container form');
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');

        loginForm.addEventListener('submit', function(event) {
        if (usernameInput.value.trim() === '' || passwordInput.value.trim() === '') {
            event.preventDefault(); // Mencegah pengiriman form
            alert('Username dan Password tidak boleh kosong!');
        } else {
            alert('Login berhasil! Mengalihkan ke halaman utama...');
            window.location.href = "userPage.php";
        }
        })
    });
</script>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1 class="navbar-brand text-white m-0 fw-bold">DriveNow</h1>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-3"><a class="nav-link text-white" href="LandingPage.php">Home</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="DaftarKendaraan.php">Daftar Kendaraan</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="#login-container">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="login-container shadow-lg">
        <h2 class="text-center text-white mb-6">Login</h2>
        <form action="#" method="post" class="d-flex flex-column align-items-center">
            <input type="text" class="form-control mb-4" id="username" placeholder="Username">
            <input type="password" class="form-control mb-4" id="password" placeholder="Password">
            <button type="submit" class="btn btn-warning text-white px-4 py-8">Login</button>
        </form>
    </div>
    <footer>
        <p class="m-0">&copy; 2025 DriveNow. All rights reserved.</p>
    </footer>
</body>
</html>
