<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Tabel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
    </script>

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <h1></h1>
    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID Produk</th>
            <th>Nama </th>
            <th>Merk</th>
            <th>Kategori</th>
            <th>IDKategori</th>
            <th>Jumlah</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Update</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <?php while($produk){?>

            <td>Row 1 Data 1</td>
            <td><?= $produk->nama; ?></td>
          </tr>
          <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
          </tr>
        <?php } ?>
    </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>


</body>

</html>