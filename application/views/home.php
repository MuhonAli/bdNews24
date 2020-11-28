
<div class="container">
	<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
		<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
			<span class="text-uppercase cl2 p-r-8">
				Breaking News:
			</span>

			<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
				<?php  foreach ($breakingNews as $breaking) {?>
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						<a href="<?=base_url()?>News/details/<?=$breaking['id']?>"><?=$breaking['title']?></a>
					</span>
				<?php } ?>
			</span>
		</div>
	</div>
</div>

<div class="container">
	<div class="">
		<form action="<?=base_url()?>News/index" method="get">
			<div class="row" style="float: right !important;">
				<input type="date" name="created_on" class="form-control" style="float: left;width: 40%;">
				<input type="text" name="search" class="form-control" placeholder="search" style="float: left;width: 40%;">
				<input class="btn btn-success" type="submit" name="" value="search" style="float: left;">

			</div>
		</form>
	</div>
</div>
<!-- Post -->
<section class="bg0 p-t-70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">
				<div class="p-b-20">
					<!-- Entertainment -->
					<div class="tab01 p-b-20">
						<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
							<!-- Brand tab -->
							<h3 class="f1-m-2 cl12 tab01-title">
								TOP NEWS
							</h3>

							
						</div>
						

						<!-- Tab panes -->
						<div class="tab-content p-t-35">
							<!-- - -->
							<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->
										<?php $k=0;  foreach ($topNews as $top) {
											$k++;
											if($k==4){
												?>
												<div class="m-b-30">
													<a href="<?=base_url()?>News/details/<?=$top['id']?>" class="wrap-pic-w hov1 trans-03">
														<img src="<?=base_url()?>asset/images/news/<?=$top['image']?>" alt="IMG">
													</a>

													<div class="p-t-20">
														<h5 class="p-b-5">
															<a href="<?=base_url()?>News/details/<?=$top['id']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
																<?=$top['title']?> 
															</a>
														</h5>

														<span class="cl8">

															<span class="f1-s-3 m-rl-3">
																-
															</span>

															<span class="f1-s-3">
																<?=date('h:i a, d M',strtotime($top['created_on']))?>
															</span>
														</span>
													</div>
												</div>
											</div>
										<?php }} ?>
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<?php $j=0;  foreach ($topNews as $top) {
												$j++;
												if($j>4){
													?>
													<div class="flex-wr-sb-s m-b-30">
														<a href="<?=base_url()?>News/details/<?=$top['id']?>" class="size-w-1 wrap-pic-w hov1 trans-03">
															<img src="<?=base_url()?>asset/images/news/<?=$top['image']?>" alt="IMG">
														</a>
														<div class="size-w-2">
															<h5 class="p-b-5">
																<a href="<?=base_url()?>News/details/<?=$top['id']?>" class="f1-s-5 cl3 hov-cl10 trans-03">
																	<?=$top['title']?>
																</a>
															</h5>

															<span class="cl8">

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	<?=date('h:i a, d M',strtotime($top['created_on']))?>
																</span>
															</span>
														</div>
													</div>
												<?php }}  ?>

											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="col-md-10 col-lg-4">
						<div class="p-l-10 p-rl-0-sr991 p-b-20">
							<!--  -->
							<div>
								<div class="how2 how2-cl4 flex-s-c">
									<h3 class="f1-m-2 cl3 tab01-title">
										Most Popular
									</h3>
								</div>

								<ul class="p-t-35">
									<?php
									$i=1; foreach ($populars as $popular) {?>
										<li class="flex-wr-sb-s p-b-22">
											<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
												<?php echo $i;
												$i++ ?>
											</div>

											<a href="<?=base_url()?>News/details/<?=$popular['id']?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
												<?=$popular['title']?>
											</a>
										</li>
									<?php } ?>
								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bg0 p-t-60 p-b-35">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 col-lg-12 p-b-20">
						<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
							<h3 class="f1-m-2 cl3 tab01-title">
								Pinned News
							</h3>
						</div>

						<div class="row p-t-35">
							<?php 
							if (!empty($pinned)) {
								foreach ($pinned as $pin) {?>
									<div class="col-sm-4 p-r-25 p-r-15-sr991">
										<!-- Item latest -->	
										<div class="m-b-45">
											<a href="<?=base_url()?>News/details/<?=$pin['id']?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>asset/images/news/<?=$pin['image']?>" alt="IMG" style="height: 200px;">
											</a>

											<div class="p-t-16">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>News/details/<?=$pin['id']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?=$pin['title']?>
													</a>
												</h5>

												<span class="cl8">

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('h:i a, d M',strtotime($pin['created_on']))?>
													</span>
												</span>
											</div>
										</div>
									</div>
								<?php } } else{ ?>

									<h2 class="text-center" style="font-size: 30px;margin-left: 40%;">No Pinned News Found!</h2>
								<?php		} ?>
							</div>
						</div>
					</div>
				</div>
			</section>

		<section class="bg0 p-t-60 p-b-35">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 col-lg-12 p-b-20">
						<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
							<h3 class="f1-m-2 cl3 tab01-title">
								Todays News
							</h3>
						</div>

						<div class="row p-t-35">
							<?php 
							if (!empty($todays)) {
								foreach ($todays as $today) {?>
									<div class="col-sm-4 p-r-25 p-r-15-sr991">
										<!-- Item latest -->	
										<div class="m-b-45">
											<a href="<?=base_url()?>News/details/<?=$today['id']?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>asset/images/news/<?=$today['image']?>" alt="IMG" style="height: 200px;">
											</a>

											<div class="p-t-16">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>News/details/<?=$today['id']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?=$today['title']?>
													</a>
												</h5>

												<span class="cl8">

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('h:i a, d M',strtotime($today['created_on']))?>
													</span>
												</span>
											</div>
										</div>
									</div>
								<?php } } else{ ?>

									<h2 class="text-center" style="font-size: 30px;margin-left: 40%;">No News Posted Today!</h2>
								<?php		} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Latest -->
			<section class="bg0 p-t-60 p-b-35">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-12 p-b-20">
							<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
								<h3 class="f1-m-2 cl3 tab01-title">
									Latest News
								</h3>
							</div>

							<div class="row p-t-35">
								<?php  foreach ($latests as $latest) {?>
									<div class="col-sm-4 p-r-25 p-r-15-sr991">
										<!-- Item latest -->	
										<div class="m-b-45">
											<a href="<?=base_url()?>News/details/<?=$latest['id']?>" class="wrap-pic-w hov1 trans-03">
												<img src="<?=base_url()?>asset/images/news/<?=$latest['image']?>" alt="IMG" style="height: 200px;">
											</a>

											<div class="p-t-16">
												<h5 class="p-b-5">
													<a href="<?=base_url()?>News/details/<?=$latest['id']?>" class="f1-m-3 cl2 hov-cl10 trans-03">
														<?=$latest['title']?>
													</a>
												</h5>

												<span class="cl8">

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														<?=date('h:i a, d M',strtotime($latest['created_on']))?>
													</span>
												</span>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</section>
