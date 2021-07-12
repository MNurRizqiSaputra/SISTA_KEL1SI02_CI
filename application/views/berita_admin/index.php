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

        <!-- BREADCRUMBS -->
        <?php $this->load->view('include_user/breadcumb');?>
        <!-- //BREADCRUMBS -->

        <!-- NEWS -->
		<!-- NEWS -->
		<section id="news">
		
			<!-- CONTAINER -->
			<div class="container">
                              <center><h2><b>BERITA SEMINAR UMUM STT NF</b></h2></center>
				
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
    
    <!-- CONTACTS -->
    <!-- //CONTACTS -->
    <?php $this->load->view('include_home_user/footer'); ?>
<!-- //CONTACTS -->
<!-- //CONTACTS -->	
	

</div>
</body>
</html>