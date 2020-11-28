<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    
<div class="content-wrapper">
  <section class=""  id="contentheid">
    <div class="row">
     <div class="col-sm-12">

      <center> <h3>
        Manage news
      </h3></center>
    </div>
  </div>
</section>
<?php echo $this->session->flashdata('message');  ?>

<form method="get" enctype="multipart/form-data" action="<?=base_url()?>Manage_news/index" id="mainform">   
  <div class="row">
    <div class="col-sm-12">
     <div class="">
      <div class="settingstablebody box-body table-responsive">
        <table class="table table-hover">
          <tbody>


           <colgroup>
            <col width="50">
            <col width="250">
            <col>
          </colgroup>

          <tr class="catmanageheader">
            <th>Id</th>    
            <th>Title</th>    
            <th>Category</th>    
            <th>Description</th>    
            <th>Pinned News</th>    
            <th>Action</th>    
          </tr>
          <tr>

            <td></td>
            <td>
             <div class="settingsinf">
               <input type="text" placeholder="News Title" name="title" value="<?php if(!empty($title)){ echo $title;
               } ?>" >
             </div>
           </td>
           <td></td>
           <td>
             <div class="settingsinf">
               <input type="text" placeholder="Description" name="price" value="<?php if(!empty($description)){ echo  $description;  } ?>" >
             </div>
           </td>
           <td></td>
           <td></td>
           <td><button type="submit" id="" name="Search">Search</button></td>

         </tr>
       </form>            
       <!-- start tr -->
       <?php
       foreach($result as $row) { ?>

        <td> <?=$row['id']?></td>
        <td>
          <div class="settingsinf">
            <?=$row['title']?>
          </div>
        </td>

        <td>
          <div class="settingsinf">
            <?=$row['name']?>
          </div>
        </td>
        <td>
          <div class="settingsinf" style="width: 300px;">

            <?php echo substr($row['description'], 0, 150); ?>
          </div>
        </td>

        <td>
          <div class="settingsinf">
            <?php if (!empty($row['pinned_on'])) { ?>
              <?=date("Y-m-d",strtotime($row['pinned_on']))?><br>
              <a  data-toggle="modal" data-target="#changePinned-<?=$row['id']?>" href="" data-tooltip="tooltip">Change Date</a>
            <?php } else{ ?>
              <a  href="Welcome/pin_news/<?=$row['id']?>" data-tooltip="tooltip">Add to Pinned News</a>
            <?php } ?>
          </div>
        </td>
        <td>
          <td>
            <div class="settinginfdetails">
              <p><a href="<?=base_url()?>Manage_news/edit_news/<?=$row['id']?>" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a> &nbsp |  &nbsp

                <a  data-toggle="modal" data-target="#myModal-<?=$row['id']?>" href="" data-tooltip="tooltip"><span class="glyphicon glyphicon-trash"></span></a></p>
              </div>
            </td>
          </tr> 
          <!--end tr --> 

          <div class="modal fade" id="myModal-<?=$row['id']?>" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

              <!-- Modal content-->
              <div class="modal-content">
               <div style="padding:30px;">
                 <h3 class="text-center">Are you sure to delete this news?</h3>
                 <div class="text-center">
                   <a class="text-center btn btn-danger" href="<?=base_url()?>Manage_news/delete_news/<?=$row['id']?>">Yes</a>
                   <a href="#" class="text-center btn btn-success" data-dismiss="modal">No</a>
                 </div>

               </div>
               <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        <div class="modal fade" id="changePinned-<?=$row['id']?>" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
             <div style="padding:30px;">
               <h3 class="text-center">Change Pinned Date?</h3>
               <div class="text-center">
                <form method="get" enctype="multipart/form-data" action="<?=base_url()?>Welcome/pin_news/<?=$row['id']?>" id="mainform"> 
                  <input type="date" name="pinned_on" required="">  
                  <input type="submit" name="Submit">  
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
    <?php }?>

  </tbody>
</table>
</div>
</div>
</div>

<!-- start pagination -->
<div class="paginationtables">
  <ul style="list-style: none;">
    <center><li><?php

    echo $this->pagination->create_links(); ?></li></center>

  </ul>
</div>
<!--end paginatioin -->



</div><!-- box header -->

</form>

<!-- /.box-body -->
</div>
<!-- /.box --> 
</div>  


</div>
<!-- /.row -->
<!-- Main row -->


</section>
<!-- /.content -->
</div>