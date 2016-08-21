<?php 

session_start();


$name  =  $_POST['name'];
$place =  $_POST['place'];
$img = $_FILES["img"]; 
$imgName = $_FILES["img"]['name'];
$arr=[];
$arrHead=[];



//$_SESSION['arr'] = $arr;
//$_SESSION['arrHead'] = $arrHead;


$_SESSION['name'] = $_POST['name'];
$_SESSION['place'] =  $_POST['place'];



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
if(isset($_POST['upload'])){    
$_SESSION['img'] = $target_file;   
    
    

$uploadedFiles = fopen('upload.txt', 'a+') or die("Unable to open file!");  

$uploadedFilesSSS = fread($uploadedFiles , filesize('upload.txt'));
fwrite($uploadedFiles , "\n".'@@@_$$__%%%'.$name.'|'.$place.'|'.$target_file);
array_push($arr,$uploadedFilesSSS);
    
fclose($uploadedFiles);

    foreach($arr as $a){
        $arr_ex1=explode('@@@_$$__%%%',$a);
    }
    foreach($arr_ex1 as $a){
       
        $arr_ex2=explode('|',$a);
        array_push($arrHead,$arr_ex2);
        $_SESSION['$arr_ex2'] =  $arr_ex2;
    }
    print_r('<pre>');
       print_r($arrHead);
    print_r('</pre>');
header ('Location: index.php');    
    
}else{    
    header ('Location: index.php');
}










