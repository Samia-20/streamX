<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Af-tgc2sRZb2FkUaYy8ltBriqWaBX1h3acdAcg2mXXN04FnCnEzIGgP46thIWfmPmoH4jT7iYNRIALGb',//client id
        'EODkkzk6X-Bn25dVgdF_F8jmex1TvdGYMrRasmXXA_N_NtROgrFxf2akMdJWe7DZWvtJ0JnMwTyGOSfn' //secret id

    )
    );

?>