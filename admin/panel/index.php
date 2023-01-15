<?php include 'headerlo.php';?>
<?php
// session start
session_start();
  
// first check user if logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
?>
<title>ROAR | Admin Panel</title>
<style> 
    body{
       text-align: left;
    }
        button {
           color:lightgoldenrodyellow;
            font-size: 20px; 
        } 
        .button1 { 
            background-color: red; 
        } 
        .button2 { 
            background-color: blue; 
        } 
        .button3 { 
            background-color: ; 
        } 
</style> 
<div id="BodyWrapper">
            <div id="Body">    
    <div class="MyRobloxContainer" style = "width:900px;">
      <!-- Code starts here -->
      <button onclick="window.location.href='../chat'" class="button2">Admin Chat</button>
      <button onclick="window.location.href='ban.php'" class="button1">Ban User</button>
      <?php
     $handle = fopen("../../counter.txt", "r"); 
if(!$handle) { 
    echo "could not open the file"; 
} else { 
    $counter =(int )fread($handle,20);
        fclose($handle); 
        $counter++; 
        echo"Number of visits: ". $counter . "" ; 
    $handle = fopen("counter.txt", "w" ); 
    
    fwrite($handle,$counter);
    fclose ($handle); 
}
 ?> 
      <!-- Code ends here -->
      <div style="clear:both"></div>
            </div>
        </div>
        </div>