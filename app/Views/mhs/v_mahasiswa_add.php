<!-- application/views/tambah_mahasiswa.php -->
<h5>Tambah Mahasiswa</h5>
<?php
$errors = session()->getFlashdata('error');
if ($errors): ?>
    <div class="alert alert-danger">
        Terdapat inputan yang tidak valid
    </div>
<?php endif; ?>
<?= form_open('mahasiswa/save'); ?>

<div class="form-group mb-1">
    <?= form_label('NIM', 'nim'); ?>
    <?= form_input([
        'name' => 'nim',
        'id' => 'nim',
        'class' => 'form-control' . (isset($errors['nim']) ? ' is-invalid' : ''),
        'value' => set_value('nim'),
        'placeholder' => 'Masukkan NIM'
    ]); ?>
    <?php if (isset($errors['nim'])): ?>
        <div class="text-danger">
            <small><?= ($errors['nim'] ?? '') ?></small>
        </div>
    <?php endif; ?>
</div>

<div class="form-group mb-1">
    <?= form_label('Nama', 'nama'); ?>
    <?= form_input([
        'name' => 'nama',
        'id' => 'nama',
        'class' => 'form-control' . (isset($errors['nama']) ? ' is-invalid' : ''),
        'value' => set_value('nama'),
        'placeholder' => 'Masukkan Nama'
    ]); ?>
    <?php if (isset($errors['nama'])): ?>
        <div class="text-danger">
            <small><?= ($errors['nama'] ?? '') ?></small>
        </div>
    <?php endif; ?>
</div>

<div class="form-group mb-1">
    <?= form_label('Jenis Kelamin', 'jenis_kelamin'); ?><br>
    <?= form_radio('jenis_kelamin', 'laki-laki', set_radio('jenis_kelamin', 'laki-laki'), ['id' => 'laki-laki']); ?>
    <?= form_label('Laki-laki', 'laki-laki'); ?>
    <br>
    <?= form_radio('jenis_kelamin', 'Perempuan', set_radio('jenis_kelamin', 'Perempuan'), ['id' => 'perempuan']); ?>
    <?= form_label('Perempuan', 'perempuan'); ?>
    <?php if (isset($errors['jenis_kelamin'])): ?>
        <div class="text-danger">
            <small><?= ($errors['jenis_kelamin'] ?? '') ?></small>
        </div>
    <?php endif; ?>
</div>

<div class="form-group mb-1">
    <?= form_label('Tanggal Lahir', 'tgl_lahir'); ?>
    <?= form_input([
        'name' => 'tgl_lahir',
        'id' => 'tgl_lahir',
        'class' => 'form-control' . (isset($errors['tgl_lahir']) ? ' is-invalid' : ''),
        'type' => 'date',
        'value' => set_value('tgl_lahir')
    ]); ?>
    <?php if (isset($errors['tgl_lahir'])): ?>
        <div class="text-danger">
            <small><?= ($errors['tgl_lahir'] ?? '') ?></small>
        </div>
    <?php endif; ?>
</div>

<div class="form-group mb-1">
    <?= form_label('Alamat', 'alamat'); ?>
    <?= form_textarea([
        'name' => 'alamat',
        'id' => 'alamat',
        'class' => 'form-control' . (isset($errors['alamat']) ? ' is-invalid' : ''),
        'value' => set_value('alamat'),
        'placeholder' => 'Masukkan alamat'
    ]); ?>
    <?php if (isset($errors['alamat'])): ?>
        <div class="text-danger">
            <small><?= ($errors['alamat'] ?? '') ?></small>
        </div>
    <?php endif; ?>
</div>

<div class="form-group text-end mt-3">
    <?= form_submit('submit', 'submit', ['class' => 'btn btn-primary']); ?>
    <a href="<?= base_url('/mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
</div>

<?= form_close(); ?>