<style type="text/css">
 
 div#wrap{width:100%;  background: #1c75bc;}
 .sucess-story-content div img {
     height: 120px !important;
 }
 
</style>


<div id="wrap" style="padding:3%">
   
   
    <div class="row">
<?php if(!empty($category))
{
foreach($category as $cats) { ?>
    
 <div class="col-xs-6 col-md-3" style="min-height: 300px;">
    <div class=" thumbnail">
        <span class="round-tabs one" style="border: 2px solid #ddd;color: rgb(34, 194, 34);">
            <i class="glyphicon glyphicon-home" style="font-size:50px;text-align: center;"></i>
</span>
    <!--  <img src="<?php echo base_url().'content/uploads/images/'.$sucess->image; ?>" class="img-circle" style="width:200px; height: 200px;">-->
      <div class="caption">
        <h3><a href="<?php echo base_url(); ?>" class="btn btn-primary" role="button"><?php echo $cats->category_name; ?></a></h3>
      </div>
    </div>
  </div>
 <?php }}
 else{
     echo '<div style="text-align: center; font-size:55px;color:red;"><h1 style="color:red;"> Sorry ! No categories are available to show.</h1></div>';
 }?>
    </div>
 
    <div class="clear"></div>
   
   </div> <!-- hit bottom and load content--> 























          
          
      </div>
      
      
  </body>
</html>