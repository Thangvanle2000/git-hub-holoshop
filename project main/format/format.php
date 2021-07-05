<?php 
  class Format {
	  public function formatDate($date){
         return date('F j , Y, g:i a' ,strtotime($date));
	  }
	  public function textShorten($text, $limit){
		  $text = $text. "";
          $text = substr($text,0, $limit);
		  $text = substr($text,0, strpos($text , ''));
          $text = $text. ".....";
		  return $text;
	  }
	  public function validition($data){
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
	  }
  }

?>