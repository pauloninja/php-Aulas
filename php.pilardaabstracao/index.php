<?php 
//modelo 
class Funcionario {
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters setters (overloading / sobrecargar)
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    function __get($atributo){
        return $this->$atributo;
    }
    /*gettrs setters
    function setNome($nome){
        $this->nome = $nome;
    }
    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }
    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    function getNome(){
        return $this->nome;
    }
    function getNumFilhos(){
        return $this->numFilhos;
    }
    function getTelefone(){
        return $this->telefone;
    }
    */

    //métodos
    function resumirCadFunc(){
       return "$this->nome possui $this->numFilhos filho(s) $this->telefone $this->cargo $this->salario";
        //return $this->__get('nome') . " possui " . $this->__get('numFilho') . " filho(s) " . $this->__get('telefone') . " cargo " . $this->__get('cargo') . " emprego " . $this->__get('salario');

    }
    function modificarNumFilhos($numFilhos){
        //afetar um atributo do objeto
        $this->numFilhos = $numFilhos;
    }

}

$y = new Funcionario();
$y->__set('nome', 'José');
$y->__set('numFilhos', 2);
$y->__set('telefone', 988905454);
$y->__set('cargo', 'Aux de Produção');
$y->__set('salario', 1000);
//$y->__set('telefone', )

//$y->setNome('Paulo');
//$y->setNumFilhos(2);
//$y->setTelefone(12988906576);
//echo $y->resumirCadFunc();

//echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s)' . $y->getTelefone();
echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s)' . ' tel ' . $y->__get('telefone') . ' emprego ' . $y->__get('cargo') .  $y->__get('salario');

echo '<br>';

$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 1);
$x->__set('telefone', 933305454);
$x->__set('cargo', 'Aux de Limpeza');
$x->__set('salario', 1050);
//echo $y->resumirCadFunc();
//echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s)' . $y->getTelefone();
echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s)' . ' tel ' . $x->__get('telefone') . ' emprego ' . $x->__get('cargo') .  $x->__get('salario');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>