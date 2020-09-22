

  <div class="container">
<div class="col-md-12">
    <div class="row">

      <div class="col-md-12 bg-white">

<?php  if($this->session->flashdata('message')){ echo "<center>".$this->session->flashdata('message')."</center>"; } ?>

       
        <form  action="<?=base_url()?>Register" method="post" class="p-5 bg-white employee-form">
          <h3 class="text-center">Register</h3>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="font-weight-bold" for="email" type="email" placeholder="Email Address" value="<?=set_value('email')?>" >Email</label>
              <input type="email" id="email" name="email"  class="form-control" placeholder="Email Address" required=" ">
            </div>
          </div>
          <div class="error" style="color: red;"><?=form_error('email')?></div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="phone">Password</label>
              <input class="form-control" name="password" type="password" placeholder="Password" value="<?=set_value('password')?>" required=" ">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Sign Up" class="btn btn-primary pill px-4 py-2">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
