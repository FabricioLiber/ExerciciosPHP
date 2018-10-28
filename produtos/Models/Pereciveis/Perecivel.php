<?php
    namespace Models\Pereciveis;

    interface Perecivel {
        function estaVencido() : bool;
    }