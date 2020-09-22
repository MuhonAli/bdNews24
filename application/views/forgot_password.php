

<div class="site-section bg-light" style="padding: 20px 0px;">
  <div class="container">
    <div class="row">

      <div class="col-md-6 offset-2 col-lg-8 mb-5 p-5 bg-white">
                    <form method="post" action="<?=base_url()?>Login/reset_password">

        <?php  if($this->session->flashdata('message')){ echo $this->session->flashdata('message');}?>

                    <div class="single-input">
                        <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                    </div>
                    <div class="error"><?=form_error('email')?></div><br>

                    <div class="single-input">
                        <center><button type="submit" class="food__btn btn-block"><span>Get Reset Password Link</span></button></center>
                    </div>
               
                </form>

        </div>
    </div>
</div>
</div>