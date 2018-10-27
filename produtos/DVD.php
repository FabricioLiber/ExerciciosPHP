<?php
    include_once 'Produto.php';

    class DVD extends Produto {
        private $titulo;
        private $ano;

        function __construct (int $codigo, float $preco, string $nome, string $titulo, int $ano) {
            parent::__construct($codigo, $preco, $nome);
            if ($titulo == null)
                throw new InformacaoNulaException('Título não informado!');
            if ($ano == null)
                throw new InformacaoNulaException('Ano não informado!');

            $this->titulo = $titulo;
            $this->ano = $ano;
        }

        function __toString () {
            return 'DVD [ Informações básicas: '.parent::__toString().' Título: '.$this->titulo.
            ', Ano: '.$this->ano.' ]';
        }
    }