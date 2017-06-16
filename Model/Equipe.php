<?php

/**
 * Description of Equipe
 *
 * @author Francisco Pereira
 */

class Equipe {
   public $pedreiro;
   public $ajudantedepedreiro;
   public $carpinteiro;
   public $ajudantedecarpinteiro;
   public $instaladoreletrico;
   public $ajudantedeinstaladoreletrico;
   public $instaladorhidraulico;
   public $ajudantedeinstaladorhidraulico;
   public $ceramista;
   public $ajudanteceramista;
   public $pintor;
   public $ajudantepintor;
   
   
   function __construct() {
       $this->pedreiro = 1;
       $this->ajudantedepedreiro = 1;
       $this->carpinteiro = 2;
       $this->ajudantedecarpinteiro = 1;
       $this->instaladoreletrico = 2;
       $this->ajudantedeinstaladoreletrico = 1;
       $this->instaladorhidraulico = 1;
       $this->ajudantedeinstaladorhidraulico = 1;
       $this->ceramista = 3;
       $this->ajudanteceramista = 1;
       $this->pintor = 2;
       $this->ajudantepintor = 1;
   }
   
   function getPedreiro() {
       return $this->pedreiro;
   }

   function getAjudantedepedreiro() {
       return $this->ajudantedepedreiro;
   }

   function getCarpinteiro() {
       return $this->carpinteiro;
   }

   function getAjudantedecarpinteiro() {
       return $this->ajudantedecarpinteiro;
   }

   function getInstaladoreletrico() {
       return $this->instaladoreletrico;
   }

   function getAjudantedeinstaladoreletrico() {
       return $this->ajudantedeinstaladoreletrico;
   }

   function getInstaladorhidraulico() {
       return $this->instaladorhidraulico;
   }

   function getAjudantedeinstaladorhidraulico() {
       return $this->ajudantedeinstaladorhidraulico;
   }

   function getCeramista() {
       return $this->ceramista;
   }

   function getAjudanteceramista() {
       return $this->ajudanteceramista;
   }

   function getPintor() {
       return $this->pintor;
   }

   function getAjudantepintor() {
       return $this->ajudantepintor;
   }

   function setPedreiro($pedreiro) {
       $this->pedreiro = $pedreiro;
   }

   function setAjudantedepedreiro($ajudantedepedreiro) {
       $this->ajudantedepedreiro = $ajudantedepedreiro;
   }

   function setCarpinteiro($carpinteiro) {
       $this->carpinteiro = $carpinteiro;
   }

   function setAjudantedecarpinteiro($ajudantedecarpinteiro) {
       $this->ajudantedecarpinteiro = $ajudantedecarpinteiro;
   }

   function setInstaladoreletrico($instaladoreletrico) {
       $this->instaladoreletrico = $instaladoreletrico;
   }

   function setAjudantedeinstaladoreletrico($ajudantedeinstaladoreletrico) {
       $this->ajudantedeinstaladoreletrico = $ajudantedeinstaladoreletrico;
   }

   function setInstaladorhidraulico($instaladorhidraulico) {
       $this->instaladorhidraulico = $instaladorhidraulico;
   }

   function setAjudantedeinstaladorhidraulico($ajudantedeinstaladorhidraulico) {
       $this->ajudantedeinstaladorhidraulico = $ajudantedeinstaladorhidraulico;
   }

   function setCeramista($ceramista) {
       $this->ceramista = $ceramista;
   }

   function setAjudanteceramista($ajudanteceramista) {
       $this->ajudanteceramista = $ajudanteceramista;
   }

   function setPintor($pintor) {
       $this->pintor = $pintor;
   }

   function setAjudantepintor($ajudantepintor) {
       $this->ajudantepintor = $ajudantepintor;
   }



}
