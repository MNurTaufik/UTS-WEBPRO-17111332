<section>
	<h2 style="text-align: center;">Tambah Data Anime</h2>
	<div class="container">
		<form class="form" action="<?php echo base_url('MyAdmin/insert')?>" method="post">
			
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
				<a href="<?php echo base_url("MyAdmin"); ?>" class="btn btn-success" style="width: 100px">Kembali</a>
			</div>
		
		</form>
	</div>
</section>