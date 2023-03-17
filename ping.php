<?php
$ip = $_POST['ip'];
$port = $_POST['port'];
$duration = $_POST['duration'];

exec('echo adminpassword | runas /user:administrator fullPathToProgram',$output);
print_r($output);

$output = array();
exec("ping -c $duration -p $port $ip", $output);


$result = implode("\n", $output);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ping Results</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Ping Results</h1>
    <pre id="result"><?php echo $result; ?></pre>
    
  </div>
</body>
</html>