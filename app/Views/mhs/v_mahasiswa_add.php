<!-- application/views/tambah_mahasiswa.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h3>Tambah Mahasiswa</h3>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <?= form_open('mahasiswa/save'); ?>

        <div class="form-group">
            <?= form_label('NIK:', 'nik'); ?>
            <?= form_input([
                'name' => 'nik',
                'id' => 'nik',
                'class' => 'form-control',
                'value' => set_value('nik'),
                'placeholder' => 'Masukkan NIK'
            ]); ?>
        </div>

        <div class="form-group">
            <?= form_label('Nama:', 'nama'); ?>
            <?= form_input([
                'name' => 'nama',
                'id' => 'nama',
                'class' => 'form-control',
                'value' => set_value('nama'),
                'placeholder' => 'Masukkan Nama'
            ]); ?>
        </div>

        <div class="form-group">
            <?= form_label('Jenis Kelamin:', 'jenis_kelamin'); ?><br>
            <?= form_radio('jenis_kelamin', 'Laki-laki', set_radio('jenis_kelamin', 'Laki-laki'), ['id' => 'laki-laki']); ?>
            <?= form_label('Laki-laki', 'laki-laki'); ?>
            <br>
            <?= form_radio('jenis_kelamin', 'Perempuan', set_radio('jenis_kelamin', 'Perempuan'), ['id' => 'perempuan']); ?>
            <?= form_label('Perempuan', 'perempuan'); ?>
        </div>

        <div class="form-group">
            <?= form_label('Tanggal Lahir:', 'tgl_lahir'); ?>
            <?= form_input([
                'name' => 'tgl_lahir',
                'id' => 'tgl_lahir',
                'class' => 'form-control',
                'type' => 'date',
                'value' => set_value('tgl_lahir')
            ]); ?>
        </div>

        <div class="form-group">
            <?= form_label('Umur:', 'umur'); ?>
            <?= form_input([
                'name' => 'umur',
                'id' => 'umur',
                'class' => 'form-control',
                'type' => 'number',
                'value' => set_value('umur'),
                'placeholder' => 'Masukkan Umur'
            ]); ?>
        </div>

        <div class="form-group">
            <?= form_label('Pilih Jurusan:', 'jurusan'); ?>
            <?php
            $options = [
                '' => 'Pilih Jurusan',
                'Teknik Informatika' => 'Teknik Informatika',
                'Sistem Informasi' => 'Sistem Informasi',
                'Ilmu Komputer' => 'Ilmu Komputer',
                'Teknik Komputer' => 'Teknik Komputer'
            ];
            echo form_dropdown('jurusan', $options, set_value('jurusan'), ['class' => 'form-control', 'id' => 'jurusan']);
            ?>
        </div>

        <div class="form-group">
            <?= form_submit('submit', 'Tambah', ['class' => 'btn btn-primary']); ?>
        </div>

        <?= form_close(); ?>
    </div>
</body>

</html>