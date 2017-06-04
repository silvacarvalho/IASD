@extends('app')

@section('css')
    <link href="{{ url('assets/plugins/jquery.DataTables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugins/jquery.DataTables/css/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugins/jquery.DataTables/css/buttons.dataTables.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <h1 class="h1">Relatórios</h1>

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
            <h4 class="panel-title">Relatório de dizimantes</h4>
        </div>
        <div class="panel-body">
            <table id="dizimantes" class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline table-hover"
                   width="100%" role="grid" aria-describedby="data-table_info" style="width: 100%;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Devoluções</th>
                    <th>Gerenciar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($relatorios as $relatorio)
                <tr>
                    <td>{{ $relatorio->id }}</td>
                    <td>{{ $relatorio->nome }}</td>
                    <td>{{ $relatorio->cpf }}</td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th style="width: 35%;">Valor</th>
                                <th style="width: 65%;">Mês de Referência</th>
                            </tr>
                            @foreach($relatorio->devolucoes as $devolucao)
                                @if($devolucao->created_at <= date_sub(new DateTime("now"), date_interval_create_from_date_string('2 month')))
                                    <?php continue; ?>
                                @else
                                <tr>
                                    <td style="width: 35%;">{{ $devolucao->valor }}</td>
                                    <td style="width: 65%;">{{ $devolucao->referência_mês }}</td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                    </td>
                    <td>
                        <a href="{{ route('membro.detalhes', ['id' => $relatorio->id]) }}" class="btn btn-edit"> Visualizar <i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <script src="{{ url('assets/plugins/jquery.DataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery.DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery.DataTables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery.DataTables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery.DataTables/js/buttons.print.min.js') }}"></script>

    <script>
        jQuery(document).ready(function () {
            App.init();
            jQuery('#dizimantes').DataTable({
                responsive: true,
                language: {url: '{{ url('assets/plugins/jquery.DataTables/Portuguese-Brasil.json') }}'},
            });
        });
    </script>


@endsection




