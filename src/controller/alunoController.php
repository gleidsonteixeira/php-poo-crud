<?php 

//definindo que nesse arquivo será trabalhado os tipos de dados
declare(strict_types=1);

function inicio (): void //estamos declarando que essa funcao "nao tem retorno"
{
    include '../src/views/inicio.phtml';
}

function excluir() {
    $id = $_GET['id']; //recuperando o id que tava na URL

    excluirAluno($id); //pedindo ao repository pra excluir o aluno (nao sabemos como, mas ele vai)

    header('location: /listar'); //redirecionando pra pagina de listar
}

function listar (): void 
{
    $alunos = buscarAlunos();

    include '../src/views/listar.phtml';
}

function novo (): void 
{
    include '../src/views/novo.phtml';
    novoAluno();
}

function editar (): void
{
    $id = $_GET["id"];
    $aluno = buscarUmAluno($id);
    atualizarAluno();
    include '../src/views/editar.phtml';
}
