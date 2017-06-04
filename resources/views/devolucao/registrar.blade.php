@extends('app')

@section('css')
    <link href="{{ url('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    <h1 class="h1">Registrar Dízimo/Oferta</h1>
    <hr>
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                            class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i
                            class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">Registrar Dízimos ou Ofertas</h4>
        </div>
        <div class="panel-body">
            <form action="{{ route('devolucao.store') }}" method="POST" data-parsley-validate="true" >
                <div class="row">
                    <div class="col-md-4">
                        <label>Selecione o Membro</label>
                        <select class="form-control selectpicker" data-size="10" data-live-search="true"
                                data-style="btn-inverse" id="membros" name="membro_id" required>
                            <option value="">Selecione um Membro</option>
                            @foreach($dataMembro as $key=>$value)
                                <option value="{{ $key }}" id="{{ $key }}">CÓD:{{$key}} - {{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label>Informe o valor</label>
                        <input type="text" name="valor" id="valor" class="form-control" data-thousands="."
                               data-decimal="," data-prefix="R$ " data-style="btn-inverse" required>
                    </div>
                    <div class="col-md-3">
                        <label>Selecione o tipo do valor</label>
                        <select class="form-control selectpicker" data-size="10" data-live-search="true"
                                data-style="btn-inverse" id="tipo" name="tipo" required>
                            <option value="">Selecione um Tipo</option>
                            @foreach($tipoOferta as $tipo)
                                <option value="{{ $tipo }}" id="{{ $tipo }}">{{ $tipo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Selecione o mês de referência</label>
                        <select class="form-control selectpicker" data-size="10" data-live-search="true"
                                data-style="btn-inverse" id="Mes_Referencia" name="referência_mês" required>
                            <option value="">Selecione um Tipo</option>
                            @foreach($meses as $mese)
                                <option value="{{ $mese }}" id="{{ $mese }}">{{ $mese }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="hidden" value="{{ date('d-m-Y H:i:s') }}" name="data">
                <div class="row">
                    <div class="col-md-12 top text-right">
                        <button type="submit" class="btn btn-success margin-top">Salvar registro</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end panel -->

    <script src="{{ url('assets/plugins/maskmoney/jquery.maskMoney.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/plugins/parsley/dist/parsley.js') }}"></script>
    <script src="{{ url('assets/plugins/parsley/dist/i18n/pt-br.js') }}"></script>

    <script>
        jQuery(document).ready(function () {
            App.init();
            $('#membros, #tipo, #Mes_Referencia').selectpicker('render');
            $('#valor').maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
        });
    </script>

@endsection







