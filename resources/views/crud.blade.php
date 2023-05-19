<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>User CRUD</title>
</head>
<body>
    <div class="container mt-3">
        <a href="add.php" class="btn btn-primary btn-md mb-3">Tambah</a>

        <table class="table table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Address</th>
                <th>Aksi</th>
            </thead>

            {{-- <?php
                $sqlGet = "SELECT * FROM users";
                $query = mysqli_query($conn, $sqlGet);

                while ($data = mysqli_fetch_array($query)) {
                    echo "
                        <tbody>
                            <tr>
                                <td>$data[id]</td>
                                <td>
                                    <a href='' class='btn btn-sm btn-primary'>Detail</a>
                                    <a href='update.php?id=$data[id]' class='btn btn-sm btn-warning'>Edit</a>
                                    <a href='delete.php?id=$data[id]' class='btn btn-sm btn-danger'>Hapus</a>
                                </td>    
                                <td>$data[name]</td>
                                <td>$data[email]</td>
                                <td>$data[phone]</td>
                                <td>$data[role]</td>
                                <td>$data[address]</td>
                            </tr>
                        </tbody>
                    ";
                }
            ?> --}}
        </table>

        <a href="logout.php" class="btn btn-sm btn-primary">Logout</a>
    </div>
</body>
</html>