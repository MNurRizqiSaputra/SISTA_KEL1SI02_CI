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
            <?php $this->load->view('include_user/breadcumb');?>
            <!-- //BREADCRUMBS -->
            
            <style>
                fieldset {
                    background-image: linear-gradient(to right top, #961c1c, #9a1919, #9d1616, #a11313, #a40f0f);
                    color: rgb(255, 255, 255);
                  }
                  
                  legend {
                    background-image: linear-gradient(to right top, #4b12eb, #3511bf, #210d95, #11096c, #070146);
                    color: rgb(255, 255, 255);
                    font-weight: bold;
                    padding: 5px 10px;
                  }
                  
                  input {
                    margin: 5px;
                  }
            </style>


        <div class="container">
            <br>
              <p align="right" style="margin-right: 10%; color: rgb(205, 216, 46); font-size: 20px; font-weight: bold; background-color: black; width: 100%; line-height: 200%; border-radius: 20px; padding-right: 10px;"><a href="http://localhost/sista_ci/" align="right" style="color: rgb(0, 247, 255);">Home</a> > <a href="<?= base_url()?>index.php/jadwal_seminar/" align="right" style="color: rgb(0, 247, 255);">Jadwal</a> > <a href="#" align="right" style="color: #FFFFFF;">Daftar Peserta</a> 
            <br>
                <center><h1 style="margin-bottom: -120px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">DAFTAR PESERTA</h1></center>
        </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
                <table  class="table-responsive" style="width: auto; margin-left: 2%; margin-right: 2%;">              
                <tbody style="font-size: large; font-weight: bold;">
                
                    <tr>						
                        <td>Mahasiswa Seminar</td>
                        <td>:</td>
                        <td><?php echo $nama_mahasiswa?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>    
                        <td><?php echo $nim?></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>    
                        <td><?php echo $judul?></td>
                    </tr>
                     <tr>
                        <td>Waktu</td>
                        <td>:</td>
                        <td><?php echo $tanggal,$jam?></td>
                    </tr>
                </tbody>
            </table >
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <form action="<?php echo base_url('index.php/jadwal_seminar/save_peserta');?>" method="post">
                <fieldset style="width:auto;margin-top:-80px; margin-left: 2%; margin-right: 2%;">
                <legend style="height: 50px; text-align: center; padding: 15px; font-family: Arial, Helvetica, sans-serif;">Form Peserta Seminar</legend>
                <div class="table-responsive">
                    <table cellpadding="5" cellspasing="20" style="margin-left: 1%;">
            
                <tbody style="font-size: large;">
                   <tr>
                        <td><label for="nim">NIM</label></td>
                        <td>:</td>
                        <td><input type="text" name="nim" placeholder="Masukan NIM Anda" id="NAMA" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td><label for="nama">NAMA</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama_mahasiswa" placeholder="Masukan Nama Anda" id="NAMA" class="form-control" required></td>
                    </tr>
                    <input type="hidden" name="seminar_id" value="<?php echo $id ?>">
                    <tr>
                        <td><label for="Program">KEHADIRAN</label></td>
                        <td>:</td>
                        <td>
                                <select name="kehadiran" id="kehadiran">
                                <option hidden><b>Pilih Kehadiran ----></b></option>
                                    <option value="1">Hadir</option>
                                    <option value="0">Tidak Hadir</option>
                                </select>
                        </td>
                    </tr>
                </tbody>
                <tr>
                <td><br>
                <button type="button submit" class="btn btn-primary btn-lg" style="color:white">DAFTAR</button>
                </td></tr>
        </table>
        </div>
        </fieldset>
        </form>

<!-- //CONTACTS -->
        <?php $this->load->view('include_home_user/footer'); ?>
<!-- //CONTACTS -->
</div>
</body>
</html>