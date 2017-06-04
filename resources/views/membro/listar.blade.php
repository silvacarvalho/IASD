@extends('app')

@section('css')
    <link href="{{ url('assets/plugins/jquery.DataTables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugins/jquery.DataTables/css/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugins/jquery.DataTables/css/buttons.dataTables.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <h1 class="h1">Membros Cadastrados</h1>

    <!-- begin panel -->
    <div class="panel panel-inverse panel-success">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                            class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i
                            class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                            class="fa fa-minus"></i></a>
            </div>
            <h4 class="panel-title">Todos os seus membros</h4>
        </div>
        <div class="panel-body">


            <div id="data-table_wrapper" class="display dataTables_wrapper form-inline dt-bootstrap no-footer">
                <table id="ListaMembros"
                       class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline table-hover"
                       width="100%" role="grid" aria-describedby="data-table_info" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Responsável</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>Nascimento</th>
                        <th>E-Mail</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>CEP</th>
                        <th>Gerenciar</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($membros as $membro):?>

                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1"></td>
                        <td>{{ $membro->nome }}</td>
                        <td>{{ $membro->responsável }}</td>
                        <td>{{ $membro->cpf }}</td>
                        <td>{{ $membro->rg }}</td>
                        <td>{{ $membro->telefone }}</td>
                        <td>{{ $membro->celular }}</td>
                        <td>{{ $membro->nascimento }}</td>
                        <td>{{ $membro->email }}</td>
                        <td>{{ $membro->endereço }}</td>
                        <td>{{ $membro->número }}</td>
                        <td>{{ $membro->bairro }}</td>
                        <td>{{ $membro->cep }}</td>
                        <td>
                            <a href="{{ route('membro.editar', ['id' => $membro->id]) }}"
                               class="btn btn-default" title="Editar {{$membro->nome}}">
                                <i class="fa fa-edit fa-fw" style="margin-right: 3%;cursor: pointer;"></i>
                            </a>
                            <a href="{{ route('membro.remover', ['id' => $membro->id]) }}"
                               class="btn btn-danger" title="Remover {{$membro->nome}}">
                                <i class="fa fa-remove fa-fw" style="cursor: pointer;"></i>
                            </a>
                            <a href="{{ route('membro.detalhes', ['id' => $membro->id]) }}"
                               class="btn btn-inverse" title="Detalhes de {{$membro->nome}}">
                                <i class="fa fa-list-alt fa-fw" style="cursor: pointer;"></i>
                            </a>
                        </td>
                    </tr>

                    <?php endforeach;?>

                    </tbody>
                </table>
            </div>

            <script src="{{ url('assets/plugins/jquery.DataTables/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ url('assets/plugins/jquery.DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ url('assets/plugins/jquery.DataTables/js/dataTables.responsive.min.js') }}"></script>
            <script src="{{ url('assets/plugins/jquery.DataTables/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ url('assets/plugins/jquery.DataTables/js/buttons.print.min.js') }}"></script>
        </div>
        <script>
            jQuery(document).ready(function () {
                App.init();
                jQuery("#ListaMembros").DataTable({
                    responsive: true,
                    language: {url: '{{ url('assets/plugins/jquery.DataTables/Portuguese-Brasil.json') }}'},
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'print',
                            text: 'Imprimir toda a tabela',
                            customize: function (win) {
                                $(win.document.body)
                                    .css('font-size', '10pt');
                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                            }
                        }
                    ]
                });


            });
        </script>


@endsection

