   <div class="content-wrapper">

    <section class="content-header">
      <h1 class="text-center">BD NEWS 24 Dashboard</h1>
      <hr>
    </section>


    <!-- DataTables Example -->
    <div class="card col-md-6 col-md-offset-3">
      <div class="card-header">
        <h3 class="text-center">Admin Profile</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">

          <?php  if($this->session->flashdata('message')){

           echo $this->session->flashdata('message');
         }

         ?>

         <ul class="list-group list-group-flush">
          <li class="list-group-item">Email : <strong><?=$admin[0]['email']?></strong> <a  data-toggle="modal" data-target="#change_email"><i class="fa fa-edit" style="float: right;"></i></a></li>
          <li class="list-group-item">Password : <strong> <i>password hidden</i></strong> <a  data-toggle="modal" data-target="#change_password"><i class="fa fa-edit" style="float: right;"></i></a></li>
        </ul>


        <!-- email update -->
        <div class="modal fade" id="change_email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?=base_url()?>Admin/change_email/<?=$admin[0]['id']?>">
                  <input class="form-control" type="text" name="email" value="<?=$admin[0]['email']?>" required><br>
                  <input type="submit" name="submit" class="btn btn-info btn-block">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <!-- phone number update -->
        <div class="modal fade" id="change_phone_number" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Phone Number</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?=base_url()?>Admin/change_phone_number/<?=$admin[0]['id']?>">
                  <input class="form-control" type="text" name="phone" value="<?=$admin[0]['phone']?>" required><br>
                  <input type="submit" name="submit" class="btn btn-info btn-block">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

              </div>
            </div>
          </div>
        </div>


        <!-- password update -->
        <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?=base_url()?>Admin/change_password/<?=$admin[0]['id']?>">
                  <input class="form-control" type="password" name="password" placeholder="Enter new password" required><br>
                  <input type="submit" name="submit" class="btn btn-info btn-block">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

              </div>
            </div>
          </div>


        </div>

      </div>


    </div>
    <!-- /.container-fluid -->





  </div>

  <style type="text/css">
    .container{
      margin-bottom: 30px;
    }
  </style>