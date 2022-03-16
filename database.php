<?php
require('C:\wamp\www\Mini_Project\fpdf17\fpdf.php');
$con=mysql_connect('localhost','root','');
mysql_select_db('service_center',$con);
if(!$con)
{
	die("Connection To Database Failed. Error Code : 300");
}	


class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		$this->Image('logo-small.png',5,10,20);
		
		$this->Cell(100,10,'Volkswagen Service And Maintenance',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',11);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(40,5,'Name',1,0,'',true);
		$this->Cell(25,5,'Phone',1,0,'',true);
		$this->Cell(65,5,'Service Type',1,0,'',true);
		$this->Cell(60,5,'Replacements',1,1,'',true);
		
	}
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);

$query="select * from maintenance;";
$result=mysql_query($query,$con) or die("Couldn't connect. Error : 301".mysql_error($con));
while($data=mysql_fetch_array($result)){
	$pdf->Cell(40,5,$data['owner_name'],'LR',0);
	$pdf->Cell(25,5,$data['owner_contact'],'LR',0);
	
	if($pdf->GetStringWidth($data['service_type']) > 65){
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(65,5,$data['service_type'],'LR',0);
		$pdf->SetFont('Arial','',9);
	}else{
		$pdf->Cell(65,5,$data['service_type'],'LR',0);
	}
	$pdf->Cell(60,5,$data['replacements'],'LR',1);
}














$pdf->Output();
?>
