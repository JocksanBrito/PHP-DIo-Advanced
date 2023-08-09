<?php

use PHPUnit\Framework\TestCase;
use Wead\DigitalCep\Search;


class SearchTest extends TestCase
{

    /**
     * @dataProvider dadosTeste
     */


    public function testGerAddressFromZipCodeDefaultUsage(string $input, array $esperado)
    {
        $resutado = new Search;
        $resutado = $resutado->gerAddressFromZipCode($input);

        $this->assertEquals($esperado, $resutado);
    }

    public function dadosTeste()
    {
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço Qualquer" => [
                "36500180",
                [
                    "cep" => "36500-180",
                    "complemento" => "",
                    "logradouro" => "Rua Conselheiro Augusto César",
                    "localidade" => "Ubá",
                    "bairro" => "Copacabana",
                    "ibge" => "3169901",
                    "uf" => "MG",
                    "ddd" => "32",
                    "gia" => "",
                    "siafi" => "5397"
                ]
            ]
        ];
    }
}
