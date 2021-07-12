<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include_home_user/head'); ?>

<body>

<!-- PRELOADER -->
<img id="preloader" src="<?php echo base_url('public/images/sistanms.gif');?>" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">



<!-- PAGE -->
<div id="page">

<!-- HEADER -->
<header>

	<!-- MENU BLOCK -->
	<div class="menu_block">

	<!-- CONTAINER -->
		<div class="container clearfix">

			<?php $this->load->view('include_admin/nav');?>
			<a href="<?= base_url()?>" ><span class="b1"  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" >SISTA</span></a>
		</div><!-- //MENU BLOCK -->
	</div><!-- //CONTAINER -->
</header><!-- //HEADER -->


<?php $this->load->view('include_user/breadcumb');?>


<!-- PORTFOLIO -->
<section id="portfolio">

<!-- CONTAINER -->

<div class="container">
<br>
<p align="right" style="margin-right: 10%; color: rgb(205, 216, 46); font-size: 20px; font-weight: bold; background-color: black; width: 100%; line-height: 200%; border-radius: 20px; padding-right: 10px;"><a href="<?= base_url()?>index.php/admin" align="right" style="color: rgb(0, 247, 255);">Home</a> > <a href="#" align="right" style="color: rgb(255, 255, 255);">Input Nilai</a></p>
<br>
<center><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">INPUT NILAI</h1></center>
<br>
<div class="table-responsive">
		<center><table class="table" border="10" width="100%">
			<thead class="thead-dark"  style="background-image: linear-gradient(to right top, #4b12eb, #3511bf, #210d95, #11096c, #070146); color: white;" >
				<tr>
				<th scope="col" size="200px" height="70px" style="text-align: center; font-size: 20px;">ID</th>
				<th scope="col" size="200px" height="70px" style="text-align: center; font-size: 20px;">NIM</th>
				<th scope="col" size="200px" height="70px" style="text-align: center; font-size: 20px;">NAMA MAHASISWA/I</th>
				<th scope="col" size="200px" height="70px" style="text-align: center; font-size: 20px;">KATEGORI SEMINAR</th>
				<th scope="col" size="300px" height="70px" style="text-align: center; font-size: 20px;">WAKTU</th>
				<th scope="col" size="200px" height="70px" style="text-align: center; font-size: 20px;">RUANGAN</th>
				<th scope="col" size="200px" height="70px" style="text-align: center; font-size: 20px;">More Info</th>
				<th scope="col" size="200px" height="70px" style="text-align: center; font-size: 20px;">Input Nilai</th>
				</tr>
			</thead>
			<br>
			<br>
			<br>
			<tbody style="background-image: linear-gradient(to right top, #961c1c, #9a1919, #9d1616, #a11313, #a40f0f); color: rgb(255, 255, 255);">
			<?php 
				$count = 0;
				foreach ($jadwal->result() as $row):
				$count++;
			?>
			<tr style="font-family: Arial, Helvetica, sans-serif; text-align: center; font-size: medium; font-weight: bold;">
				<center><td scope="row"><?php echo $row->id;?></td></center>
				<td><?php echo $row->nim;?></td>
				<td><?php echo $row->nama_mahasiswa;?></td>
				<td><?php echo $row->kategori_seminar_id;?></td>
				<td><?php echo $row->tanggal;?></td>
				<td><?php echo $row->lokasi;?></td>
				<td>
					<button type="button"  class="btn btn-primary btn-lg" ><a href="<?php echo base_url('index.php/input_nilai/lihat_detail/'.$row->id);?>" style="color: #ffffff;"><i class="fas fa-search"></i> LIHAT DETAIL</a></button>
				</td>
				<td>
				<button type="button"  class="btn btn-primary btn-lg" ><a href="<?php echo base_url('index.php/input_nilai/add/'.$row->id);?>" style="color: #ffffff;"><i class="fas fa-edit"></i> INPUT NILAI</a></button>
				</td>
			
				
				</tr>
			<?php
			endforeach;
			?>
		</tbody>
		</table>
	</center>
</div>
	
</div><!-- //CONTAINER -->
</section>



<!-- CONTACTS -->
<?php $this->load->view('include_home_user/footer'); ?>
<!-- //CONTACTS -->
</div>
</body>
</html>