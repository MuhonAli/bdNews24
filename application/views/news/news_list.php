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
          <div class="settingsinf">

            <?php echo substr($row['description'], 0, 150); ?>
          </div>
        </td>

        <td>
          <div class="settinginfdetails">
            <p><a href="<?=base_url()?>Manage_news/edit_news/<?=$row['id']?>" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a> &nbsp |  &nbsp

              <a href="<?=base_url()?>Manage_news/delete_news/<?=$row['id']?>" data-tooltip="tooltip"><span class="glyphicon glyphicon-trash"></span></a></p>
            </div>
          </td>
        </tr> 
        <!--end tr --> 

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