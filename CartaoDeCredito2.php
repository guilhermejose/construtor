<?php

class Cliente
{
  public $Nome;
  public $Codigo;
}

class CartaoDeCredito
{
  public $numero;
  public $DataDeValidade;
  public $Clien;


public function __construct($Num,$Data)
    {
      $this->numero=$Num;
      $this->DataDeValidade=$Data;

    }

}



   $Clien = new Cliente();
   $Cart  = new CartaoDeCredito(3,"25/12/2014");


   $Clien->Nome="Rafael Cosentino";
   $Clien->Codigo=123;
   $Cart->Clien=$Clien;


   $Cart->numero=111111 ;
   $Cart->DataDeValidade="12/12/18";

   echo "\nCartao : $Cart->numero  \n\n"  ;
   echo "Validade : $Cart->DataDeValidade  \n"  ;
   echo "Referencia : {$Cart->Clien->Nome}  \n"  ;

   echo "\nCliente : $Clien->Nome  \n\n"  ;
   echo "Codigo : $Clien->Codigo  \n\n"  ;



?>
