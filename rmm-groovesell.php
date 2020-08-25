<?php

/** 
 * Webhook created to test JSON values sent via GrooveSell.
 * 
 * 
 * @author: Adrian Young-Hoon
 * @version: 1.0
 * 
*/

header('Content-Type: application/json');
$request = explode('&', file_get_contents('php://input'));


foreach ($request as $pair) {
    $part = explode('=', $pair);
    $str .= $part[0] . ": " . urldecode($part[1]) . "\n";
    /*
    if ($part[0] == "buyer_email") {
        $strEmail = urldecode($part[1]);
    break;
    }
    */
}


//$req_dump = print_r( $strEmail . "\n\n" . $result, true );

$req_dump = print_r( $str . "\n\n" , true );
$fp = file_put_contents( 'request.log', $req_dump );

?>
