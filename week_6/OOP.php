<?php
 
class Parfem {

    private $boja = "bezbojan";
    private $glavnaNota = "jasmin";
    private $intenzitet = 9;
    private $godisnjeDoba = "zima";

    private $nazivParfema;
    private $cijenaParfema;

    

    public function getNazivParfema() {
        return $this->nazivParfema;
    }

    public function setNazivParfema($nazivParfema) {
        $this->nazivParfema = $nazivParfema;
    }

   
}