<?php
include('config.php');
$database = new Database();

$sql = "select * from user";

if(isset($_GET["d1"]) && isset($_GET["d2"]) )
{
					$start = $_GET["d1"];
					
					$end = $_GET["d2"];
					
					$sql  = $sql . " where Created_date between '".$start."' and '".$end."'";
					
}

$result = $database->runQuery($sql);
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='shoe_holic' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('User_name','Email','Address','Contact_no','Created_date')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("shoeholic","A3");
$pdf->SetFont('Arial','B',12);

// Set header
 $pdf->Image('shoeholic.jpg',7,1,60);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'Date Wise User List',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(60,12,"User Name",1);
		$pdf->Cell(60,12,"Email",1);
		$pdf->Cell(60,12,"Address",1);
		$pdf->Cell(60,12,"Contact No",1);
		$pdf->Cell(60,12,"Created date",1);
		//$pdf->Cell(60,12,"Size",1);
		//$pdf->Cell(70,12,"Area Name",1);

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(60,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>