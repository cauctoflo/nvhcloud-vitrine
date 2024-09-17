
    <?php 
    /** 
    * Getting started with the WHMCS API Tutorial 
    */ 
     
    // Set your WHMCS URL and API Authentication Credentials 
    $whmcsUrl = "https://manager.nvhcloud.com/ "; 
    $apiIdentifier = "Ym1buNZWpfcOxLNrW9jzV5JiIumzd1hQ"; 
    $apiSecret = "hFHhQfqhNnzBjuNF6ce1bwRBwUrQcsmY"; 
     
    // Build post values 
    $postfields = array( 
    'identifier' => $apiIdentifier, 
    'secret' => $apiSecret, 
    'action' => 'GetClients', 
    'responsetype' => 'json', 
    ); 
     
    // Call the API 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php'); 
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields)); 
    $response = curl_exec($ch); 
    if (curl_error($ch)) { 
    die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch)); 
    } 
    curl_close($ch); 
     
    // Decode response 
    $jsonData = json_decode($response, true); 
     
    // Dump array structure for inspection 
    var_dump($jsonData); 