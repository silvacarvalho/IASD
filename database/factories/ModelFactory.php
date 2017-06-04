<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(IASD\User::class, function ($faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//        'password' => str_random(10),
//        'remember_token' => str_random(10),
//    ];
//});


$factory->define(IASD\Entities\Membro::class, function ($faker){
    $faker = Faker\Factory::create('pt_BR');
    return [
        'nome' => $faker->name,
        'responsável' => $faker->name,
        'cpf' => $faker->cpf,
        'rg' => $faker->rg,
        'telefone' => $faker->phoneNumber,
        'celular' => $faker->cellphoneNumber,
        'nascimento' => $faker->date($format = 'd-m-Y', $max = 'now'),
        'data_batismo' => $faker->date($format = 'd-m-Y', $max = 'now'),
        'email' => $faker->email,
        'endereço' => $faker->streetAddress,
        'número' => $faker->numberBetween($min = 10, $max = 100),
        'bairro' => $faker->streetName,
        'cep' => $faker->postcode,
        'observação' => $faker->text($maxNbChars = 200),
    ];
});


$factory->define(IASD\Entities\Devolucao::class, function ($faker){
    $faker = Faker\Factory::create('pt_BR');
//    $valor = "R$ ". $faker->numberBetween(10,500). ",". $faker->numberBetween(01,99);


    return [
        'valor' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'tipo' => $faker->randomElement(['Dízimo', 'Oferta de Pacto', 'Oferta de Sacrifício', 'Oferta Aleatória']),
        'referência_mês' => $faker->randomElement(['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']),
        'data' => $faker->date('d-m-Y', 'now'),
        'membro_id' => $faker->numberBetween(1,80)
    ];
});



