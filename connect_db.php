<?php

$debug_log = "";
$server_name = "LAPTOP-2R02G9RF";
$connection = array("Database"=>"Lexile", "UID"=>"sa", "PWD"=>"08901160", "CharacterSet"=>"UTF-8");
$conn = sqlsrv_connect($server_name, $connection);
if($conn){
    $debug_log = "connection established!";
}else{
    $debug_log = "Failed to connect MS DB";
    die(print_r(sqlsrv_errors(), true));
}
?>
//你好
<script>
    var log_message = "<?php echo $debug_log; ?>";
    console.log(log_message);
</script>

