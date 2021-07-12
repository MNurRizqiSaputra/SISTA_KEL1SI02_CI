<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include_admin/head'); ?>

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


        <!-- PORTFOLIO -->
		<section id="portfolio">
			
			<!-- CONTAINER -->
			
			<div class="container">
        <br>
            <p align="right" style="margin-right: 10%; color: rgb(205, 216, 46); font-size: 20px; font-weight: bold; background-color: black; width: 100%; line-height: 200%; border-radius: 20px; padding-right: 10px;"><a href="<?= base_url()?>index.php/admin/" align="right" style="color: rgb(0, 247, 255);">Home</a> > <a href="#" align="right" style="color: rgb(255, 255, 255);">Kelola Peserta</a> </p>
            <br>
                <center><h1 style="margin-bottom: -120px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">KELOLA PESERTA</h1></center>
                <br>
                <br>
                <br>
                <br>
				<div class="table-responsive">
											<center><table class="table" border="10" width="100%">
												<thead class="thead-dark"  style="background-image: linear-gradient(to right top, #4b12eb, #3511bf, #210d95, #11096c, #070146); color: white;" >
												  <tr>
                                                                                                                                  <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">ID</th>
                                                                                                                                  <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">NIM</th>
                                                                                                                                  <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">NAMA MAHASISWA/I</th>
                                                                                                                                  <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">KATEGORI SEMINAR</th>
                                                                                                                                  <th scope="col" size="300px" height="70px" style="text-align: center; font-size: 25px; color: white; font-weight: bold;">WAKTU</th>
                                                                                                                                  <th scope="col" size="200px" height="70px" style="text-align: center; font-size: 20px;">More Info</th>
												  </tr>
												</thead>
												<br>
												<br>
												<br>
												<tbody style="background-image: linear-gradient(to right top, #961c1c, #9a1919, #9d1616, #a11313, #a40f0f); color: rgb(255, 255, 255);">
													
                                                                                                                                                      <?php 
															$count = 0;
															foreach ($peserta->result() as $row):
															$count++;
															?>
                                                                                                                                                      <tr style="font-family: Arial, Helvetica, sans-serif; text-align: center; font-size: medium; font-weight: bold;">
															<center><td scope="row"><?php echo $row->id;?></td></center>
															<td><?php echo $row->nim;?></td>
															<td><?php echo $row->nama;?></td>
															<td><?php echo $row->seminar_id;?></td>
															<td><?php echo $row->kehadiran;?></td>
															
													                    <td><center><button type="button"  class="btn btn-primary btn-sm" ><a href="<?php echo base_url('index.php/kelola_peserta/delete/'.$row->id);?>" style="color: #ffffff;"><i class="fas fa-trash"></i> DELETE</a></button></center>
												                              <br> <a href="<?php echo base_url('index.php/kelola_peserta/lihat_detail/'.$row->id);?>" style="color: white;"><i class="fas fa-eye"></i>Detail</a></td>
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
</div>
</body>
</html>