<?php
  session_start();
  //Define Language file paths
  define("LANG_EN_PATH", $_SERVER['DOCUMENT_ROOT'] . '/beyond/multilang/en/');
  define("LANG_RU_PATH", $_SERVER['DOCUMENT_ROOT'] . '/beyond/multilang/ru/');
 
if (isset($_GET['lang'])) 
{
     
    // GET request found
 
    if ($_GET['lang'] == 'ru') 
    {
      include LANG_RU_PATH . 'ru.php';
      $_SESSION['lang'] = 'ru';
    }  

    else
    {
       include LANG_EN_PATH .'en.php';
      $_SESSION['lang'] = 'en';
    }

}   
     
     //translate for russian
      else if (isset($_SESSION['lang'])) 
      {
 
    if ($_SESSION['lang'] == 'ru') 
          {
           include LANG_RU_PATH . 'ru.php';
          } 
 

     else {
          include LANG_EN_PATH . 'en.php';
          }
     
                   
     } 
     
     
    
    else 
    {
     
    include LANG_RU_PATH . 'ru.php';
    $_SESSION['lang'] = 'ru';
  }

?>