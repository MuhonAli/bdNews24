

<div class="site-section bg-light" style="padding: 20px 0px;">
  <div class="container">
    <div class="row">

      <div class="col-md-6 offset-2 col-lg-8 mb-5 p-5 bg-white">
                    <form method="post" action="<?=base_url()?>Login/confirm_reset_password">

        <?php  if($this->session->flashdata('message')){ echo $this->session->flashdata('message');}?>

                    <div class="single-input">
                        <input class="form-control" type="password" placeholder="Enter new password"  name="password" id="password" required="">
                    </div>

                    <div class="error"><?=form_error('password')?></div><br>

                    <div class="single-input">
                        <input class="form-control" type="password"  data-rule-equalTo="#password" placeholder="Confirm new password" name="password_confirm" id="confirm_password" required="">
                    </div>

                    <input type="hidden" name="token" value="<?=$token?>">
                    <div class="error"><?=form_error('confirm_password')?></div><br>

                    <div class="single-input">
                        <center><button type="submit" class="food__btn btn-block validate-form" onclick="return Validate()"><span>Change Password</span></button></center>
                    </div>
                </form>
        </div>
    </div>
</div>
</div>