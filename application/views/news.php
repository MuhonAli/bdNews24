	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">

			</div>
			<form action="<?=base_url()?>News/index" method="get">
				<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
					<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
					<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Post -->
	<section class="bg0 p-t-70 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-12 p-b-80">
					<div class="row">
						<?php if ($result) { ?>
							<?php   foreach ($result as $news) { ?>
								<div class="col-sm-4 p-r-25 p-r-15-sr991">
									<!-- Item latest -->	
									<div class="m-b-45">
										<a href="<?=base_url()?>News/details/<?=$news['id']?>" class="wrap-pic-w hov1 trans-03">
											<img src="<?=base_url()?>asset/images/news/<?=$news['image']?>" alt="IMG" style="height: 200px;" >
										</a>

										<div class="p-t-16">
											<h5 class="p-b-5">
												<a href="<?=base_url()?>News/details/<?=$news['id']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
													<?=$news['title']?>
												</a>
											</h5>

											<span class="cl8">
										
												<span class="f1-s-3 m-rl-3">
													<br>
												</span>

												<span class="f1-s-3">
													<?=date('h:i a, d M',strtotime($news['created_on']))?>
												</span>
											</span>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } else{
							echo '<center><h style="font-size:40px;text-align:center;">No News Found!</h></center>';
						} ?>
					</div>

					<!-- Pagination -->
					<div class="flex-wr-s-c m-rl--7 p-t-15"><!-- 
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a> -->
						<center><?php echo $this->pagination->create_links(); ?></center>
					</div>
				</div>
				
			</div>
		</div>
	</section>
