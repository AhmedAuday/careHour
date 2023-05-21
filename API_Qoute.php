

<?php
//fetch online api using php to get then show on pop
// $url = 'https://api.quotable.io/random';
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($ch);
// curl_close($ch);
// echo $result;

#fetching API data by API key using https://api.api-ninjas.com/v1/quotes?category=medical with key
//fetch only quote in the API
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.api-ninjas.com/v1/quotes?category=medical",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-api-key: ikvZ6B8DHjPbdg/jQ9RgNQ==uclebjeFzSf94Ic3"
    ],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    foreach (json_decode($response) as $key => $value) {
        echo $value->quote;
    }
    //echo $response;
}

?>
