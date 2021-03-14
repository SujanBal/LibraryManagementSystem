
<!DOCTYPE html>
  <html>
  <head>
    <title>Login</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Wendy+One" rel="stylesheet">
  </head>

  <body style="background-image: url(./img/door.jpg);background-repeat: no-repeat;background-size: cover">
      
          <div style="text-align:center;height:200px;width:800px;margin:0 auto;margin-top:200px;">
            <h2 style="color:white;font-family:Luckiest Guy;font-size: 70px;">You are here for</h2>
          </div>

         <div style="text-align:center;height:60px;width:400px;margin:0 auto;margin-top:-30px;">
         	<button class="btn btn-default" style="width:120px;height:50px;float:left;font-size: 18px"><a style="text-decoration:none" href="<?php echo URL;?>registration">Registration</a></button>
            <button class="btn btn-default" style="width:100px;height:50px;float:middle;font-size: 18px"><a style="text-decoration:none"  href="<?php echo URL;?>library">Library</a></button>
            <button class="btn btn-default" style="width:120px;height:50px;float:right;font-size: 18px"><a style="text-decoration:none" href="#" title="Content Not Found" data-toggle="popover" data-placement="right" data-content="Sorry!!! We are under maintainance.">Attendance</a></button>
         </div>
  </body>
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

</html>
