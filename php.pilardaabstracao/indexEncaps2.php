
<?php
//Objeto 
//Atribudo publico esta disponivel para o mundo
//os operadores de visibidade sao incluido no inicio
class Pai
{
    private $nome = 'Paulo'; //private e protected nao pode ser acessado a menos que crie metodos para acessar
    protected  $sobrenome = 'Silva';
    public $humor = 'Feliz';

    //metodos de interface que pega metodos publicos e privados get recupera o atributo 
    public function __get($attr)
    {
        return $this->$attr;
    }
    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
    private function executarMania(){
        echo 'Assobiar';
    }
    protected function responder()
    {
        echo 'oi';
    }
    public function executarAcao()
    {
        $x = rand(1, 10);
        if ($x >= 1 && $x <= 8) {
            $this->responder();
        } else {
            $this->executarMania(); //posso chama metodo privado dentro da função publica
        }
        echo '<br />';
    }
}

class Filho extends Pai{
    public function __construct(){
      //exibir os metodos do objeto
    echo '<pre>';
    print_r(get_class_methods($this));
    echo '</pre>';  

    private function executarMania(){
        echo 'Cantar';
    }
    public function x(){
        $this->executarMania();
    }
}

//filho não consegue acessar um metodos privado do objt Pai
$filho = new Filho();
echo '<pre>';
print_r($filho);
echo '<\pre>';
//echo $filho->getAtributo('nome');
$filho->executarAcao();
echo '<br/>';
$filho->x();

?>


