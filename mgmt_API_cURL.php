<?php
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://dev-b19jvteg.us.auth0.com/api/v2/prompts/login/custom-text/en",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "{ \"login\": { \"title\": \"Welcome aboard!\", \"description\": \"Log in to book your travel with Cruise0\" } }",
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer MGMT_API_ACCESS_TOKEN",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
