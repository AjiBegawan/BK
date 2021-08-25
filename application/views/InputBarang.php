<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Input Barang</title>
</head>

<body>

    <div class="container">
        <h1>Input Barang</h1>
        <form  method="POST" action="<?php echo site_url('CRUDBarang/prosesInputBarang'); ?>">
            <div class="form-group">
                <label >Hari</label>
                <input type="text" class="form-control" 
                    placeholder="<?= $hari =  date("d-m-Y") ?>" name="<?= $hari =  date("d-m-Y") ?>" readonly>
            </div>
            <div class="form-group">
                <label>ID Barang</label>
                <input type="text" class="form-control" placeholder="ID Barang" name="id" require>
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama" require>
            </div>
            <div class="form-group">
                <label>Merk</label>
                <input type="text" class="form-control" placeholder="Nama Barang" name="merk" require>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori Barang</label>
                <select class="form-control" name="kategori" require>
                    <option selected>--- Pilih Kategori Barang ---</option>
                    <option>Toren</option>
                    <option>Pipa</option>
                    <option>Semen</option>
                    <option>Toilet</option>
                    <option>Besi</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" require>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script>
    var today = new Date();
    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    </script>
</body>

</html>