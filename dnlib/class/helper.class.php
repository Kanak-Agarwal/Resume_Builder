<?php
class Helper{
    
    public static $isPageAvailale = 'false';
    public function loadcss($file_name){
        return ASSET_URL.'/css/'.$file_name; }
        public function loadjs($file_name){
        return ASSET_URL.'/js/'.$file_name; }
        public function loadimage($file_name){
        return ASSET_URL.'/images/'.$file_name; }
public function url($route) {
    return SITE_URL.$route;
}
public function redirect($route){
    header("location: ".SITE_URL. $route);
}
public function isAnyEmpty($array){
    foreach ($array as $key => $value) {
    if(!$value) return $key;
    }
    return false;
}
public function route($path_url,$function){
   
    $address_bar_url = $_SERVER['PATH_INFO'] ?? NULL; 
$address_bar_url = rtrim($address_bar_url,'/');
$address_bar_url = ltrim($address_bar_url,'/');
$abu_data=explode('/', $address_bar_url);
$pu_data=explode('/',$path_url);
// echo "we";

$is_valid=true;
if(!$address_bar_url && $path_url=='/'){
    self::$isPageAvailale=true ;
    $function(array());
}
$data = '';
foreach ($pu_data as $index=>$parameter){
    if(!isset($abu_data[$index])) return ;
    // echo "we1";
    if($abu_data[$index]==$parameter){
        // echo "we2";
    }elseif(str_contains($parameter, '$')){
        // echo "we3";
    $data[ltrim($parameter, '$')]=$abu_data[$index];
    }else{
        
    $is_valid=false;
    }
    }  
if($is_valid) {
    self::$isPageAvailale=true ;
    $function($data);
}



}
}