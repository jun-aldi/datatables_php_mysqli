<?php
    include "dbconfig.php";
    //koneksi
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    //pengecekan koneksi
    if ($conn->connect_error){
        die("koneksi gagal".$conn->connect_error);
    } else {
if(isset($_POST['update']))
 
{
    $id_tma=$_POST['id_tma'];
    $nilai=$_POST['nilai'];
    $waktu=$_POST['waktu'];
// update	data

$query = "UPDATE tma SET id_tma='$id_tma', nilai='$nilai',waktu='$waktu' WHERE id_tma=$id_tma";
$result= $conn->query($query);
$conn->close();
//	Redirect kembali ke halaman utama 
header("Location: index.php");
}


//	Mengambil ID dan menampilkan data berdasarkan ID yang didapat 
$id_tma = $_GET['id_tma'];

//	Fetch user data

$query ="SELECT * FROM tma WHERE id_tma=$id_tma";
$result= $conn->query($query);
while($data = $result->fetch_assoc())

{
    $id_tma=$data['id_tma'];
    $nilai=$data['nilai'];
    $waktu=$data['waktu'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Edit Data</title>
</head>
<body>
    <div class="container">
    <h1>Edit Data</h1>
    <form name="update_user" method="post" action="dbedit.php">
    <div class="form-group row">
        <label for="id_tma" class="col-sm-2 col-form-label">ID Tma</label>
        <div class="col-sm-10">
        <input type="number" readonly class="form-control-plaintext" name="id_tma" id="id_tma" required value=<?php echo $id_tma ?>>
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
        <div class="col-sm-10">
        <input type="number" settype="any" id="nilai" name="nilai" required value=<?php echo $nilai ?>>
        </div>
    </div>
    <div class="form-group row">
        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
        <div class="col-sm-10">
        <input type="date" id="waktu" name="waktu" required value=<?php echo $waktu ?>>
        </div>
    </div>
    <input class="btn btn-info" type="submit" name="update" value="Update">
    </form>
    </div>
 
</body>
</html>
<?php
}
?>