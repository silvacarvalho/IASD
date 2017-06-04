@extends('app')

@section('css')


@endsection

@section('content')
<h1 class="h1">Remover Membro</h1>
<div class="jumbotron m-b-0 text-center">
    <div class="row">
        <div class="col-md-10 text-left" style="padding-left: 20%;">
            <h2>Deseja mesmo remover este Membro?</h2>

            <form action="{{ route('membro.destroy', ['id'=>$membro->id]) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{ route('membro.listar') }}" class="btn btn-primary">
                    <i class="fa fa-rotate-left"></i>
                    Voltar
                </a>
                <button type="submit" class="btn btn-danger right">Remover</button>
            </form>

            <p>
                <strong>Nome</strong>: <span>{{ $membro->nome }}</span><br/>
                <strong>Mãe/Pai</strong>: <span>{{ $membro->responsável }}</span><br/>
                <strong>CPF</strong>: <span>{{ $membro->cpf }}</span><br/>
                <strong>RG</strong>: <span>{{ $membro->rg }}</span><br/>
                <strong>Telefone</strong>: <span>{{ $membro->telefone }}</span><br/>
                <strong>Celular</strong>: <span>{{ $membro->celular }}</span><br/>
                <strong>Nascimento</strong>: <span>{{ $membro->nascimento }}</span><br/>
                <strong>E-Mail</strong>: <span>{{ $membro->email }}</span><br/>
                <strong>Endereço</strong>: <span>{{ $membro->endereço }}</span><br/>
                <strong>Número</strong>: <span>{{ $membro->número }}</span><br/>
                <strong>Bairro</strong>: <span>{{ $membro->bairro }}</span><br/>
                <strong>CEP</strong>: <span>{{ $membro->cep }}</span><br/>
            </p>
        </div>

    </div>
</div>
    <script>
        jQuery(document).ready(function () {
            App.init();
        });
    </script>

@endsection

