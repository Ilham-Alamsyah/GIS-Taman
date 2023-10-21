<div class="col-sm-12">
    <?php
    //notifikasi pesan data berhasil disimpan
    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
        echo $this->session->flashdata('pesan');
        echo '</div>';
    } ?>

    <table class="table table-responsive table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1;
            foreach ($mebel as $key => $value) { ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->alamat ?></td>
                    <td><?= $value->ket ?></td>
                    <td>
                        <a href="<?= base_url('mebel/edit/' . $value->id) ?>" class="btn btn-sm btn-warning">Edit</a> |
                        <a href="<?= base_url('mebel/hapus/' . $value->id) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah Data ingin Dihapus...?')">Hapus</a>

                    </td>
                </tr>

            <?php    } ?>
        </tbody>

    </table>
</div>