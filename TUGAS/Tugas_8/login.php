    <!DOCTYPE html>
    <html>
    <head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container mt-5">
        <style>
            .width {
                width: 180px;
            }
        </style>
    <h2> Masuk kedalam sistem</h2>
    <?php if (isset($_GET['message'])): ?>
        <div class="alert alert-info"><?= htmlspecialchars($_GET['message']) ?></div>
    <?php endif; ?>
    <form method="post" action="proses_login.php">
        <div class="mb-3">
            <label>Nama pengguna :</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kata sandi :</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <li class="nav-item text-decoration-none list-unstyled mt-5 fs-3 text-center rounded text-white">
        <a class="nav-link bg-primary width rounded" href="../../index.php">Landing Page</a>
    </li>
    </body>
    </html>