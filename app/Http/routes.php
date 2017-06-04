<?php

//Retorna view para a HOME do Sistema
$app->get('/', [
    'as' => 'iasd.home',
    'uses' => 'IasdController@index'
]);

//======================================================================================================================
//Retorna view para cadastrar um novo Membro
$app->get('/membro/novo', [
    'as' => 'membro.novo',
    'uses' => 'MembroController@novo'
]);
//Retorna view com todos os Membros
$app->get('/membro/listar', [
    'as' => 'membro.listar',
    'uses' => 'MembroController@listar'
]);
//Cria um novo Membro
$app->post('/membro', [
    'as' => 'membro.store',
    'uses' => 'MembroController@store'
]);
//Retorna view com o Membro
$app->get('/membro/{id}/editar', [
    'as' => 'membro.editar',
    'uses' => 'MembroController@editar'
]);
//Altera os dados do Membro
$app->put('/membro/{id}/update', [
    'as' => 'membro.update',
    'uses' => 'MembroController@update'
]);
//Retorna view com o membro a ser removido
$app->get('/membro/{id}/apagar', [
    'as' => 'membro.remover',
    'uses' => 'MembroController@apagar'
]);
//Remove um Membro
$app->delete('/membro/{id}/apagar', [
    'as' => 'membro.destroy',
    'uses' => 'MembroController@destroy'
]);
//Retorna view detalhes do Membro
$app->get('/membro/{id}/detalhes', [
    'as' => 'membro.detalhes',
    'uses' => 'MembroController@detalhes'
]);
//======================================================================================================================

$app->get('/devolucoes/registrar', [
    'as' => 'devolucao.dizimos',
    'uses' => 'DevolucaoController@registrar'
]);

$app->post('/devolucoes', [
    'as' => 'devolucao.store',
    'uses' => 'DevolucaoController@store'
]);

$app->get('/devolucao/relatorio', [
    'as' => 'devolucao.relatorio',
    'uses' => 'DevolucaoController@relatorio'
]);







