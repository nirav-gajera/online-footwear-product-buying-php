<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("SELECT User_name , Email , Contact_no , Area_name FROM user u JOIN area a where u.Area_id = a.Area_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='shoe_holic' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('User_name','Email','Contact_no','Area_name')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',12);

// Set header
 $pdf->Image('shoeholic.jpg',10,7,70);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'User List',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(70,12,"User Name",1);
		$pdf->Cell(70,12,"Email ",1);
		$pdf->Cell(70,12,"Contact No",1);
		$pdf->Cell(70,12,"Area Name",1);

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(70,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>