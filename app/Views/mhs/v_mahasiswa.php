
<div class="text-end">
    <a href="<?=base_url('/mahasiswa/form')?>" class="btn btn-primary">Tambah</a>
</div>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mhsData as $index => $row): ?>
            <tr>
                <td class="text-center"><?= $index + 1 ?></td>
                <td><?= $row->nim ?? "-" ?></td>
                <td><?= $row->nama ?? "-" ?></td>
                <td><?= $row->jenis_kelamin ?? "-" ?></td>
                <td><?= $row->tgl_lahir ?? "-" ?></td>
                <td>
                    <a href="<?= base_url('mahasiswa/form/'.$row->nim) ?>" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>