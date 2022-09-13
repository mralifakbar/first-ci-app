<div class="p-4">
    <a href="/create" type="button" class="btn btn-primary mb-2">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach($mahasiswa as $mhs):?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $mhs['npm']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['alamat']; ?></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>