<?php
if(isset($_GET['url'])) { $url = $_GET['url']; }
else { $url = "https://sites.evergreen.edu/dfl/wp-content/uploads/sites/187/2016/05/21.-Jan-Steen-The-Christening-Feast-1664.jpg"; }
?><!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Prototype Image Tool</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/skeleton.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container-fluid">
 
    <div class="row">
      <div class="six columns">
        <form id="add-manifest-form">
        <label for="manifest">Enter the URL of an image file:</label>
        <p style='position:relative;margin-bottom:0px;'>
        <input type='text' name='manifest' id='manifest' class='' style='width:100%' value="<?php echo $url; ?>"/>
        <button type="submit" class='button-primary' id='add' style='position:absolute;top:0px;right:0px;'>Add</button>
        </p>
        </form>      
      
      
	<div id='viewer-wrap' style='margin-top:0px;position:relative;'>	
	  <img id="preview" src="<?php echo $url; ?>" style='width:100%;'/>
	  <button id="reveal" class="button-primary">Reveal</button>
	  <div id="img_overlay" class='on'></div>
	</div>
	
      </div>
      <div class="six columns" style='margin-top:2em;'>
         <form id="sendchat" style='position:relative;margin-bottom:0px;width:97%;'>
           <input type='text' id='chat' style='width:97%'  placeholder="Ask a question ..."/>
           <input type='submit' style='position:absolute;top:0px;right:0px;' class='button-primary' style='position:absolute;top:0px;right:0px;background:white;' value="Send"/>
         </form>
        
	<div id="output-window" style="height:440px;overflow-y:scroll;">
		  <div id="output"></div>
	</div>

      </div>      
    </div>  
    
    
      
  </div>

  <script src="assets/js/script.js"></script>
 

</body>
</html>
