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
					
                                        <?php $this->load->view('include_user/nav');?>
				<a href="<?= base_url()?>" ><span class="b1"  style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" >SISTA</span></a>
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
        </header><!-- //HEADER -->
        
        <!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
                <h2><b>TERIMA KASIH</b></h2>
                <h2><b>TELAH MENDAFTAR</b></h2>	
			</div>
        </section><!-- //BREADCRUMBS -->

        <br>
        

        
        <div class="container center">
            <h2><img src="<?php echo base_url('public/images/thank.gif');?>"></h2> 
        </div>

        <br>
        <br>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center" style="font-weight: bold;">
                        CHECKED VALIDATION
                    </h1>
                    <div class="jumbotron">
                        <h2 style="font-weight: normal;">
                            ANDA MENDAFTAR SEBAGAI PESERTA PADA SEMINAR BERIKUT :
                        </h2>
                        <div class="alert alert-success" role="alert">
                            <h3 class="alert-heading">INFORMASI DETAIL</h3>
                            
                        <table class="table-responsive"  >              
                            <tbody style="font-size: large; font-weight: bold;">
                            
                                <tr>						
                                    <td>Mahasiswa Seminar</td>
                                    <td>:</td>
                                    <td><?php echo $nama_mahasiswa ?></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>    
                                    <td><?php echo $nim_seminar ?></td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td>:</td>    
                                    <td><?php echo $judul ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><?php echo $tanggal ?></td>
                                </tr>
                                <tr>
                                    <td>Waktu</td>
                                    <td>:</td>
                                    <td><?php echo $jam ?></td>
                                </tr>
                            </tbody>
                        </table >
                        <br>
                        <div class="alert alert-success" role="alert">
                            <h3 class="alert-heading">INFO ANDA SEBAGAI PESERTA</h3>

                        <table class="table-responsive" >              
                            <tbody style="font-size: large; font-weight: bold;">
                            
                                <tr>						
                                    <td>Nama Peserta</td>  
                                    <td>:</td>
                                    <td><?php echo $nama ?></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>    
                                    <td><?php echo $nim ?></td>
                                </tr>
                                <tr>
                                    <td>ID Seminar yang Diikuti</td>
                                    <td>:</td>   
                                    <td><?php echo $seminar_id ?> </td>
                                </tr>
                                <tr>
                                    <td>Judul Seminar yang Diikuti</td>
                                    <td>:</td>    
                                    <td><?php echo $judul ?></td>
                                </tr>
                                
                            </tbody>
                        </table >
                          </div>
                                            
                    
                    <button type="button" class="btn btn-info btn-block" >
                        <a href="<?= base_url()?>index.php/jadwal_seminar/" style="color: white;"><i class="fas fa-home"></i> KEMBALI KE HOME</a>
                    </button>
                </div>
            </div>
        </div>

        <?php $this->load->view('include_home_user/footer'); ?>
	

</div>
</body>
</html>