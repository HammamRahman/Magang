<?php
require 'database.php';
require 'cek.php';

// Cek apakah parameter 'id' tersedia
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data berdasarkan ID
    $sql = "SELECT * FROM tabelpelanggan WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak tersedia!";
    exit;
}

// Proses update data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_cc = $_POST['nama_cc'];
    $alamat = $_POST['alamat'];
    $nomor_akun = $_POST['nomor_akun'];
    $nomor_kontrak = $_POST['nomor_kontrak'];
    $layanan = $_POST['layanan'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Pastikan variabel yang digunakan dalam SQL sesuai dengan nama kolom
    $sql = "UPDATE tabelpelanggan SET nama_cc = '$name_cc', alamat = '$alamat', nomor_akun = '$nomor_akun', nomor_kontrak = '$nomor_kontrak', layanan = '$layanan', start_date = '$start_date', end_date = '$end_date' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'Data berhasil diperbarui!';
    } else {
        $_SESSION['message'] = 'Error deleting record: ' . $conn->error;
    }

    // Redirect setelah hapus
    header('Location: data.php');
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Data</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="data.php">ContractManagement</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar -->
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
                            <a class="nav-link" href="data.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Daata Pelanggan
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
                        <h1 class="mt-4">Edit Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="data.php">Data Pelanggan</a></li>
                            <li class="breadcrumb-item active">Edit Data</li>
                        </ol>
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="mb-3">
                                        <label for="nama_cc" class="form-label">Name CC</label>
                                        <input type="text" class="form-control" id="nama_cc" name="nama_cc" value="<?php echo htmlspecialchars($row['nama_cc']); ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo htmlspecialchars($row['alamat']); ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nomor_akun" class="form-label">Nomor Akun</label>
                                        <input type="text" class="form-control" id="nomor_akun" name="nomor_akun" value="<?php echo htmlspecialchars($row['nomor_akun']); ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nomor_kontrak" class="form-label">Nomor Kontrak</label>
                                        <input type="text" class="form-control" id="nomor_kontrak" name="nomor_kontrak" value="<?php echo htmlspecialchars($row['nomor_kontrak']); ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="layanan" class="form-label">Layanan</label>
                                        <input type="text" class="form-control" id="layanan" name="layanan" value="<?php echo htmlspecialchars($row['layanan']); ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo htmlspecialchars($row['start_date']); ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo htmlspecialchars($row['end_date']); ?>" required>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="data.php" class="btn btn-secondary">Kembali</a>
                                        &nbsp;&nbsp;
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        
                                    </div>
                                    
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
