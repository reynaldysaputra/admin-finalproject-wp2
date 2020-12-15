<table class="table table-bordered">
  <thead>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Pesan</th>
        <th>Type</th>
    </tr>
  </thead>

  <tbody>
    <?php 
      $a = 1; 
      foreach ($feedback as $f) { ?>
    <tr>
        <th><?= $a++;?></th>
        <td><?= $f['nama_depan']." ".$f['nama_belakang']; ?></td>
        <td><?= $f['email'];?></td>
        <td><?= $f['subject'];?></td>
        <td><?= $f['komentar'];?></td>
        <td>
            <button type="button" class="btn btn-primary"><a href="mailto:<?=$f['email'];?>">Balas</a></button>
            <button type="button" class="btn btn-danger"> 
              <a href="<?= base_url('pages/hapusFeedback/').$f['id'];?>" onclick="return confirm('Anda yakin ingin menghapus feedback ini?');"> Hapus
              </a>
            </button>
        </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
