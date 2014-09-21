<?php

class TestController extends BaseController{

	public function test(){
		$results = Excel::load('location.csv',function($reader){
			
		})->get()->toArray();
		
		foreach($results as $result){
			echo $result['id'] . '<br>';
		}
	}

	public function showPdf(){
		Fpdf::AddPage();
        Fpdf::SetFont('Courier','B',16);
        Fpdf::Cell(190,10,'Quezelco Electronic Cooperative',0,1,'C');
        Fpdf::SetFont('Courier','',11);
        Fpdf::Cell(190,10,'Billing Statement',0,1,'C');
        Fpdf::SetFont('Courier','','9');
        Fpdf::Ln(5);
        Fpdf::Cell(40,0,'--------------------------------------------------------------------------------------------------');
        Fpdf::ln(5);	
        Fpdf::Cell(40,0,'Billing Statement For: JM Ramos' );
        Fpdf::Ln(5);
        Fpdf::Cell(40,0,'Account Number: 16-1648-1007' );
        Fpdf::Ln(5);
        Fpdf::Cell(40,0,'KWH: Consumed: 12452.50'  );
        Fpdf::Ln(5);
        Fpdf::Cell(40,0,'Period Covered From: 09/20/2014 - 09/30/2014');
        Fpdf::Ln(5);
        Fpdf::Cell(40,0,'--------------------------------------------------------------------------------------------------');
        Fpdf::Output();
        exit;
	}
}