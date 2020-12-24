<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="age.css">
    <title>Document</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#send").click(function(){
    var dob=$('#dob').val();
    var time=$('#time').val();
    setInterval(function(){ 
      $.ajax({
      type:"POST",
      url:"post.php",
      data:{dob:dob,time:time},
      success:function(data){
        $('#result').text(data);
      }
    }) }, 1000);
  });
});
</script>

<body style="background-color: #2196f317">
<div class="text-center"><h1 id="heading"><b>Age Calculator</b></h1></div>
  <div class="container back">
    <form method='post'>
      <b>Date Of Birth :</b> <input type="date" id='dob' name="dob" class="feild"><br><br>
      <b>Birth Time :</b><input type="time" id='time' name="time" class="feild"><br><br>
      <input type="button" value="submit" name="submit" id='send' style="text-align:center;margin:2% 0 2% 0">
      <h1 id="result"></h1>
    </form>
  </div>
</body>
</html>