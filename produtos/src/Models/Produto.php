<?php
    // include_once 'InformacaoNulaException.php';
    // include_once 'Nomeavel.php';
    namespace loja\Models;

    abstract class Produto {
        private $codigo;
        private $preco;
        use \loja\Traits\Nomeavel;
        
        function __construct (int $codigo, float $preco, string $nome) {
            if ($codigo == null)
                throw new InformacaoNulaException('Código não informado!');
            if ($preco == null)
                throw new InformacaoNulaException('Preço não informado!');
            if ($nome == null)
                throw new InformacaoNulaException('Preço não informado!');
            
            $this->codigo = $nome;
            $this->codigo = $codigo;
            $this->preco = $preco;
        }

        function getCodigo () {
            return $this->codigo;
        }
        
        function getPreco () {
            return $this->preco;
        }

        function __toString () {
            return 'Produto [ Código: '.$this->codigo.', Nome: '.$this->nome.', Preço: '.$this->preco.' ]';
        }
    }