<?php
    namespace loja\Exceptions;

    class InformacaoNulaException extends Exception {
        function __construct ($msg) {
            parent::__construct($msg);
        }
    }

?>