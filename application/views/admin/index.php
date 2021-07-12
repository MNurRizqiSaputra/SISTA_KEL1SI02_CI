<!DOCTYPE html>
<html lang="en">
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
					
					<!-- LOGO -->
					
					
				<?php $this->load->view('include_home_admin/nav');?>
				<a href="#home" ><span class="b1" >SISTA</span></a>
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop" style="color: #fffdfd;">SELAMAT DATANG <br>DI WEBSITE SISTA</p>
							<hr>
							<p class="title4 captionDelay7 FromBottom" style="color: #fdfbfb;">ACCESS FOR ADMIN</p>
						</div>
						
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay6 FromLeft">SISTA</p>
							<p class="title4 captionDelay7 FromLeft">SISTA merupakan Sistem informasi untuk para mahasiswa semester akhir yang akan melakukan tugas akhir.</p>
						</div>
						
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay1 FromBottom">SISTA</p>
							<p class="title4 captionDelay5 FromBottom">SISTEM INFORMASI SEMINAR TUGAS AKHIR - SISTA</p>
						</div>
						
						
					</li>
				</ul>
			</div>
			<div id="carousel">
				<ul class="slides">
					<li><img src="images/slider/cro1.jpg" alt="" /></li>
					<li><img src="images/slider/cro2.jpg" alt="" /></li>
					<li><img src="images/slider/cro3.jpg" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section id="about">
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<!-- CONTAINER -->
				<div class="container">
				
					<!-- ROW -->
					<div class="row">
							<a class="services_item" href="javascript:void(0);" >
								<h1><b><center>WELCOME TO PAGE ADMIN</center></b></h1>
								
							</a>
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->
		</br>
			
			<p><center><font face="sans serif" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-weight: bold; font-size: x-large;">BERIKUT FITUR UNTUK ADMIN</center></font></p>
            <hr width="50%" height:"10px" color="white" size="10">
			</h>
		<table  class="table-responsive" width="100%" cellpadding="10" cellspasing="30">
		<br>
		<br>
			<tr>
				<td><center><a href="<?= base_url()?>index.php/kelola_seminar"><img src="<?php echo base_url('public/images/kelola_seminar.jpg');?>" width=auto height="100px" class="img-fluid"></a></center></td>
				<td><center><a href="<?= base_url()?>index.php/kelola_peserta"><img src="<?php echo base_url('public/images/df_peserta.jpg');?>" width=auto height="100px" class="img-fluid"></a></center></td>
				<td><center><a href="<?= base_url()?>index.php/input_nilai"><img src="<?php echo base_url('public/images/input nilai.jpg');?>" width=auto height="100px" class="img-fluid"></a></center></td>
			</tr>
		</table>
		<br>
		<br>
		<br>
		<br>
		<hr>
			
		</section><!-- //PROJECTS -->
		
		
		
		
		
		<!-- NEWS -->
		<section id="news">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>BERITA</b> SEMINAR UMUM STT NF</h2>
				
				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">
						
				
				<!-- RECENT POSTS -->
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?php echo base_url('public/images/blog/pakrojulsmnr.JPG');?>" alt="" />
								<a class="link" href="#news" ></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#news" >TEKNOLOGI MICROSERVICE</a><br>
								<span>Pembicara	:	Sirojul Munir, S.Si, M.Kom</span>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" ><i class="fas fa-thumbs-up"></i>1K LIKE</a> |</li>
									<li><a href="javascript:void(0);" ><i class="fas fa-comments"></i>500 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?php echo base_url('public/images/blog/pakfeizalsmnr.JPG');?>" alt="" />
								<a class="link" href="#news"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#news" >SERVICE PLANNING ANALYST</a><br>
								<span>Pembicara	:	Muhammad Feizal, S.kom ., M.T</span>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" ><i class="fas fa-thumbs-up"></i>5K LIKE</a> |</li>
									<li><a href="javascript:void(0);" ><i class="fas fa-comments"></i>1000 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?php echo base_url('public/images/blog/paklukmansmnr.jpg');?>" alt="" />
								<a class="link" href="#news"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#news" >PERAN PEMUDA UNTUK NEGARA</a><br>
								<span>Pembicara	:	Dr. Lukman Rosyidi, S.T., M.M., M.T</span>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" ><i class="fas fa-thumbs-up"></i>10K LIKE</a> |</li>
									<li><a href="javascript:void(0);" ><i class="fas fa-comments"></i>5000 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- RECENT POSTS -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->

	<!-- TEAM -->
	<section id="team">
		
		<!-- CONTAINER -->
		<div class="container">
			<h2><b>TIM</b> SISTA</h2>
			
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
					
				<!-- TEAM SLIDER -->
				<div class="owl-demo owl-carousel team_slider">
			
					<!-- crewman1 -->
					
					<!-- crewman2 -->
					<div class="item">
						<div class="crewman_item">
							<div class="crewman">
								<img src="<?php echo base_url('public/images/team/azzam2.jpg');?>" alt="" />
							</div>
							<div class="crewman_descr center">
								<div class="crewman_descr_cont">
									<p>MUHAMMAD ADLI AZZAM</p>
									<span>DIRECTOR</span>
								</div>
							</div>
							<div class="crewman_social">
								<a href="https://www.instagram.com/adliazzam_19/" target="_blank"><i class="fab fa-instagram-square"></i></a>
								<a href="https://github.com/Muhammad-Adli-Azzam"  target="_blank"><i class="fab fa-github-square"></i></a>
								<a href="https://wa.me/6287796958612" target="_blank" ><i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div><!-- crewman1 -->

					<div class="item">
						<div class="crewman_item">
							<div class="crewman">
								<img src="<?php echo base_url('public/images/team/putra2.JPG');?>" alt="" />
							</div>
							<div class="crewman_descr center">
								<div class="crewman_descr_cont">
									<p>M NUR RIZQI SAPUTRA</p>
									<span>CONTROLLERS HANDLE</span>
								</div>
							</div>
							<div class="crewman_social">
								<a href="https://www.instagram.com/mnrs_putra/" target="_blank"><i class="fab fa-instagram-square"></i></a>
								<a href="https://github.com/MNurRizqiSaputra" target="_blank"><i class="fab fa-github-square"></i></a>
								<a href="https://wa.me/6282114016528" target="_blank" ><i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div><!-- crewman1 -->

					<div class="item">
						<div class="crewman_item">
							<div class="crewman">
								<img src="<?php echo base_url('public/images/team/arif2.jpg');?>" alt="" />
							</div>
							<div class="crewman_descr center">
								<div class="crewman_descr_cont">
									<p>ARIF SATRIYO NUR ALVIAN</p>
									<span>VIEWS HANDLE</span>
								</div>
							</div>
							<div class="crewman_social">
								<a href="https://www.instagram.com/dihkepo_ya/" target="_blank"><i class="fab fa-instagram-square"></i></a>
								<a href="https://github.com/arifsatriyo" target="_blank"><i class="fab fa-github-square"></i></a>
								<a href="https://wa.me/62895383152983" target="_blank" ><i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div><!-- crewman1 -->

					<div class="item">
						<div class="crewman_item">
							<div class="crewman">
								<img src="<?php echo base_url('public/images/team/reyhansyah2.jpg');?>" alt="" />
							</div>
							<div class="crewman_descr center">
								<div class="crewman_descr_cont">
									<p>REYHANSYAH</p>
									<span>DATABASE HANDLE</span>
								</div>
							</div>
							<div class="crewman_social">
								<a href="https://www.instagram.com/rsyah_213/" target="_blank"><i class="fab fa-instagram-square"></i></a>
								<a href="https://github.com/reyhansyah213" target="_blank" ><i class="fab fa-github-square"></i></a>
								<a href="https://wa.me/628871619177" target="_blank" ><i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div><!-- crewman1 -->
					
					
						</div>
					</div><!-- crewman8 -->
					
					
				</div><!-- TEAM SLIDER -->
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</section><!-- //TEAM -->
	
	<!-- CONTACTS -->

	<?php $this->load->view('include_home_user/footer'); ?>
	

</div>
</body>
</html>