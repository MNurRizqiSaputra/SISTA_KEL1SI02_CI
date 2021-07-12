<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include_home_user/head'); ?>

<body>

<!-- PRELOADER -->

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
				<a href="#home" ><span class="b1" >SISTA</span></a>
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->

         <!-- BREADCRUMBS -->
         <?php $this->load->view('include_user/breadcumb');?>
         <!-- //BREADCRUMBS -->

		<div class="container">
            <br>
              <p align="right" style="margin-right: 10%; color: rgb(205, 216, 46); font-size: 20px; font-weight: bold; background-color: black; width: 100%; line-height: 200%; border-radius: 20px; padding-right: 10px;"><a href="<?= base_url()?>index.php/admin" align="right" style="color: rgb(0, 247, 255);">Home</a> > <a href="#" align="right" style="color: rgb(255, 255, 255);">Kelola Seminar</a></p>
            <br>
				<center><h1 style="margin-bottom: -50px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >KELOLA SEMINAR <br> ( TAMBAH, EDIT , DELETE )</h1></center>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
        <button type="button" class="btn btn-primary btn-lg" style="margin-left: 10%;"><a href="<?= base_url()?>index.php/kelola_seminar/add"  style="color: #ffffff;"><i class="fas fa-plus-square"></i> TAMBAH SEMINAR</a></button>
        <br>
	<center>
		<div class="table-responsive">
		<table class="table" border="10" style="width:80%; margin-top: 2%;" >
      <thead style="background-image: linear-gradient(to right top, #4b12eb, #3511bf, #210d95, #11096c, #070146)">
        <tr>
          <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">ID</th>
          <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">NIM</th>
          <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">NAMA MAHASISWA/I</th>
          <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">KATEGORI SEMINAR</th>
          <th scope="col" size="300px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">WAKTU</th>
          <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">RUANGAN</th>
          <th size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">Action</th>
        </tr>
      </thead>
      <tbody class="table" style="text-align: center; font-size: 170%; font-weight: bold; background-image: linear-gradient(to right top, #961c1c, #9a1919, #9d1616, #a11313, #a40f0f); color: white;">
          <?php 
                    $count = 0;
                    foreach ($jadwal->result() as $row):
                    $count++;
          ?>
        <tr>
          <center><td scope="row"><?php echo $row->id;?></td></center>
          <td><?php echo $row->nim;?></td>
          <td><?php echo $row->nama_mahasiswa;?></td>
          <td><?php echo $row->kategori_seminar_id;?></td>
          <td><?php echo $row->tanggal;?></td>
          <td><?php echo $row->lokasi;?></td>
          
		  <td><a href="<?php echo base_url('index.php/kelola_seminar/get_edit/'.$row->id);?>" <i class="fas fa-pencil-alt" style="color: white;"></i>edit</a> | <a href="<?php echo base_url('index.php/kelola_seminar/delete/'.$row->id);?>" style="color: white;"><i class="fas fa-trash-alt"></i>Delete</a>
      | <a href="<?php echo base_url('index.php/kelola_seminar/lihat_detail/'.$row->id);?>" style="color: white;"><i class="fas fa-eye"></i>Detail</a>
    </td>
		</tr>
          <?php
		endforeach;
	?>
      </tbody>
	</table>
	</div>
</center>

<?php $this->load->view('include_home_user/footer'); ?>
</div>
</body>
</html>