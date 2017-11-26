<?php 

require 'fpdf/fpdf.php';

class PDF extends FPDF
{

	function Header()
	{
		$this->Image('img/logo_upla.png', 5, 5, 50);
		$this->SetFont('Arial','B',15);
		$this->Cell(30);
		$this->Cell(140,10,'INFORMACION PERSONAL DAE',0,0,'C');

		$this->Ln(20);
	}

	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I', 8);
		//$this->Cell(0,10, 'Pagina '$his->PageNo().'/{nb}','C');
	}

}

 ?>