<?php $this->extend('templates/template'); ?>

<?php $this->section('content'); ?>
<div class="py-4">
    <a href="/create" type="button" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
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
                <td><?= $mhs['deskripsi']; ?></td>
                <td><?= $mhs['created_at']; ?></td>
                <td>
                    <div class="d-flex">
                        <a href="/edit/<?= $mhs['id']; ?>" class="btn btn-warning mr-3">Edit</a>
                        <form action="/delete/<?= $mhs['id']; ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php $this->endsection(); ?>