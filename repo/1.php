<?php
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
			$this->Cell(180,10, 'Lista de Estado de Telares en Proceso',0,0,'C');
			$this->Ln();
			$this->SetTextColor(76,182,234);
            $this->SetFont('Arial','B',12);			 
			$this->Cell(230,10,'Mantenimiento y Tejido sulzer',0,0,'C' );
			$this->SetTextColor(0,0,0);
			$this->SetFont('Arial','', 11);
			$this->Cell(50,10,'Hoy:'.date('d/m/Y'),0,0,'C');
			$this->Ln(20);
	
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
		 $this->SetFont('Arial','B','8');
         $this->Cell(12,10,'ID',1,0,'C',1);
         $this->Cell(17,10,'TURNO',1,0,'C',1);
         $this->Cell(18,10,'TELAR',1,0,'C',1);
         $this->Cell(27,10,'ESTILO',1,0,'C',1);
         $this->Cell(52,10,'SISTEMA',1,0,'C',1);
         $this->Cell(45,10,'FALLA',1,0,'C',1);
		 $this->Cell(37,10,'REFACCION',1,0,'C',1);
		 $this->Cell(60,10,'Tipo Telar',1,0,'C',1);
	
         $this->Ln();		 
	  }
	     function viewTable($db)
		 {
		  $this->SetFont('Arial','','8');
          $stmt = $db->query("SELECT id_tp,turno_tp,telar_tp,estilo_tp,sistema_tp,falla_tp,refa_tp,tipotelar_tp FROM telar_planos INNER JOIN usuario ON telar_planos.usuario_id=usuario.idusuario WHERE idusuario=2 AND DATE_FORMAT(fecha_tp, '%Y-%m-%d') = CURDATE()");
          while($data=$stmt->fetch(PDO::FETCH_OBJ)){
		 $this->Cell(12,10,$data->id_tp,1,0,'C');
         $this->Cell(17,10,$data->turno_tp,1,0,'C');
         $this->Cell(18,10,$data->telar_tp,1,0,'C');
		 $this->Cell(27,10,utf8_decode($data->estilo_tp),1,0,'L');
         $this->Cell(52,10,utf8_decode($data->sistema_tp),1,0,'L');
         $this->Cell(45,10,utf8_decode($data->falla_tp),1,0,'L');
         $this->Cell(37,10,utf8_decode($data->refa_tp),1,0,'L');
		 $this->Cell(60,10,utf8_decode($data->tipotelar_tp),1,0,'C');
         $this->Ln();
		 }
	   }		  
	}
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('L','A4',0);
	$pdf->headerTable();
	$pdf->viewTable($db);
		$pdf->Output();
?>
	
	
	
	
		

