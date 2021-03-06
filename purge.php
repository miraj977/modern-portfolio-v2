<?php
include 'const/constants.php';

try {
        $head = [];
        $head[] = 'Content-Type: application/json';
        $head[] = 'X-Auth-Email: '.$email;
        $head[] = 'Authorization: Bearer '.$api;
        $head[] = 'cache-control: no-cache';

        $url = 'https://api.cloudflare.com/client/v4/zones/'.$zone_id.'/purge_cache';
        // You can also purge files like:
        // $purge = ['files' => ['example.com/styles.css']]
        $purge = ['purge_everything' => true];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($purge));
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

}
catch(Exception $e) {
  print($e);
}
?>

<script type="text/javascript">
setTimeout(function() {
    window.location.href = "/";
}, 3000);
</script>
