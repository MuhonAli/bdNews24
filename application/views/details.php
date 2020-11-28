
<!-- Breadcrumb -->
<div class="container">
	<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6"></div>

		<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
			<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
			<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
				<i class="zmdi zmdi-search"></i>
			</button>
		</div>
	</div>
</div>

<!-- Content -->
<section class="bg0 p-b-140 p-t-10">
	<div class="container">
		<?php  $msg=$this->session->flashdata('message');
		if(!empty($msg)){ echo  "<br>".$msg;  } ?> 
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-30">
				<div class="p-r-10 p-r-0-sr991">
					<!-- Blog Detail -->
					<div class="p-b-70">
						<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">

						</a>

						<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
							<?=$news[0]['title']?>
						</h3>

						<div class="flex-wr-s-s p-b-40">
							<span class="f1-s-3 cl8 m-r-15">
								<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">

								</a>

								<span class="m-rl-3">-</span>

								<span>
									<?=date('h:i a, d M',strtotime($news[0]['created_on']))?>
								</span>
							</span>

							<span class="f1-s-3 cl8 m-r-15">
								<?=$news[0]['views']?> Views
							</span>

							<a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
								<?=$news[0]['review']?> Comment
							</a>
						</div>

						<div class="wrap-pic-max-w p-b-30">
							<img src="<?=base_url()?>asset/images/news/<?=$news[0]['image']?>" alt="IMG">
						</div>

						<p class="f1-s-11 cl6 p-b-25">
							<?=$news[0]['description']?>
						</p>
					</div>
					<div class="menu__descrive__area">
						<div class="container">
							<div class="row" style="margin-top:40px;">
								<div class="col-md-12 ">
									<div class="well well-sm">

										<div class="row" id="post-review-box">
											<div class="col-md-12">
												<form accept-charset="UTF-8" action="<?=base_url()?>Review/add_reviews/<?php echo $news[0]['id']; ?>" method="post">

													<textarea required="" class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Comment..." rows="5"></textarea>

													<div class="text-right">
														<div class="stars starrr" data-rating="0"></div><br>
														<button class="size-a-17 btn-info" type="submit">Post Comment</button>
													</div>
													<br>
												</form>
											</div>
										</div>
									</div> 

								</div>
							</div>
						</div>
						<!-- Start Tab Content -->
						<div class="menu__tab__content tab-content" id="nav-tabContent">
							<!-- Start Single Content -->
							<div class="review__wrapper">
								<!-- Start Single Review -->
								<?php foreach ($reviews as $review) { 
									$replies =  $this->db->select('*')->from('replies')->join('users', 'replies.user_id =users.id')->where('replies.comment_id',$review['review_id'])->get()->result_array();
								//	echo $this->db->last_query();
									?>
									<div class="" style='margin-bottom: 60px'>
										<div class="single__review d-flex">


											<div class="review__details">
												<h3><strong>Email : </strong><?=$review['email']?></h3>
												<p><strong>Comment : </strong><?=$review['comment']?></p>
											</div>
										</div>
										<br>

										<?php foreach ($replies as $reply) { ?>
											<div class="single__review d-flex" style="margin-left:10%;width: 90%;margin-bottom: 10px;display:block">

												<div class="review__details" style="display: block">
													<h3><strong>Email : </strong><?=$reply['email']?></h3>
													<p><strong>Comment : </strong><?=$reply['text']?></p>
												</div>
											</div>
										<?php } ?>

										<div class="single__review d-flex" style="margin-left:10%;width: 90%;margin-bottom: 10px;">

											<form action="<?=base_url()?>Review/add_reply/<?=$review['review_id']?>" method="post" style="width: 100%;" >
												<div class="review__details" style="height: 110%;">
													<textarea required="" name="text" placeholder=" Leave a Reply..." style="width: 100%" rows="4"></textarea>
													<input class="btn btn-info" type="submit" name="reply" style="margin-left:90%;margin-top: 10px;">
												</div>
											</form>

										</div>
									</div>

									<!-- End Single Review -->
								<?php } ?>
							</div>
							<!-- End Single Content -->
						</div>
						<!-- End Tab Content -->
					</div>

				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-md-10 col-lg-4 p-b-30">
				<div class="p-l-10 p-rl-0-sr991 p-t-70">						
					<!-- Category -->
					<div class="p-b-60">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Category
							</h3>
						</div>

						<ul class="p-t-35">
							<?php foreach ($categories as $category) { ?>
								<li class="how-bor3 p-rl-4">
									<a href="<?=base_url()?>News/category/<?=$category['id']?>" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
										<?php  echo $category['name']; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
					<!-- Popular Posts -->
					<div class="p-b-30">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Popular Post
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

<style>
	.review__details{
		padding: 20px;
		background: #e9ecef;
		width: 100%;
		color: #111;
	}
</style>