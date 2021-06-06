<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <title>Datables</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Client Slide</a>
                        </li>
                        <li class="nav-item">
                            <a href="serverside.php" class="nav-link"> Server Side</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Tinggi Permukaan Air - Server Side</h5>
                            <hr>
                            <table id="tabel-data" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nilai</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'koneksi.php';
                                    $query = "SELECT * FROM tma ";
                                    $tma = mysqli_query($koneksi, $query);
                                    while($row = mysqli_fetch_array($tma))
                                    {
                                        echo " <tr>
                                        <td>" .$row['id_tma']."</td>
                                        <td>" .$row['nilai']." meter</td>
                                        <td>" .$row['waktu']."</td>
                                        <td><a href='dbedit.php?id_tma=$row[id_tma]' class='btn btn-info'>Edit</a>
                                        <a href='dbdelete.php?id_tma=$row[id_tma]' class='btn btn-danger'>Hapus</a></td>
                                        </tr>";
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
  </body>
</html>