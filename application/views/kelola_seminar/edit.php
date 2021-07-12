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
                                                  <a href="#home" ><span class="b1" >SISTA</span></a>
                                                  </div><!-- //MENU BLOCK -->
                                        </div><!-- //CONTAINER -->
          </header><!-- //HEADER -->
          <?php $this->load->view('include_user/breadcumb');?>
          
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
                    <p align="right" style="margin-right: 10%; color: rgb(205, 216, 46); font-size: 20px; font-weight: bold; background-color: black; width: 100%; line-height: 200%; border-radius: 20px; padding-right: 10px;"><a href="<?= base_url()?>index.php/admin" align="right" style="color: rgb(0, 247, 255);">Home</a> > <a href="<?= base_url()?>index.php/kelola_seminar" align="right" style="color: rgb(0, 247, 255);">Kelola Seminar</a> > <a href="#" align="right" style="color: rgb(255, 255, 255);">Edit Seminar</a></p>
                    <br>
                                                  <center><h1 style="margin-bottom: -50px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >EDIT SEMINAR</h1></center>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          
          <form action="<?php echo base_url('index.php/kelola_seminar/update_seminar');?>" method="post">
          <input type="hidden" name="id" value="<?php echo $id ; ?>">
          

                    <fieldset style="width:auto;margin-top:-80px; margin-left: 2%; margin-right: 2%;">
                    <legend style="height: 50px; text-align: center; padding: 15px;">Form Edit Seminar TA</legend>
                    <div class="container-fluid">
                              <div class="row">
                              <div class="col-md-6">
                              <table class="table-responsive" style="margin-left: 0.5%;">
                              
                                        <tbody style="font-size: large;">

                                        
                                        
                                        <tr>
                                        <td><label for="nama">NIM</label></td>
                                        <td> : </td>
                                        <td width="75%" ><input type="text" name="nim" placeholder="Masukan NIM Anda" id="NIM" value= "<?php echo $nim ;  ?>"  required></td>
                                        </tr>
                                        <tr>
                                        <td><label for="nama">NAMA</label></td>
                                        <td> : </td>
                                        <td><input type="text" name="nama_mahasiswa" placeholder="Masukan Nama Anda" id="NAMA"  value= "<?php echo $nama_mahasiswa ;  ?>" required></td>
                                        </tr>
                                        <tr>
                                                  
                                        <td><label for="Prodi">KATEGORI SEMINAR</label></td>
                                        <td> : </td>
                                        <td>
                                        <select name="kategori_seminar_id" id="semester" >
                                        <?php $query = $this->db->get('kategori_seminar'); 
                                        foreach ($query->result() as $row):
                                        ?>
                                                  
                                                  <option <?php if ($row->id == $id) echo "selected" ; ?> value="<?php echo $row->id; ?>"" >
                                                  <br> <?php echo $row->nama;?>
                                                  </option>
                                        <?php
		                    endforeach;
	                              ?>
                                        </select>
                                        
                                        </td>
                                        </tr>
                                        <tr>
                                        <td><label for="">TANGGAL SEMINAR</label></td>
                                        <td>:</td>
                                        <td><input type="date" name="tanggal" id="date" value= "<?php echo $tanggal ;  ?>" ></td>
                                        </tr>
                                        <tr>
                                        <td><label for="">JAM SEMINAR</label></td>
                                        <td> : </td>
                                        <td><input type="time" name="jam" value= "<?php echo $jam ;  ?>" ></td>
                                        </tr>
                                        <tr>
                                        <td><label for="">RUANGAN</label></td>
                                        <td> : </td>
                                        <td><input type="text" name="lokasi"  value= "<?php echo $lokasi ;  ?>" placeholder="Pilih Ruangan" ></td>
                                        </tr>
                                        </tbody>
                                       
                              </table>
                              </div>
                              <div class="col-md-6">
                              <table class="table-responsive" style="margin-left: 5px;">
                    
                              <tbody style="font-size: large;">
                              <tr>
                                        <td><label for="">JUDUL TA</label></td>
                                        <td>:</td>
                                        <td width="600px"><input type="textarea" style="width:500px; height:100px" name="judul" value= "<?php echo $judul ; ?>" placeholder="Masukan Judul TA Anda" required></td>
                                        </tr>
                                        <tr>
                                        <td><label for="">SEMESTER</label></td>
                                        <td>:</td>
                                        <td>
                                                  <select name="semester" id="semester" >
                                                  <option hidden="semester"><b>Pilih Semester ----></b></option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                        </tr>
                                        <tr>
                                        <td><label for="">PEMBIMBING</label></td>
                                        <td>:</td>
                                        <td>
                                        <select name="pembimbing_id" id="Pembimbing">
                                        <?php
                                        $query = $this->db->get('dosen');
                                        foreach ($query->result() as $row):
                                        ?>
                                                  
                                                  <option <?php if ($row->id == $id) echo "selected" ; ?> value="<?php echo $row->id; ?>"" >
                                                  <br> <?php echo $row->nama;?>
                                                  </option>
                                        <?php
		                    endforeach;
	                              ?>
                                        </select>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td><label for="">PENGUJI 1</label></td>
                                        <td>:</td>
                                        <td>
                                        <select name="penguji1_id" id="Penguji1">
                                        <?php $query = $this->db->get('dosen'); 
                                        foreach ($query->result() as $row):
                                        ?>
                                                  
                                                  <option <?php if ($row->id == $id) echo "selected" ; ?> value="<?php echo $row->id; ?>"" >
                                                  <br> <?php echo $row->nama;?>
                                                  </option>
                                        <?php
		                    endforeach;
	                              ?>
                                        </select>
                                        </td>
                                        </tr>
                                        
                                        <tr>
                                        <td><label for="">PENGUJI 2</label></td>
                                        <td>:</td>
                                        <td>
                                        <select name="penguji2_id" id="Penguji2">
                                        <?php $query = $this->db->get('dosen'); 
                                        foreach ($query->result() as $row):
                                        ?>
                                                  
                                                  <option <?php if ($row->id == $id) echo "selected" ; ?> value="<?php echo $row->id; ?>"" >
                                                  <br> <?php echo $row->nama;?>
                                                  </option>
                                        <?php
		                    endforeach;
	                              ?>
                                        </select>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td><label for="">NILAI PEMBIMBING </label></td>
                                        <td>:</td>
                                        <td>
                                        <input type="number" id="" name="nilai_pembimbing"
                                        min="50" max="100" placeholder="Input Nilai">
                                        </td>
                                        </tr>

                                        <tr>
                                        <td><label for="">NILAI PENGUJI1 </label></td>
                                        <td>:</td>
                                        <td>
                                        <input type="number" id="" name="nilai_penguji1"
                                        min="50" max="100" placeholder="Input Nilai">
                                        </td>
                                        </tr>

                                        <tr>
                                        <td><label for="">NILAI PENGUJI2 </label></td>
                                        <td>:</td>
                                        <td>
                                        <input type="number" id="" name="nilai_penguji2"
                                        min="50" max="100" placeholder="Input Nilai">
                                        </td>
                                        </tr>

                                        <tr>
                                        <td><label for="">NILAI AKHIR </label></td>
                                        <td>:</td>
                                        <td >
                                        <input type="number" id="" name="nilai_akhir"
                                        min="50" max="100" placeholder="Input Nilai">
                                        </td>
                                        </tr>
                                        
                                        </tbody>
                                        </table>
                              </div>
                              </div>
                    </div>
                    <br>
                              <button type="submit" class="btn btn-primary btn-lg" style="color: #ffffff;"><i class="fas fa-pencil-alt"></i> UPDATE</button>
                              <button type="reset" class="btn btn-primary btn-lg" style="color: #ffffff;"><i class="fas fa-undo-alt"></i> RESET</button>
                    </fieldset>
                    </form>

                    <?php $this->load->view('include_home_user/footer'); ?>
                    </div>
          </div>
          </body>
          </html>