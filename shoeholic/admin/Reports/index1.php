<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select (SELECT C_name from category where C_id = c.C_id) as C_name , (SELECT Sub_C_name from `sub-category` where Sub_C_id = s.Sub_C_id) as sub_C_name ,COUNT(*) from `order details` item join product p join `sub-category` s JOIN category c where item.P_id = p.P_id and p.Sub_C_id = s.Sub_C_id and s.C_id = c.C_id GROUP by c.C_id , s.Sub_C_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='shoe_holic' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('C_name','sub_C_name','COUNT(*)')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',12);

// Set header
 $pdf->Image('shoeholic.jpg',7,7,70);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'Category Wise list',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(70,12,"Category_Name",1);
		$pdf->Cell(70,12,"Subcat_Name ",1);
		$pdf->Cell(70,12,"Total",1);
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