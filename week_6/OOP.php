<?php


class Pas {

    private $rasa;
    private $status = 'razigran';
    private $tezina;
    private $ime;


    public function __construct ($rasa) {
        $this->rasa = $rasa;
    }

    public function status () {
        return $this->status;
    }

    public function nahrani ($kolicina) {
        $this->status = 'sit';
        $this->tezina  += $kolicina/2;
    }

    public function donesiLoptu () {
        $this->status = 'razigran';
        $this->tezina = $this->tezina - 2;
    }

    public function setTime($ime) {
        $this->ime = $ime;
    }

    public function getTime() {
        return $this->ime;
    }

    public function govori() {
        return 'Vau';
    }
    public function getStatus() {
        return $this->status;
    }
}