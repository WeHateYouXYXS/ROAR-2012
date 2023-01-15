<?php
// session start
session_start();
  
// first check user if logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Redirecting to Admin Panel...</title>
<center>
<h1>Please wait...</h1>
</center>
</head>
<script>
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {
  console.log('Please wait...');
  await sleep(2000);
  console.log('what');

  // Sleep in loop
  for (let i = 0; i < 5; i++) {
    if (i === 3)
      await sleep(2000);
    console.log(i);
  }
}

demo();
</script>
</html>
<?php
sleep(2);
// then we gonna redirect due to security reasons.
header("Location: https://www.rccservice.xyz/admin/panel/");
die();
exit();
?>