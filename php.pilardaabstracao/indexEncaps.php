<?php 
    //Objeto 
    //Atribudo publico esta disponivel para o mundo
    //os operadores de visibidade sao incluido no inicio
    class Pai {
        private $nome = 'Jorge';//private e protected nao pode ser acessado a menos que crie metodos para acessar
        protected  $sobrenome = 'Silva';
        public $humor = 'Feliz';

        //metodos de interface que pega metodos publicos e privados
        public function getSobreNome(){
            return $this->sobrenome;
        }
        public function setSobreNome($value){
            
            if(strlen($value) >= 3){  
            $this->sobrenome = $value;
        }
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($value){
            
            if(strlen($value) >= 3){  
            $this->nome = $value;
        }
        }
    }
    //set e get pode trabalhar medoto privado
    //set e um medoto publico e internamente ele acessa o metodo privado
    //atribui a istancia do objeto pai para usar suas instancia privat protect public
    $pai = new Pai();
    echo $pai->getSobreNome();
    $pai->setSobreNome('Santos');
    echo '<br \>';
    echo $pai->getSobreNome(); 
    echo '<br \>';

    $pai = new Pai();
    echo $pai->getNome();
    $pai->setNome('Jose');
    echo '<br \>';
    echo $pai->getNome();  
    ?>
 
<?php 
    //Objeto 
    //Atribudo publico esta disponivel para o mundo
    //os operadores de visibidade sao incluido no inicio
    class Filho{
        private $nome = 'Paulo';//private e protected nao pode ser acessado a menos que crie metodos para acessar
        protected  $sobrenome = 'Silva';
        public $humor = 'Feliz';

        //medotos de interface que pega metodos publicos e privados get recupera o atributo 
        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $value){
            $this->$attr = $value;
        }
        private function executarMania(){
            echo 'Assobiar';
        }
        protected function responder(){
            echo 'oi';
        }
        public function executarAcao(){
            $x = rand(1, 10);
            if($x >= 1 && $x <= 8){
                $this->responder();

            }else{
                $this->executarMania();//posso chama medoto privado
            }
            echo '<br />';
        }
    }
//get e set da acesso aos metodos private e protected
    $filho = new Filho();
    echo $filho->executarAcao();
    ///echo $filho->sobrenome;
   // $filho->sobrenome = 'Oliveira';
   // echo '<br />';
    //echo $filho->sobrenome
 
    ?>

