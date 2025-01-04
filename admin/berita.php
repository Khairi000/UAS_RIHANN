<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Berita</h1>
</div>

<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'view';
switch ($aksi) {
    case 'view':
        ?>
        <?php
        include '../koneksi.php';
        ?>


        <div class="container">
            <div class="py-2">
                <a href="index.php?p=berita&aksi=input" class="btn btn-success">Input Data Baru</a>
            </div>
            <table id="example" class="table table-bordered border border-black">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Create_at</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $user_name = isset($_SESSION["user"]) ? $_SESSION["user"] : 'Unknown';
                    $user_email = isset($_SESSION["user_email"]) ? $_SESSION["user_email"] : 'No email';

                    // Query untuk mengambil data dari tabel user, berita, dan kategori
                    $result = mysqli_query($db, "SELECT berita.*, kategori.nama_kategori FROM user 
                                     INNER JOIN berita ON user.id = berita.user_id
                                     INNER JOIN kategori ON kategori.id = berita.kategori_id");

                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row['judul_berita'] . "</td>";
                        echo "<td>" . $row['nama_kategori'] . "</td>";
                        echo "<td>" . $user_name . "</td>";
                        echo "<td>" . $user_email . "</td>";
                        echo "<td>" . $row['date_created'] . "</td>";
                        echo "<td>
                    <a href='index.php?p=berita&aksi=edit&id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='proses_berita.php?proses=delete&id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Delete</a>
                 </td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>

        </div>



        <?php
        break;

    case 'input':
        ?>

        <body>
            <div class="container">

                <div class="row">
                    <div class="col-8">
                        <form action="proses_berita.php?proses=insert" method="post" enctype="multipart/form-data">

                            <!-- Judul -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="judul_berita">
                                </div>
                            </div>

                            <!-- Kategori -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-8">
                                    <select name="kategori_id" class="form-select">
                                        <option value="">--Pilih Kategori--</option>
                                        <?php
                                        include '../koneksi.php';
                                        $ambil_kategori = mysqli_query($db, "SELECT * FROM kategori");
                                        while ($data_kategori = mysqli_fetch_assoc($ambil_kategori)) {
                                            echo "<option value='" . $data_kategori['id'] . "'>" . $data_kategori['nama_kategori'] . "</option>";
                                        }
                                        ?>

                                    </select>

                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">File Upload</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="filetoupload">
                                </div>
                            </div>

                            <!-- Berita -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Berita</label>
                                <div class="col-sm-8">
                                    <textarea name="isi_berita" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-8">

                                    <input type="submit" name="submit" class="btn btn-primary">
                                    <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                                    <a href="?p=berita" class="btn btn-success">Lihat Berita</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




            </div>

        </body>


        <?php
        break;

    case 'edit':
        ?>
        <?php
        include '../koneksi.php';

        if (!isset($_GET['id']) || empty($_GET['id'])) {
            echo "ID tidak valid!";
            exit;
        }

        $id = $_GET['id'];
        $query = mysqli_query($db, "SELECT berita.*, kategori.nama_kategori 
                            FROM berita 
                            INNER JOIN kategori ON kategori.id = berita.kategori_id 
                            WHERE berita.id = '$id'");
        $data = mysqli_fetch_assoc($query);

        if (!$data) {
            echo "Data tidak ditemukan!";
            exit;
        }
        ?>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <form action="proses_berita.php?proses=update" class="form-control" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">

                            <!-- Judul -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="judul_berita"
                                        value="<?= $data['judul_berita'] ?>" required>
                                </div>
                            </div>


                            <!-- Kategori -->

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-8">
                                    <select name="kategori_id" class="form-select">
                                        <option value="">--Pilih Kategori--</option>
                                        <?php
                                        $ambil_kategori = mysqli_query($db, "SELECT * FROM kategori");
                                        while ($data_kategori = mysqli_fetch_assoc($ambil_kategori)) {
                                            $selected = ($data_kategori['id'] == $data['kategori_id']) ? 'selected' : '';
                                            echo "<option value='" . $data_kategori['id'] . "' $selected>" . $data_kategori['nama_kategori'] . "</option>";
                                        }
                                        ?>

                                    </select>

                                </div>
                            </div>



                            <!-- File Upload -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">File Upload</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="fileupload">
                                </div>
                            </div>

                            <!-- Berita -->

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Berita</label>
                                <div class="col-sm-8">
                                    <textarea name="isi_berita" class="form-control" rows="5"><?= $data['isi_berita'] ?></textarea>
                                </div>
                            </div>


                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>



        <?php
        break;
}

?>