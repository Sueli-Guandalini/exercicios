<?php

    class Jogador{
        private $nome;
        private $data_nascimento;

        public function __construct($nome,$data_nascimento){
            $this->nome = $nome;
            $this->data_nascimento = $data_nascimento;
        }

        public function exibe_jogador(){
            echo "Jogador:
                $this->nome.
                $this->idade.
        }
    }
?>