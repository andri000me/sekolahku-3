      <?php if ($this->session->flashdata('sukses')):?>
  <?= $this->session->flashdata('sukses'); ?>
  <?php endif;?>
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%"> 
        <thead>
          <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=0; foreach ($query as $key) :?>
          <tr>
           <td><?= ++$no;?></td>
            <td><?= $key->nis;?></td>
            <td><?= $key->nama_siswa;?></td>
            <td><?= $key->alamat_siswa;?></td>
            <td><?= $key->gender_siswa;?></td>
             <td wid_siswath="160px" class="text-center">
              <a href="<?=site_url('ppdb/edit/'.$key->id_siswa); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>

              <a href="<?=site_url('ppdb/delete/'.$key->id_siswa); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>

            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>