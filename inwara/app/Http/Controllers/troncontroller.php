<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class troncontroller extends Controller
{
  public function getData(){
    $url="https://inwara.quickbase.com/db/bnhau7zqc?a=API_GetRecordInfo&key=3557&usertoken=b32ft5_kv75_bw2i5y6c7hsrnyd5aqgrtbwckjnc&fmt=structured";             //"https://inwara.quickbase.com/db/bnhau7zqc?a=API_DoQuery&usertoken=b32ft5_kv75_bw2i5y6c7hsrnyd5aqgrtbwckjnc&query={16.EX.'Tron'}&fmt=structured";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_URL,$url);
    $result=curl_exec($ch);
    $var=simplexml_load_string($result);
    $var2=json_encode((array) $var);
    return ($var2);
  }
}
?>
