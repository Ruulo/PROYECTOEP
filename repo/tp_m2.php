<?php
	require ("../fpdf/fpdf.php");
	
	class PDF extends FPDF
	{
		function Header()
		{
		    

            $this->Image('../img/logo.jpg',2, 10, 36);
            $this->Image('../img/Captura.png',70,85,80);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(140,10,utf8_decode('Reporte por mes del estado de Telares Planos'),0,0,'C');
			$this->Ln();
			$this->SetTextColor(76,182,234);
            $this->SetFont('Arial','B',11);			 
			$this->Cell(181,10,'Mantenimiento y Tejido sulzer',0,0,'C' );
			$this->SetTextColor(0,0,0);
			$this->SetFont('Arial','', 10);
			$this->Cell(3,10,'Hoy:'.date('d/m/Y'),0,0,'C');
			$this->Ln();
			$this->Cell(184,10,'Realizador por el Supervisor: Lucio.Torres@bagcorp.com',0,0,'C');
			$this->Ln();
			$this->Cell(184,10,'Tel.: (488) 88-29700 Ext.:2143',0,1,'C');
			$this->Ln(14);
            $this->SetFont('Arial', 'B', 6);

	
		}
		function Footer()
		{ 
		     $this->Ln(-26);
			 $this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			 $this->SetTextColor(10,11,11);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		
		}	
	}
?>

<?php
	require ('../conexion.php');
  mysql_connect("localhost","root","");
mysql_select_db("equipos_p");
$consulta = mysql_query("SELECT turno_tp,id_tp,telar_tp FROM telar_planos INNER JOIN usuario ON telar_planos.usuario_id=usuario.idusuario WHERE  MONTH(fecha_tp) = MONTH(CURDATE()) AND estado_tp='pendiente'");
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
 

$pdf->SetDrawColor(255, 255, 255); 
$pdf->SetFillColor(185, 201, 254);  	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,6,'TURNO',1,0,'C',1);
	$pdf->Cell(70,6,'EQUIPO EVENTO',1,0,'C',1);
	$pdf->Cell(70,6,'ESTADO',1,0,'C',1);
	$pdf->Ln();
	$pdf->SetFont('Arial','',10);
	

while($resultado = mysql_fetch_array($consulta)){
 $pdf->Cell(40,6, $resultado['turno_tp'],1,0,'C');
 $pdf->Cell(70,6,$resultado['id_tp'],1,0,'C');
 $pdf->Cell(70,6,$resultado['telar_tp'],1,0,'C');
  $pdf->Ln(); 

}  
	$pdf->Output('Pendientes por mes.pdf','D');
?>
