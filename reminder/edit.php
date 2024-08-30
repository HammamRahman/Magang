<?php
require 'database.php'; // Menghubungkan ke database

// Cek apakah parameter ID ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data pelanggan berdasarkan ID
    $sql = "SELECT * FROM tabelpelanggan WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak disediakan.";
    exit();
}

// Cek apakah form di-submit untuk update data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_cc = $_POST['nama_cc'];
    $alamat = $_POST['alamat'];
    $nomor_akun = $_POST['nomor_akun'];
    $nomor_kontrak = $_POST['nomor_kontrak'];
    $layanan = $_POST['layanan'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Update data
    $sql = "UPDATE tabelpelanggan SET nama_cc = ?, alamat = ?, nomor_akun = ?, nomor_kontrak = ?, layanan = ?, start_date = ?, end_date = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssi", $nama_cc, $alamat, $nomor_akun, $nomor_kontrak, $layanan, $start_date, $end_date, $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Data berhasil diUpdate.";
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
    }
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="dashboard.php">ContractManagement</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
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
                        <a class="nav-link" href="TambahData.php">
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
                    <h1 class="mt-4">Edit Data Pelanggan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Data</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="nama_cc" class="form-label">Nama CC</label>
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
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo htmlspecialchars($row['start_date']); ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo htmlspecialchars($row['end_date']); ?>" required>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

<?php
// Tutup koneksi
$conn->close();
?>
