<?php

if(strlen($_GET['fecha_de'])>0 and strlen($_GET['fecha_a'])>0){
	$fecha_de = $_GET['fecha_de'];
	$fecha_a = $_GET['fecha_a'];

	$fecha_de = date('d/m/Y', strtotime($fecha_de));
	$fecha_a = date('d/m/Y', strtotime($fecha_a));
}else{
	$fecha_de = '1111-01-01';
	$fecha_a = '9999-12-30';

	$fecha_de = '__/__/____';
	$fecha_a = '__/__/____';
}
	require ("../fpdf/fpdf.php");
	$db = new PDO('mysql:host=localhost;dbname=equipos_p','root','');
	class PDF extends FPDF
	{
		function Header()
		{
			  $this->Image('../img/logo.jpg',20, 10, 60);							
			//IMAGE (RUTA,X,Y,ANCHO,ALTO,EXTEN)	
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(180,10, 'Lista de Transporte de Plegadores',0,0,'C');
			$this->Ln();
			$this->SetTextColor(76,182,234);
            $this->SetFont('Arial','B',12);			 
			$this->Cell(240,10,'Mantenimiento y Tejido sulzer',0,0,'C' );
			$this->SetTextColor(0,0,0);
			$this->SetFont('Arial','', 11);
			$this->Cell(50,10,'Hoy:'.date('d/m/Y'),0,0,'C');
			$this->Ln();
			$this->Cell(246,10,'Realizador por el Supervisor: Lucio.Torres@bagcorp.com',0,0,'C');
			$this->Ln();
			$this->Cell(247,10,'Tel.: (488) 88-29700 Ext.:2143',0,1,'C');
			$this->Ln(10);
            $this->Cell(60, 8, '', 0);
            $this->Cell(100, 8, 'Desde: '.$fecha_de.' hasta: '.$fecha_a, 0);
			$this->Ln(14);
            $this->SetFont('Arial', 'B', 6);
	
		}
			function Footer()
		{   
		   
             $this->Ln(26);
			 $this->SetTextColor(0,0,0);
             $this->SetFont('Arial','B');			 
			 $this->Cell(181,10,'',0,0,'C' );
		     $this->Ln(-15);
             $this->SetFont('Arial','','8');			 
			 $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		  
		
		}
         function headerTable()
        { 
		 $this->SetDrawColor(255, 255, 255); 
         $this->SetFillColor(185, 201, 254);  
		 $this->SetFont('Arial','B','10');
         $this->Cell(18,10,'ID',1,0,'C',1);
         $this->Cell(20,10,'TURNO',1,0,'C',1);
         $this->Cell(58,10,'NOMBRE',1,0,'C',1);
         $this->Cell(58,10,'APELLIDO',1,0,'C',1);
		 $this->Cell(58,10,'FECHA',1,0,'C',1);
         $this->Cell(73,10,'COMENTARIO',1,0,'C',1);
		 $this->Cell(50,10,'DIA',1,0,'C',1);
		
	
         $this->Ln();		 
	  }
	     function viewTable($db)
		 {
		  $this->SetFont('Arial','','9');
          $stmt = $db->query("SELECT id_pe, turno_pe,nombre_pe,apellido_pe,fecha_pe,com_pe,(ELT(WEEKDAY(fecha_pe) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')) AS DIA_SEMANA FROM personal  WHERE fecha_pe BETWEEN '$fecha_de' AND '$fecha_a'");
          while($data=$stmt->fetch(PDO::FETCH_OBJ)){
		 $this->Cell(18,10,$data->id_pe,1,0,'C');
         $this->Cell(20,10,$data->turno_pe,1,0,'C');
         $this->Cell(56,10,$data->nombre_pe,1,0,'L');
         $this->Cell(56,10,utf8_decode($data->apellido_pe),1,0,'L');
		 $this->Cell(56,10,$data->fecha_pe,1,0,'L');
         $this->Cell(73,10,utf8_decode($data->com_pe),1,0,'L');
		 $this->Cell(50,10,utf8_decode($data->DIA_SEMANA),1,0,'C');
		 $this->Ln();
		 }
	   }		  
	}
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('L','A4',0);
	$pdf->headerTable();
	$pdf->viewTable($db);
		$pdf->Output('reporte.pdf','I');
?>
	
	
	
	
		

