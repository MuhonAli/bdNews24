  <div class="container">
<div class="col-md-12">

  <?php  if($this->session->flashdata('message')){ echo "<center>".$this->session->flashdata('message')."</center>"; } ?>
<br>
  <center><div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" id="employee-button" class="btn btn-success"> ACCOUNT LOGIN </button>
  </div> </center>         
  <form  action="<?=base_url()?>Login/index" method="post" class="p-5 bg-white employee-form">

    <div class="row form-group">

      <div class="col-md-12">
        <label class="font-weight-bold" for="email" type="email" placeholder="Email Address" value="<?=set_value('email')?>" >Email Address </label>
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
        <input type="submit" value="Login" class="btn btn-primary pill px-4 py-2">
      </div>
    </div>
    <a href="<?=base_url()?>Register">No account yet? Click to Create Account</a>
  </form>
</div>
</div>