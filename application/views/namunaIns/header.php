<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   
    <meta name="description" content=" Bird Education Society - Nepal is a pure non-profit organization.">
    <meta name="keywords" content="BES, bcdbes, besnepal, besnepal.org, NGO, ngo in nepal, sauraha, chitwan, bes nepal">
    

    <?php if(isset($meta))
{
     foreach ($meta as $data)
     {
         $title[] = $data->value;
     }
}
?>  
    <link rel="shortcut icon" href="<?php echo base_url().'content/uploads/images/'.$title[4]; ?>">
	<title><?php echo $title[1]; ?></title>
        
        <link rel="stylesheet" href="<?php echo base_url().'content/bootstrap/css/bootstrap.css';?>" type="text/css"> 
         <link rel="stylesheet" href="<?php echo base_url().'content/bootstrap/css/bootstrap.min.css';?>" type="text/css"> 
         <script src="<?php echo base_url().'content/uploads/scripts/jquery.js'; ?>"></script> 
          <link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/custom.css';?>" type="text/css"> 
  </head>
  <body>
      <div id="fullBodyWrapper">
          
          <div style="min-height: 500px;background-color: #cdcdcd;">
          
          
          
          
          <div class="header" style="margin: 0; width: 100%; padding: 0% 5% 0% 5%;height: 85px;background-color: #31b0d5; position: relative; top: 100px;">
            <?php foreach ($headerlogo as $hlogo){
                $logo = $hlogo->description;
            } ?>
            
                <div id="logo" style="width:20%; float: left;">
                    <img src="<?php echo base_url().'content/uploads/images/'.$logo; ?>" alt="BnW logo" style="height: 80px;" />
                </div>
                
           <div class="menu_block">
           <nav  class="nav" >
            <ul class="nav-list">        
                    <?php

            $this->load->helper('testnav_helper');

            fetch_menu (query(0));


        ?>   
                    
            </ul>
              </nav>
             
           </div>
           <div class="clear"></div>
            
          <script>
;(function($) {
	$(function() {

		$('.nav').append($('<div class="nav-mobile"></div>'));

		$('.nav-item').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');

		$('.nav-mobile').click(function(){
			$('.nav-list').toggle();
		});

		$('.nav-list').on('click', '.nav-click', function(){

			$(this).siblings('.nav-submenu').toggle();

			$(this).children('.nav-arrow').toggleClass('nav-rotate');
			
		});
	    
	});
	
})(jQuery);
</script>    
            
               
        </div>   
           
          </div> 
    
          
          
          
          
          
          
          
          
          
          
          
          
    