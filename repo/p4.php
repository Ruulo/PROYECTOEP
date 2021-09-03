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
			$this->Cell(220,10, 'Lista de  Transporte de Plegadores',0,0,'C');
			$this->Ln();
			$this->SetTextColor(76,182,234);
            $this->SetFont('Arial','B',12);			 
			$this->Cell(269,10,'Mantenimiento y Tejido sulzer',0,0,'C' );
			$this->SetTextColor(0,0,0);
			$this->SetFont('Arial','', 11);
			$this->Cell(1,10,'Hoy:'.date('d/m/Y'),0,0,'C');
			$this->Ln();
			$this->Cell(275,10,'Realizador por el Supervisor: Jesus.Valero@bagcorp.com',0,0,'C');
			$this->Ln();
			$this->Cell(269,10,'Tel.: (488) 88-29700 Ext.:2143',0,1,'C');
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
		 $this->SetFont('Arial','B','9');
         $this->Cell(18,10,'ID',1,0,'C',1);
         $this->Cell(20,10,'TURNO',1,0,'C',1);
         $this->Cell(52,10,'EQUIPO',1,0,'C',1);
         $this->Cell(60,10,'SISTEMA',1,0,'C',1);
         $this->Cell(60,10,'FALLA',1,0,'C',1);
		 $this->Cell(50,10,'REFACCION',1,0,'C',1);
		
	
         $this->Ln();		 
	  }
	     function viewTable($db)
		 {
		  $this->SetFont('Arial','','9');
          $stmt = $db->query("SELECT id_p,turno_p,equipo_p,sistema_p,falla_p,refa_p FROM plegadores INNER JOIN usuario ON plegadores.usuario_id=usuario.idusuario WHERE idusuario=4 AND DATE_FORMAT(fecha_p, '%Y-%m-%d') = CURDATE()");
          while($data=$stmt->fetch(PDO::FETCH_OBJ)){
		 $this->Cell(18,10,$data->id_p,1,0,'C');
         $this->Cell(20,10,$data->turno_p,1,0,'C');
         $this->Cell(52,10,$data->equipo_p,1,0,'C');
         $this->Cell(60,10,utf8_decode($data->sistema_p),1,0,'C');
         $this->Cell(60,10,utf8_decode($data->falla_p),1,0,'C');
		 $this->Cell(50,10,utf8_decode($data->refa_p),1,0,'C');
		 $this->Ln();
		 }
	   }		  
	}
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('L','A4',0);
	$pdf->headerTable();
	$pdf->viewTable($db);
	$pdf->Output('Transporte de Plegadores.pdf','D');
?>
	
	
	
	
		

