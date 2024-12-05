<?php
include "database/connection.php"
?>
<div id="top" class="row mb-3">
    <div class="col">
        <h3> Hapus Data Karywan</h3>
    </div>
    <div class="col">
        <a href="?page=karyawan" class="btn btn-primary float-end">
            <i class="fa fa-arrow-circle-left"></i>
            Kembali
        </a>
</div>
</div>
<div id="pesan" class="row mb-3">
    <div class="col">
        <?php
        include "database/connection.php";
        $nik = $_GET['nik'];

        $sql = "DELETE FROM karyawan WHERE nik = $nik";

        $result = mysqli_query($connection, $sql);
        if (!$result) {
            ?>
            <div class="alert alert-success" role="alert">
                <i class="fa fa-exclamation-circle"></i>
            <?php echo mysqli_error($connection) ?>
        </div>
    <?php
    }else {
        ?>
        <div class="alert alert-success" role="alert">
            <i class= "fa fa-exclamation-circle"><i>
                Hapus Data Berhasil
    </div>
    </div>
    <meta http-equiv="refresh" content="2;url=?page=karyawan">
    <?php
    }
    ?>
</div>
</div>