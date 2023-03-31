<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select * from brand");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='shoe_holic' 
AND `TABLE_NAME`='brand'
and `COLUMN_NAME` in ('Brand_id','Brand_name','Brand_logo')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',12);

// Set header
 $pdf->Image('shoeholic.jpg',7,7,60);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'Brand Wise List',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(70,12,"Brand_Id",1);
		$pdf->Cell(70,12,"Brand_Name",1);
		$pdf->Cell(70,12,"Brand_Logo",1);
		//$pdf->Cell(70,12,"Quantity",1);
		//$pdf->Cell(70,12,"Amount",1);
		//$pdf->Cell(70,12,"Size",1);
		//$pdf->Cell(70,12,"Area Name",1);

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