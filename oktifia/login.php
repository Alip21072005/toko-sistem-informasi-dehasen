<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin | Toko Boneka Oktifia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
    body {
        font-family: 'Poppins', sans-serif;
        /* Gradasi Pink yang manis */
        background: linear-gradient(135deg, #ff69b4 0%, #ffc0cb 100%);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .login-card {
        border: none;
        border-radius: 25px;
        box-shadow: 0 15px 35px rgba(255, 20, 147, 0.2);
        overflow: hidden;
        width: 100%;
        max-width: 400px;
        background: white;
    }

    .card-header {
        background-color: #fff;
        border-bottom: none;
        padding: 40px 30px 10px 30px;
        text-align: center;
    }

    .card-header h4 {
        font-weight: 600;
        color: #ff1493;
        /* Deep Pink */
        margin-bottom: 5px;
        letter-spacing: 1px;
    }

    .form-control {
        border-radius: 12px;
        padding: 12px 15px;
        border: 1px solid #ffc0cb;
    }

    .form-control:focus {
        border-color: #ff69b4;
        box-shadow: 0 0 0 0.25rem rgba(255, 105, 180, 0.2);
    }

    .btn-login {
        background-color: #ff69b4;
        border: none;
        border-radius: 12px;
        padding: 12px;
        font-weight: 600;
        transition: all 0.3s;
        color: white;
    }

    .btn-login:hover {
        background-color: #ff1493;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 20, 147, 0.3);
        color: white;
    }

    .icon-box {
        font-size: 3.5rem;
        color: #ff69b4;
        margin-bottom: 10px;
    }

    .input-group-text {
        background-color: #fff0f5 !important;
        border-color: #ffc0cb;
        color: #ff69b4;
    }
    </style>
</head>

<body>

    <div class="login-card card">
        <div class="card-header">
            <div class="icon-box">
                <i class="bi bi-person-heart"></i>
            </div>
            <h4>OKTIFIA ADMIN</h4>
            <p class="text-muted small">Kelola koleksi boneka kesayangan</p>
        </div>
        <div class="card-body p-4">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted text-uppercase">Username</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control border-start-0" name="user"
                            placeholder="Username Oktifia" required autofocus>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label small fw-bold text-muted text-uppercase">Password</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control border-start-0" name="pass"
                            placeholder="Password Admin" required>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-login w-100 shadow-sm text-uppercase">
                    Masuk Sekarang
                </button>
            </form>
            <div class="text-center mt-3">
                <a href="./" class="text-decoration-none small" style="color: #ff69b4;"><i class="bi bi-arrow-left"></i>
                    Kembali ke Toko</a>
            </div>
        </div>
        <div class="card-footer bg-light border-top-0 py-3 text-center">
            <small class="text-muted">&copy; 2025 <strong>Toko Boneka Oktifia</strong></small>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        session_start();
        include 'koneksi.php';

        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $cek = mysqli_query($conn, "SELECT * FROM admin WHERE username ='" . $user . "' AND password = '" . MD5($pass) . "'");

        if (mysqli_num_rows($cek) > 0) {
            $d = mysqli_fetch_object($cek);
            $_SESSION['status_login'] = true;
            $_SESSION['a_global'] = $d;
            $_SESSION['id'] = $d->idadmin;
            echo '<script>window.location="dashboard.php"</script>';
        } else {
            echo '<script>alert("Maaf Oktifia, Username atau Password salah!")</script>';
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>