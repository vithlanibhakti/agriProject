
brightness_4
<!DOCTYPE html> 
<html lang="en" > 
  
<head> 
    <meta charset="UTF-8"> 
      
    <title> 
        Bootstrap Navbar Change 
        Active Class Link 
    </title> 
      
    <link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 
      
    <link rel='stylesheet' href= 
'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'> 
      
    <script src= 
'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'> 
    </script> 
      
    <script src= 
'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'> 
    </script> 
      
    <style> 
	body{
  font-sze:14px;
}

.container{
 max-width:960px;
  margin:0 auto;
}
nav ul li{
  list-style:none;
  float:left;
  padding-right:20px;
}
nav ul li a{
  text-decoration:none;
  color:#222;
  background-color:#ccc;
  padding:4px 5px;
}
.active{
  background-color:#d90000;
  color:#fff;

}
 

        </style>
		<body>
  <div style="text-align:center;margin-top:25px;font-weight:bold;texxxt-decoration:none;">
  Visit <a href="https://themeshook.com/" px;target="_blank">My Blog</a>
</div>
  <div class="container">
      <nav class="navecation">
       <ul id="navi">
    <li><a class="menu active"#">About </a></li>
    <li><a class="menu" href="#">Contact  </a></li>
         <li><a class="menu" href="#">Services</a></li>
    <li><a class="menu" href="#">Contact Us</a></li>          
    <li><a class="menu" href="http://www.mywebtricks.com/2014/03/add-active-class-to-navigation-menu.html">Read Our Blog</a></li>
  </ul>
    </nav>
  </div>
           
           <body>
    <script> 
     $(function(){
    $page = jQuery.url.attr("file");
    if(!$page) {
        $page = 'index.html';
    }
    $('#navigation li a').each(function(){
        var $href = $(this).attr('href');
        if ( ($href == $page) || ($href == '') ) {
            $(this).addClass('on');
        } else {
            $(this).removeClass('on');
        }
    });
});
    </script> 
</body> 
  
</html> 