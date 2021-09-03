<?php
	require ("../fpdf/fpdf.php");
	
	class PDF extends FPDF
	{
		function Header()
		{
		    

            $this->Image('../img/logo.jpg',20, 10, 40);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Lista de Personal',0,0,'C');
			$this->Ln();
			$this->SetTextColor(76,182,234);
            $this->SetFont('Arial','B',10);			 
			$this->Cell(181,10,'Mantenimiento y Tejido sulzer',0,0,'C' );
			$this->SetTextColor(0,0,0);
			$this->SetFont('Arial','', 10);
			$this->Cell(4,10,'Hoy:'.date('d/m/Y'),0,0,'C');
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
$consulta = mysql_query("SELECT id_pe, turno_pe,nombre_pe,apellido_pe,fecha_pe,com_pe,(ELT(WEEKDAY(fecha_pe) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS DIA_SEMANA FROM personal INNER JOIN usuario ON personal.usuario_id=usuario.idusuario WHERE idusuario=2 AND DATE_FORMAT(fecha_pe, '%Y-%m-%d') = CURDATE()");
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
 

$pdf->SetDrawColor(255, 255, 255); 
$pdf->SetFillColor(185, 201, 254);  	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(13,6,'ID',1,0,'C',1);
	$pdf->Cell(18,6,'TURNO',1,0,'C',1);
	$pdf->Cell(42,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(40,6,'APELLIDO',1,0,'C',1);
	$pdf->Cell(68,6,'COMENTARIO',1,0,'C',1);
	$pdf->Cell(20,6,'DIA',1,0,'C',1);
	$pdf->Ln();
	$pdf->SetFont('Arial','',10);
	

while($resultado = mysql_fetch_array($consulta)){
 $pdf->Cell(13,6, $resultado['id_pe'],1,0,'C');
 $pdf->Cell(18,6,$resultado['turno_pe'],1,0,'C');
 $pdf->Cell(42,6,utf8_decode($resultado['nombre_pe']),1,0,'L');
 $pdf->Cell(40,6,utf8_decode($resultado['apellido_pe']),1,0,'L');
  $pdf->Cell(68,6,utf8_decode($resultado['com_pe']),1,0,'L');
    $pdf->Cell(20,6,utf8_decode($resultado['DIA_SEMANA']),1,0,'C');
  $pdf->Ln(); 

}  
	$pdf->Output();
?>
