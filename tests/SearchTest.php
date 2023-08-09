<?php

use PHPUnit\Framework\TestCase;
use Wead\DigitalCep\Search;


class SearchTest extends TestCase
{

    /**
     * @dataProvider dadosTeste
     */


    public function testGerAddressFromZipCodeDefaultUsage()
    {
        $resutado = new Search;
        $resutado = $resutado->gerAddressFromZipCode('01001000');

        $esperado = [
            "cep" => "36500-180",
            "logradouro" => "Rua Conselheiro Augusto César",
            "complemento" => "",
            "bairro" => "Copacabana",
            "localidade" => "Ubá",
            "uf" => "MG",
            "ibge" => "3169901",
            "gia" => "",
            "ddd" => "32",
            "siafi" => "5397"
        ];

        $this->assertEquals($esperado, $resutado);
    }
}
