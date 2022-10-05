<?php
class modulo{
	function getMod11Dv( $num ){	
	  $digits = str_replace( array( '.', ',' ), array( ''.'' ), strrev($num ) );
	  if ( ! ctype_digit( $digits ) )
	  {
	    return false;
	  }
	  $sum = 0;
	  $factor = 2;
	  for( $i=0;$i<strlen( $digits ); $i++ )
	  {
	    $sum += substr( $digits,$i,1 ) * $factor;
	    if ( $factor == 7 )
	    {
	      $factor = 2;
	    }else{
	     $factor++;
	   }
	  }	 
	  $dv = 11 - ($sum % 11);
	  if ( $dv == 10 )
	  {
	    return 1;
	  }
	  if ( $dv == 11 )
	  {
	    return 0;
	  }
	  return $dv;
	}
}
$fecha = $_POST['fecha_emi'];
$date = new DateTime($fecha);
$fecha_fin = $date->format('dmY'); 
$tipo_comprobante = $_POST['tipo_comprobante'];
$ruc =$_POST['ruc'];
$ambiente =$_POST['ambiente'];
$serie=$_POST['serie'];
$num_fac=$_POST['num_fac'];
$codig_num = '12345678';
$tipo_emision = '1';
$para_dig= $fecha_fin.$tipo_comprobante.$ruc.$ambiente.$serie.$num_fac.$codig_num.$tipo_emision; 

$dig = new modulo();
$estructura = $para_dig;
echo  $estructura.$dig->getMod11Dv($estructura); 
?>