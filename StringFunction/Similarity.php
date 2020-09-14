<?php
  
   $string_one = 'Hey Today i\'m going to takling about the php ';
   $string_two = 'Hey Tommaro i\m going to talking about the php';
   
   similar_text($string_one,$string_two,$result);
   echo 'The Similarity Between Text is '.$result;
   
?>