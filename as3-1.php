<?php
$numbers = [1,2,3,4,5,6,7,8,9];
$number= 4;
 function searchInArry($array,$number)
 {
      for($i=0 ; $i<count($array);$i++)
      {
          if($array[$i]==$number)
          {
            return 'yes';
          }
      }
 }
 echo searchInArry($numbers,$number);