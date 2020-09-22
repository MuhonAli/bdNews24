
<!-- Footer -->
<footer>
	<div class="bg2 p-t-40 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<a href="<?=base_url()?>">
							<img class="max-s-full" src="<?=base_url()?>asset/news/images/icons/logo-0001.png" alt="LOGO">
						</a>
					</div>

					<div>
						<p class="f1-s-1 cl11 p-b-16">
						</p>

						<p class="f1-s-1 cl11 p-b-16">
							Any questions? Call us on 01789 134 567
						</p>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Popular Posts
						</h5>
					</div>

					<ul>

						<?php
						foreach ($popularForFooter as $popularFF) {?>
							<li class="flex-wr-sb-s p-b-20">
								<a href="<?=base_url()?>News/details/<?=$popularFF['id']?>" class="size-w-4 wrap-pic-w hov1 trans-03">
									<img src="<?=base_url()?>asset/images/news/<?=$popularFF['image']?>" alt="IMG">
								</a>

								<div class="size-w-5">
									<h6 class="p-b-5">
										<a href="<?=base_url()?>News/details/<?=$popularFF['id']?>" class="f1-s-5 cl11 hov-cl10 trans-03">
											<?=$popularFF['title']?>
										</a>
									</h6>

									<span class="f1-s-3 cl6">
										<?=date('h:i a, d M',strtotime($popularFF['created_on']))?>
									</span>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Category
						</h5>
					</div>

					<ul class="m-t--12">
						<?php foreach ($categoryForFooter as $categoryFF) {?>
							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="<?=base_url()?>News/category/<?=$categoryFF['id']?>" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
									<?=$categoryFF['name']?>
								</a>
							</li>
						<?php } ?>


					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="bg11">
		<div class="container size-h-4 flex-c-c p-tb-15">
			<span class="f1-s-1 cl0 txt-center">
				Copyright © 2020 

				<a href="<?=base_url()?>" class="f1-s-1 cl10 hov-link1">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | BDNEWS24</a>
				</span>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="video-mo-01">
					<iframe src="<?=base_url()?>asset/news/https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->	
	<script src="<?=base_url()?>asset/news/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url()?>asset/news/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url()?>asset/news/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>asset/news/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url()?>asset/news/js/main.js"></script>

</body>
</html>