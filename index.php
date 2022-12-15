
<html>
<head>
<link rel="stylesheet" href="index.css">
</head>


<body>
<div id="whole">

  
    <h1 class="title">ka・ke・i・bo</h1>

     <!-- フォームここから -->
    <form action="insert.php" method="post">

        <?php 
          $today = date('Y/m/d');
          echo $today;
         ?>     
             <p class="record">Let's record !</p> 
            
   
                  <label class="cssitem">購入品<input type="text" name="item"></label>
                  <div class="csstype">
                        <label>費目  </label>
                            <input type="radio" name=type value="食費" >食費
                            <input type="radio" name=type value="娯楽費">娯楽費
                            <input type="radio" name=type value="交通費">交通費 
                   </div>
                  <label class="cssnum">数量<input type="text" name="num"></label><br>
                  <label class="cssprice">金額<input type="text" name="price"></label><br>
                  <label class="cssurl">URL<input type="text" name="itemurl"></label><br>
                  <input type="submit" class="btnsb"  value"送信">
      </form>
    <!-- フォーム↑ここまで -->
      <div class="btn">
       <button class="btnall"  onclick="location.href='select.php'">view all</button>
       <button class="btnitem"  onclick="location.href='selectsyukei1.php'">view by item</button>
       </div>
</div>




<script src="<https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/main.js"></script>


</body>
</html> 
