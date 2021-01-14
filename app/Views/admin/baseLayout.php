<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/uin.png'); ?>">
    <title>ADMIN | <?= $this->renderSection('title') ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/adminStyle.css'); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css'); ?>" />
</head>

<body>
    <div class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; ADMIN</span>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="/indexAdmin">DASHBOARD</a>
                <a href="/fotoFU">FOTO</a>
                <a href="/vidioFU">VIDIO</a>
                <a href="/eventFU">EVENT</a>
                <a href="/artikel">LAINNYA</a>
                <a href="/logout">LOGOUT</a>
            </div>
        </div>
    </div>
    </br>
    <?= $this->renderSection('admin') ?>

    </br>
    <footer class="bg-dark pt-2">
        <p class="mt-2"> Admin Fakultas Ushuludin 2020.All Rights Reserved</p>
        </p>
    </footer>
    </div>












    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    </script>

</body>

</html>