<?php
    // include_once 'Produto.php';
    // include_once 'Perecivel.php';
    namespace Models\Pereciveis;

    use \Models\Produto;
    
    class Leite extends Produto implements Perecivel {
        private $marca;
        private $volume;
        private $dataValidade;

        function __construct (int $codigo, float $preco, string $nome, string $marca, float $volume,
         string $dataValidade) {
            parent::__construct($codigo, $preco, $nome);
            if ($marca == null)
                throw new \Exceptions\InformacaoNulaException('Marca não informada!');
            if ($volume == null)
                throw new \Exceptions\InformacaoNulaException('Volume não informado!');
            if ($dataValidade == null)
                throw new \Exceptions\InformacaoNulaException('Data de validade não informada!');

            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = $dataValidade;
        }

        function estaVencido () : bool {
            if (strtotime($this->dataValidade) >time())
                return false;
            return true;
        }

        function __toString () {
            return 'Leite [ Informações básicas: '.parent::__toString().' Marca: '.$this->marca.
            ', Volume: '.$this->volume.', Data de Validade: '.$this->dataValidade.' ]';
        }
    }