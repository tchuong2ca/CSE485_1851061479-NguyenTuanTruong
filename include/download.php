<?php
if(isset($_GET['linkdown'])) {
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://restpack.io/api/html2pdf/v6/convert",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => http_build_query(array("url" => "https://tuantruong-vn.000webhostapp.com/index.php?page=frontend/indexNoJs.php&user_id=".$_GET['linkdown'], "json" => true)),
  CURLOPT_HTTPHEADER => array(
    "x-access-token: 1LN2ymk9SJJmdaTrtJKB2uXWk6Lj30D6dg4WCciLJDJc3dgv"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $json_response = json_decode($response, true);
    $image = $json_response['image'];
    echo "<script>window.open('$image','_blank')</script>";
  /*
    (
      [cached] => false
      [height] => 768
      [image] => https://cdn.restpack.io/a/cache/pdf/96f6cd877429e5b37e96533cff96c52ff10fc687d537d6cad72f1f2795c020ec
      [remote_status] => 200
      [run_time] => 1166
      [url] => https://www.google.com/
      [width] => 1280
    )
  */
}
   
}
?>