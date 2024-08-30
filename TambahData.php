<?php
require 'database.php';
require 'cek.php';

$message = ''; // Variabel untuk menyimpan pesan
$message_type = ''; // Variabel untuk menyimpan tipe pesan (success atau error)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_cc = $_POST['nama_cc'];
    $alamat = $_POST['alamat'];
    $nomor_akun = $_POST['nomor_akun'];
    $nomor_kontrak = $_POST['nomor_kontrak'];
    $layanan = $_POST['layanan'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "INSERT INTO tabelpelanggan (nama_cc, alamat, nomor_akun, nomor_kontrak, layanan, start_date, end_date) 
            VALUES ('$nama_cc', '$alamat', '$nomor_akun', '$nomor_kontrak', '$layanan', '$start_date', '$end_date')";

    if (mysqli_query($conn, $sql)) {
        // Pesan sukses
        $message = "Data berhasil ditambahkan.";
        $message_type = "success";
    } else {
        // Pesan error
        $message = "Data gagal ditambahkan: " . mysqli_error($conn);
        $message_type = "danger";
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Data</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="dashboard.php">ContractManagement</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="tambahdata.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Tambah Data
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tambah Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Data</li>
                    </ol>

                    <!-- Menampilkan pesan sukses atau gagal -->
                    <?php if (!empty($message)): ?>
                        <div id="message-alert" class="alert alert-<?php echo $message_type; ?>" role="alert">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="nama_cc" class="form-label">Nama CC</label>
                            <input type="text" class="form-control" id="nama_cc" name="nama_cc" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_akun" class="form-label">Nomor Akun</label>
                            <input type="text" class="form-control" id="nomor_akun" name="nomor_akun" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_kontrak" class="form-label">Nomor Kontrak</label>
                            <input type="text" class="form-control" id="nomor_kontrak" name="nomor_kontrak" required>
                        </div>
                        <div class="mb-3">
                            <label for="layanan" class="form-label">Layanan</label>
                            <input type="text" class="form-control" id="layanan" name="layanan" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <!-- Script untuk menghilangkan pesan setelah beberapa detik -->
    <script>
        // Menghilangkan pesan setelah 5 detik
        setTimeout(function() {
            var alert = document.getElementById('message-alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 3000); // 5000 milidetik = 5 detik
    </script>
</body>
</html>
