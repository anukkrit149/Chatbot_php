<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 12-12-2018
 * Time: 12:01 PM
 */

if (isset($_REQUEST['hub_challenge'])){
   $challenge=$_REQUEST['hub_challenge'];
   $token=$_REQUEST['hub_verify_token'];
}

if ($token=="EAAHKnZBsgCH0BAKju0IYsQ6w6WzwGzgJgSGM1PkwMFwa0JQrcSHpZCfr4C8Xbi6RubZCks5BA3XEpwDiBP3S5EAZCDyXjiES3rWkPeufUzMaLYtxn1PubusLsDrhiuonZBYvWzqq4nRQ8P8N7AJ83bZAbC76llOqOE0rHLwVeful4CECggOqNs"){
    echo $challenge;
}