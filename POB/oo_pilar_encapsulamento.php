<?php
/**
 * Define MinhaClasse
 */
class MinhaClasse
{
    public $publica = 'Public';
    protected $protegida = 'Protected';
    private $privada = 'Private';

    function imprimeMinhaClasse()
    {
        echo $this->publica;
        echo $this->protegida;
        echo $this->privada;
    }
}

$obj = new MinhaClasse();
echo $obj->publica; // Funciona
echo $obj->protegida; // Erro Fatal
echo $obj->privada; // Erro Fatal
$obj->imprimeMinhaClasse(); // Mostra Public, Protected e Private


/**
 * Define MinhaClasse2
 */
class MinhaClasse2 extends MinhaClasse
{
    // Nós podemos redeclarar as propriedades públicas e protegidas mas não as privadas
    protected $protegida = 'Protected2';

    function imprimeMinhaClasse()
    {
        echo $this->publica;
        echo $this->protegida;
        echo $this->privada;
    }
}

$obj2 = new MinhaClasse2();
echo $obj2->publica; // Works
echo $obj2->privada; // Undefined -> pois o atributo privada foi declarado como private na classe MinhaClasse. |
//Portanto, só pode ser acessado lá!
echo $obj2->protegida; // Fatal Error
$obj2->imprimeMinhaClasse(); // Mostra Public, Protected2, Undefined

?>