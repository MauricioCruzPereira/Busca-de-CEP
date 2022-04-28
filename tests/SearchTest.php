<?php

use PHPUnit\Framework\TestCase;
use User\Projeto1\Search;


class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */

    public function testGetAddressFromZipCodeDefaultUsage(string $input, array $esperado){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipCode($input);

        //testar se a entrada bate com o resultado
        $this->assertEquals($esperado,$resultado);
    }
    public function dadosTeste(){
        return[
            "Endereço Paraça da sé"=>[
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" =>"lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107",
                ]
            ],
            "Endereço Qualquer"=>[
                "16203039",
                [
                    "cep" => "16203-039",
                    "logradouro" => "Rua São Benedito",
                    "complemento" =>"",
                    "bairro" => "Jardim Klayton",
                    "localidade" => "Birigüi",
                    "uf" => "SP",
                    "ibge" => "3506508",
                    "gia" => "2148",
                    "ddd" => "18",
                    "siafi" => "6229",
                ]
            ]
        ];
    }
}