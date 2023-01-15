<?php include 'headerlo.php'?>
<?php
    $conn = mysqli_connect("mysql.ct8.pl", "m26459_users", "K7(5hxP5A$2F#qu@wiyC","m26459_users");
    if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
    }
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<?php
if (($_SESSION["id"]) == 2)
  echo "
<style>
a:hover {
    animation: hover 5s infinite;
}
@keyframes hover {
  0% { color: red; }
  10% { color: orange; }
  20% { color: yellow; }
  30% { color: lime; }
  40% { color: green; }
  50% { color: lightskyblue; }
  60% { color: blue; }
  70% { color: lavender; }
  80% { color: lightviolet; }
  90% { color: purple; }
  100% { color: lavenderblush; }
}
</style>"
?>
<?php
// Count how many people visited site
$handle = fopen("counter.txt", "r");
if(!$handle) {
    echo "could not open the file";
} else {
    $counter =(int )fread($handle,20);
        fclose($handle);
        $counter++;
    $handle = fopen("counter.txt", "w" );
    
    fwrite($handle,$counter);
    fclose ($handle);
}
?>
                              <div id="BodyWrapper"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<center>
  <br>
<br>
<br>
<br>
  <body>
                          <table>
    <tr>
      <th>ID‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th>Username‏‏‎‎</th>
      <th> ‎‎‏‏‎</th>
      <th>Description</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th>Join Date</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th>Admin</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
      <th> ‎‎‏‏‎</th>
    </tr>
    <?php
    $conn = mysqli_connect("mysql.ct8.pl", "m26459_users", "K7(5hxP5A$2F#qu@wiyC","m26459_users");
    if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
    }

    $sql = "SELECT id, username, description, robux, admin, tix, created_at, userlink from users ORDER BY id ASC";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
                echo"<tr><td>". $row["id"] ."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["username"] ."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["description"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["created_at"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["admin"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td>". $row["blank"]."<p>‏‏‎ ‎</p></td><td><a href=". $row["userlink"] . $row["id"]. ">View Profile</a><p>‏‏‎ ‎</p></td><td>";
        }
        echo "</table>";
    }
    else {
      echo "0 results.";
    }

    $conn-> close();
    ?>
<br>
    <br>
  
    <br>
    </table>
    </body>
</center>