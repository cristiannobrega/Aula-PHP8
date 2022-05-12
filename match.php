<?php
$statusCode = "400";

$message = match ($statusCode) {
    200, 300 => null,
    400 => 'not found',
    500 => 'server error',
    default => 'unknown status code',
};

echo "<pre>";
var_dump($message);
echo "</pre>";

/*compare com switch case*/
switch ($statusCode) {
    case 200:
    case 300:
        $message = null;
        break;
    case 400:
        $message = 'not found';
        break;
    case 500:
        $message = 'server error';
        break;
    default:
        $message = 'unknown status code';
        break;
}

echo "<pre>";
var_dump($message);
echo "</pre>";

/*
O switch é uma declaração e match é uma expressão. Portanto, switch por si só não é capaz de 
produzir um valor ao ser avaliado. Já match, sim.
Ausência de coerção de tipos. 
Ao comparar os valores de cada case,switch utiliza o 
operador == (que faz conversão automática de tipos). 
Já o match, ao fazer as avaliações, utiliza === (que não faz coerção de tipos).
*
o match é uma expressão e, por isso, sempre deve retornar um valor. 
Por isso, o uso de match será agora recomendado quando tiver que se retornar um valor.
*
A finalidade do switch não é retornar resultados, e sim controlar fluxo. 
Nas linguagens onde é implementado corretamente, o switch equivale ao goto
(O operador goto pode ser usado para pular para outra seção do programa.), 
criando efetivamente uma jumplist e não if / elseif
*/

