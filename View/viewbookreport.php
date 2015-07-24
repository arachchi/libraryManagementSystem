<?php
 
//Import the PhpJasperLibrary
include_once('../PhpJasperLibrary/tcpdf/tcpdf.php');
include_once("../PhpJasperLibrary/PHPJasperXML.inc.php");
 
$reportName = "BookReport2";

 if(isset($_GET['reportname'])){
     
 $reportName = $_GET['reportname'];   
}
//database connection details
 
$server="127.0.0.1:3306";
$db="library";
$user="root";
$pass="";
$version="0.8b";
$pgport=5432;
$pchartfolder="./class/pchart2";
 
 
//display errors should be off in the php.ini file
ini_set('display_errors', 0);
 
//setting the path to the created jrxml file
$xml =  simplexml_load_file("../Reports/".$reportName.".jrxml");
 
$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;
//$PHPJasperXML->arrayParameter=array("parameter1"=>1);
$PHPJasperXML->xml_dismantle($xml);
 
$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file
 
 
?>