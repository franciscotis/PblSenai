<?php
include_once("../Model/Equipe.php");
//session_start();
$qtdpedreiro = htmlspecialchars($_POST['pedreiro']);
$qtdajudantepedreiro = htmlspecialchars($_POST['ajudantepedreiro']);
$qtdcarpinteiro = htmlspecialchars($_POST['carpinteiro']);
$qtdajudantecarpinteiro = htmlspecialchars($_POST['ajudantecarpinteiro']);
$qtdinstaladoreletrico = htmlspecialchars($_POST['instaladoreletrico']);
$qtdajudanteinstaladoreletrico = htmlspecialchars($_POST['ajudanteinstaladoreletrico']);
$qtdinstaladorhidraulico = htmlspecialchars($_POST['instaladorhidraulico']);
$qtdajudanteinstaladorhidraulico = htmlspecialchars($_POST['ajudanteinstaladorhidraulico']);
$qtdceramista = htmlspecialchars($_POST['ceramista']);
$qtdajudanteceramista = htmlspecialchars($_POST['ajudanteceramista']);
$qtdpintor = htmlspecialchars($_POST['pintor']);
$qtdajudantepintor = htmlspecialchars($_POST['ajudantepintor']);
$qtdequipes = htmlspecialchars($_POST['qtd']);
$equipe = new Equipe();


function colocaDados($qtdequipes,$equipe,$qtdpedreiro,$qtdajudantepedreiro,$qtdcarpinteiro,$qtdajudantecarpinteiro,$qtdinstaladoreletrico,$qtdajudanteinstaladoreletrico,$qtdinstaladorhidraulico,$qtdajudanteinstaladorhidraulico,$qtdceramista,$qtdajudanteceramista,$qtdpintor,$qtdajudantepintor){
    $equipe->setPedreiro($qtdpedreiro*$qtdequipes);
    $equipe->setAjudantedepedreiro($qtdajudantepedreiro*$qtdequipes);
    $equipe->setCarpinteiro($qtdcarpinteiro*$qtdequipes);
    $equipe->setAjudantedecarpinteiro($qtdajudantecarpinteiro*$qtdequipes);
    $equipe->setInstaladoreletrico($qtdinstaladoreletrico*$qtdequipes);
    $equipe->setAjudantedeinstaladoreletrico($qtdajudanteinstaladoreletrico*$qtdequipes);
    $equipe->setInstaladorhidraulico($qtdinstaladorhidraulico*$qtdequipes);
    $equipe->setAjudantedeinstaladorhidraulico($qtdajudanteinstaladorhidraulico*$qtdequipes);
    $equipe->setCeramista($qtdceramista*$qtdequipes);
    $equipe->setAjudanteceramista($qtdajudanteceramista*$qtdequipes);
    $equipe->setPintor($qtdpintor*$qtdequipes);
    $equipe->setAjudantepintor($qtdajudantepintor*$qtdequipes);
}

function calculoProducaoMq($equipe){
    $calculo[0] = $equipe->getPedreiro()*1.5;
    $calculo[1] = $equipe->getAjudantedepedreiro()*1.5;
    $calculo[2] = $equipe->getCarpinteiro();
    $calculo[3] = $equipe->getAjudantedecarpinteiro()*2;
    $calculo[4] = $equipe->getInstaladoreletrico();
    $calculo[5] = $equipe->getAjudantedeinstaladoreletrico();
    $calculo[6] = $equipe->getInstaladorhidraulico()*8;
    $calculo[7] = $equipe->getAjudantedeinstaladorhidraulico()*8;
    $calculo[8] = ($equipe->getCeramista()*1.25)/3;
    $calculo[9] = $equipe->getAjudanteceramista()*1.25;
    $calculo[10] = $equipe->getPintor()*2;
    $calculo[11] = $equipe->getAjudantepintor()*4;
    return $calculo;
}

function calculoProducaoTempo($equipe){
    $calculo= calculoProducaoMq($equipe);
    $tempo[0] = 60.67/$calculo[0];
    $tempo[1] = 60.67/$calculo[1];
    $tempo[2] = 60.67/$calculo[2];
    $tempo[3] = 60.67/$calculo[3];
    $tempo[4] = 12/(0.5*$calculo[4]);
    $tempo[5] = 6/(0.5*$calculo[5]);
    $tempo[6] = 4/(0.5*$calculo[6]);
    $tempo[7] = 4/(0.5*$calculo[7]);
    $tempo[8] = 60.67/$calculo[8];
    $tempo[9] = 60.67/$calculo[9];
    $tempo[10] = 60.67/$calculo[10];
    $tempo[11] = 60.67/$calculo[11];
    return $tempo;
}

function calculaDias($equipe){
    $tempo = calculoProducaoTempo($equipe);
    $total = 0;
    for($i=0;$i<sizeof($tempo);$i++){
        $total = $total + $tempo[$i];
    }
    $dias = ($total*300)/24; //300 unidades
    return $dias;
}

function calculaCondominios($equipe){
    $dias = calculaDias($equipe);
    $total = 365/$dias;
    return $total;
}
colocaDados($qtdequipes,$equipe,$qtdpedreiro,$qtdajudantepedreiro,$qtdcarpinteiro,$qtdajudantecarpinteiro,$qtdinstaladoreletrico,$qtdajudanteinstaladoreletrico,$qtdinstaladorhidraulico,$qtdajudanteinstaladorhidraulico,$qtdceramista,$qtdajudanteceramista,$qtdpintor,$qtdajudantepintor);
$ano = intval(calculaCondominios($equipe,$qtdequipes));
if($ano==1){
    echo "Será feito ",$ano," condomínio em 1 ano";
}
else if($ano>1){
    echo "Serão feitos ",$ano," condomínios em 1 ano";
}
else if($ano<=0){
    echo "Será feito menos de 1 condomínio em 1 ano";
}

/**
 * Description of Controller
 *
 * @author Francisco Pereira
 */
class Controller {
    //put your code here
    
   public function producaoPedreiro(){
       
       
       }
}
