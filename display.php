<!DOCTYPE html>
   <html>    
   <head>      
         <title>SWC Repeater Status</title>
	<meta http-equiv="refresh" content="30">    
   <meta charset="utf-8">
      <style type="text/css">
      body {
    background-color: #073080;
}
      </style>
   </head>    
      <body vlink="#0099FF">
		 
         <h1 style="color:#FFEE7D;font-size:50px;">
         <center>
         South West Cluster Repeater Status
         </center>
      </h1>      
<p>
<br>
</p>
		  
		  <center><img style="max-width:95%;border:4px ridge #FFEE7D;"src="images/fdmr_dash.png"></center>
   </body>
<p>
<br>
</p>

<p>
<br>
</p>

</html>
<table width="435 border=" bgcolor="#D5E9D9" bordercolor="#0099FF" border="7" align="center">
  <tbody>
    <tr>
      <td>


<?php


$filename = 'test.log';
$searchfor = '55001';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55001 GB7BS Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55001 GB7BS Offline  </div>';
"\n";

}



$filename = 'test.log';
$searchfor = '55002';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55002 GB3JB Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55002 GB3JB Offline  </div>';
"\n";


}

$filename = 'test.log';
$searchfor = '55003';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55003 GB7AA Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55003 GB7AA Offline  </div>';
"\n";


}

$filename = 'test.log';
$searchfor = '55004';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55004 GB7EW Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55004 GB7EW Offline  </div>';
"\n";


}


$filename = 'test.log';
$searchfor = '55005';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55005 GB7JB Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55005 GB7JB Offline  </div>';
"\n";


}

$filename = 'test.log';
$searchfor = '55006';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55006 GB7KT Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55006 GB7KT Offline  </div>';
"\n";


}

$filename = 'test.log';
$searchfor = '55007';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55007 GB7MJ Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55007 GB7MJ Offline  </div>';
"\n";


}
$filename = 'test.log';
$searchfor = '55008';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55008 GB7RD Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55008 GB7RD Offline  </div>';
"\n";


}

$filename = 'test.log';
$searchfor = '55009';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55009 GB7SD Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55009 GB7SD Offline  </div>';
"\n";


}

$filename = 'test.log';
$searchfor = '55010';
$file = file_get_contents($filename);
if(strpos($file, $searchfor)) 
{
   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:green">55010 GB7SP Online  </div>';

"\n";
} else {


   echo '<div style="width: 75%; margin: 0px auto;font-size:2em;color:red">55010 GB7SP Offline  </div>';
"\n";


}



?> 
</td>
    </tr>
  </tbody>
</table>
<p><br><br></p>

<h1 style="color:#FFEE7D;font-size:15px;">
         <center>
         Bristol 70cms Repeater Group  -  <a href="http://www.gb7bs.com">www.gb7bs.com</a>
         </center>
      </h1>      
