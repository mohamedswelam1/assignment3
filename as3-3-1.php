<?php


if (isset($_POST['submit'])) {

$subjectone = $_POST['subjectone'];
$subjecttwo = $_POST['subjecttwo'];
$subjectthree = $_POST['subjectthree'];
$subjectfour = $_POST['subjectfour'];
$subjectfive = $_POST['subjectfive'];
 

if($subjectone >=50)
{
    $success[]=$subjectone;

}
else
{
    $fail[]=$subjectone;

}

if($subjecttwo >=50)
{
    $success[]=$subjecttwo;

}
else
{
    $fail[]=$subjecttwo;

}
if($subjectthree >=50)
{
    $success[]=$subjectthree;

}
else
{
    $fail[]=$subjectthree;

}

if($subjectfour >=50)
{
    $success[]=$subjectfour;

}
else
{
    $fail[]=$subjectfour;

}
if($subjectfive >=50)
{
    $success[]=$subjectfive;

}
else
{
    $fail[]=$subjectfive;

}
echo 'subjects result | status'.'<br>'; 
foreach($success as $val)
 {
   echo $val.'           |'  . 'successful' .'<br>'; 

 }
 foreach($fail as $val)
 {
   echo $val .'      '.'|  '. 'failed'.'<br>' ; 
  
 }
 

}