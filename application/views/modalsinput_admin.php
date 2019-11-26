<!-- Modal -->
<div class="modal fade" id="insertData" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
         <div class="modal-header">
            
            <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data Anime</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         
         </div>
         <div class="modal-body">
            <form class="form container" action="<?php echo $db->base_url().'process/Process.php?kode=insert'; ?>" method="POST">
               <div class="form-group">
                  <label for="nama">Nama :</label>
                  <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Anime" required>
               </div>
               <div class="form-group">
                  <label for="email">Jumlah episode :</label>
                  <input class="form-control" type="text" name="jumlah_eps" id="jumlah_eps" placeholder="Jumlah episode" required>
               </div>
               <div class="form-group">
                  <label for="email">Genre :</label>
                  <input class="form-control" type="text" name="genre" id="genre" placeholder="Genre" required>
               </div>
               <div class="form-group">
                  <label for="tgl_lahir">Tanggal Rilis :</label>
                  <input class="form-control" type="date" name="tgl_rilis" id="tgl_rilis" required>
               </div>

               <div class="form-group">
                  <label for="gambar">Gambar :</label>
                  <input class="form-control" type="text" name="gambar" id="gambar" required>   
               </div>

         <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="width: 100px">
            <a href="<?php echo $db->base_url(); ?>" class="btn btn-success" style="width: 100px">Kembali</a>
         </div>
      </form>
   </div>
</div>
</div>
</div>
