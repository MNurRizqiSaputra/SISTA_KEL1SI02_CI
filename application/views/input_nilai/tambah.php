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
                    <p align="right" style="margin-right: 10%; color: rgb(205, 216, 46); font-size: 20px; font-weight: bold; background-color: black; width: 100%; line-height: 200%; border-radius: 20px; padding-right: 10px;"><a href="admin.html" align="right" style="color: rgb(0, 247, 255);">Home</a> > <a href="kelola-daftar-seminar.html" align="right" style="color: rgb(0, 247, 255);">Daftar Seminar</a> > <a href="#" align="right" style="color: rgb(255, 255, 255);">Kelola Seminar</a></p>
                    <br>
                                                  <center><h1 style="margin-bottom: -50px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >INPUT NILAI</h1></center>
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
          <form action="<?php echo base_url('index.php/input_nilai/save');?>" method="post">
                    <fieldset style="width:auto;margin-top:-80px; margin-left: 2%; margin-right: 2%;">
                    <legend style="height: 50px; text-align: center; padding: 15px;">Form Input Nilai Seminar TA</legend>
                    <div class="container-fluid">
                              <div class="row">
                              <div class="col-md-6">
                              <table class="table-responsive" style="margin-left: 0.5%;">
                                        <tbody style="font-size: large;">
                                        
                                                  
                                        <td><label for="Prodi">KATEGORI SEMINAR</label></td>
                                        <td> : </td>
                                        <td>
                                        <select name="seminar_id" id="semester" >
                                        <?php $query = $this->db->get('kategori_seminar'); 
                                        foreach ($query->result() as $row):
                                        ?>
                                                  <option hidden="semester"><b>Pilih Kategori Seminar ----></b></option>
                                                  <option>
                                                  <?php echo $row->id; ?><br> <?php echo $row->nama;?>
                                                  </option>
                                        <?php
		                    endforeach;
	                              ?>
                                        </select>
                                        
                                        </td>   
                                        </tr>
                                        
                                        <td><label for="">DOSEN</label></td>
                                        <td>:</td>
                                        <td>
                                        <select name="dosen_id" id="Pembimbing">
                                        <?php
                                        $query = $this->db->get('dosen');
                                        foreach ($query->result() as $row):
                                        ?>
                                                  <option hidden="Prodi"><b>PILIH DOSEN ---></b></option>
                                                  <option >
                                                  <?php echo $row->id; ?><br> <?php echo $row->nama;?>
                                                  </option>
                                        <?php
		                    endforeach;
	                              ?>
                                        </select>
                                        </td>
                                        </tr>
                                        
                                        
                             
                              
                              <tr>
                                        <td><label for="">PENILAIAN </label></td>
                                        <td>:</td>
                                        <td>
                                        <select name="penilaian_id" id="Penguji2">
                                        <?php $query = $this->db->get('penilaian'); 
                                        foreach ($query->result() as $row):
                                        ?>
                                                  <option hidden="semester"><b>INPUT NILAI ----></b></option>
                                                  <option value="<?php echo $row->id; ?>" >
                                                  <br> <?php echo $row->nama;?> <br> <?php echo $row->keterangan;?>
                                                  </option>
                                        <?php
		                    endforeach;
	                              ?>
                                        </select>
                                        </td>
                                        </tr>

                                        

                                        <tr>
                                        <td><label for="">NILAI</label></td>
                                        <td>:</td>
                                        <td>
                                        <input type="number"  name="nilai"
                                        min="30" max="100">
                                        </td>
                                        </tr>
                                        
                                        
                                        </table>
                              </div>
                              </div>
                    </div>
                    <br>
                              <button type="submit" class="btn btn-primary btn-lg" style="color: #ffffff;"><i class="fas fa-pen-square"></i> INPUT NILAI</button>
                    </fieldset>
                    </form>

                    <?php $this->load->view('include_home_user/footer'); ?>
                    </div>
          </div>
          </body>
          </html>