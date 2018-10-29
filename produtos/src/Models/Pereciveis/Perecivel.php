<?php
    namespace loja\Models\Pereciveis;

    interface Perecivel {
        function estaVencido() : bool;
    }