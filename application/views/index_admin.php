
<section>
	<style type="text/css">
		thead th {
			text-align: center;
		}
      body{
         background-image: url(assets/img/bg3.jpg);
         background-size: cover;
         background-attachment: fixed;
      }  
	</style>

	<div class="container" style="margin-top: 20px">
		
		<a href=" <?= base_url("MyAdmin/insert") ?>" 
         class="btn btn-outline-primary" 
         data-toggle="modal"
         data-target="#insertData"> + Tambah Data 
      </a>
		
   </button>
   <table class="table table-hover" style="margin-top:2px;">
   	<thead class="thead-dark">

   		<tr>
   			<th scope="col">No</th>
   			<th scope="col">Gambar</th>
   			<th scope="col">Nama</th>
   			<th scope="col">Jumlah episode</th>
   			<th scope="col">Genre</th>
   			<th scope="col">Tanggal rilis</th>
   			<th scope="col" colspan="2">Aksi</th>
   		</tr>
   	</thead>

   	<tbody>
   		<?php 
   		$no = 1; //pengisian nomor auto increment

         //pengambilan data untuk di tampilkan
   		$getFilm = $db->get_datafilm()->get_result();
   		while ($datafilm = $getFilm->fetch_object()) 
   		{
   			?>

   			<tr style="color: white">
   				<td align="center" style="vertical-align: middle;">
   					<?php echo $no; ?>
   				</td>
   				<td align="center" style="vertical-align: middle;">
               <?php if($datafilm->gambar){ ?>
                  <img width="50px" src="assets/img/<?php echo $datafilm->gambar; ?>">
   					
               <?php } ?>
   				</td>
   				<td style="vertical-align: middle;">
   					<?php echo $datafilm->nama; ?>
   				</td>
   				<td align="center" style="vertical-align: middle;">
   					<?php echo $datafilm->jumlah_eps; ?>
   				</td>
   				<td align="center" style="vertical-align: middle;">
   					<?php echo $datafilm->genre; ?>
   				</td>
   				<td align="center" style="vertical-align: middle;">
   					<?php echo $datafilm->tgl_rilis; ?>
   				</td>
               <!-- membuat tombol edit -->
   				<td align="center" style="vertical-align: middle;">
   					<a href="<?php echo $db->base_url().'update.php?id_film='.$datafilm->id_film; ?>" class="btn btn-success btn-sm">Edit</a>
   				</td>
               <!-- membuat tombol hapus -->
   				<td align="center" style="vertical-align: middle;">
   					<a href="<?php echo $db->base_url().'process/Process.php?kode=delete&id_film=' .$datafilm->id_film; ?>" class="btn btn-danger btn-sm">Hapus</a>
   				</td>
   			</tr>
   			<?php 
   			$no ++;
   		}	
   		?>

   	</tbody>
   </table>
</div>
</section>