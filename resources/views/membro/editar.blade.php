@extends('app')

@section('css')
    <link href="{{ url('assets/plugins/bootstrap-wizard/css/bwizard.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"></link>
    <link href="{{ url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css') }}"></link>
    <link href="{{ url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}"></link>
    <link href="{{ url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css') }}"></link>
@endsection


@section('content')
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                            class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i
                            class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i
                            class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">Informações do Membro</h4>
        </div>
        <div class="panel-body">
            <form action="{{ route('membro.update', ['id' => $membro->id]) }}"
                  method="post" data-parsley-validate="true" name="form-wizard">
                <input type="hidden" name="_method" value="PUT">
                <div id="wizard">
                    <ol>
                        <li>
                            Informações
                            <small>Informações pessoais do membro.</small>
                        </li>
                        <li>
                            Contato
                            <small>Informações de contato do membro.</small>
                        </li>
                        <li>
                            Outras informações
                            <small>Outras informações importantes.</small>
                        </li>
                        <li>
                            Finalizar
                            <small>Finalizando cadastro do membro.</small>
                        </li>
                    </ol>
                    <!-- begin wizard step-1 -->
                    <div class="wizard-step-1">
                        <fieldset>
                            <legend class="pull-left width-full">Informações</legend>
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-3">
                                    <div class="form-group block1">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome" placeholder="Nome completo"
                                               class="form-control" value="{{$membro->nome}}"
                                               data-parsley-group="wizard-step-1" required/>
                                    </div>
                                </div>
                                <!-- end col-4 -->
                                <!-- begin col-4 -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="responsavel">Mãe/Pai</label>
                                        <input type="text" name="responsável" id="responsavel" placeholder="Mãe/Pai"
                                               class="form-control" value="{{$membro->responsável}}"
                                               data-parsley-group="wizard-step-1"/>
                                    </div>
                                </div>
                                <!-- end col-4 -->
                                <!-- begin col-4 -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cpf">CPF</label>
                                        <input type="text" name="cpf" id="cpf" placeholder="123.456.789-00"
                                               class="form-control" value="{{$membro->cpf}}"
                                               data-parsley-group="wizard-step-1" required/>
                                    </div>
                                </div>
                                <!-- end col-4 -->
                                <!-- begin col-4 -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rg">RG</label>
                                        <input type="text" name="rg" id="rg" placeholder="Informe o RG do membro"
                                               class="form-control" value="{{$membro->rg}}"
                                               data-parsley-group="wizard-step-1"/>
                                    </div>
                                </div>
                                <!-- end col-4 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                    </div>
                    <!-- end wizard step-1 -->
                    <!-- begin wizard step-2 -->
                    <div class="wizard-step-2">
                        <fieldset>
                            <legend class="pull-left width-full">Informações para Contato</legend>
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" name="telefone" id="telefone" placeholder="(94) 3348-1790"
                                               class="form-control" value="{{$membro->telefone}}"
                                               data-parsley-group="wizard-step-2"/>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="celular">celular</label>
                                        <input type="text" name="celular" id="celular" placeholder="(94) 99298-1222"
                                               class="form-control" value="{{$membro->celular}}"
                                               data-parsley-group="wizard-step-2"/>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                            </div>
                            <!-- end row -->
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-6 -->
                                <div class="col-md-6">
                                    <div class="form-group" id="div_nascimento">
                                        <label for="nascimento">Data de Nascimento</label>
                                        <div class="input-group date">
                                            <input type="text" name="nascimento" class="form-control" id="nascimento"
                                                   placeholder="23/12/2017" value="{{$membro->nascimento}}"
                                                   data-parsley-group="wizard-step-2" required>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-Mail</label>
                                        <input type="email" name="email" id="email" placeholder="someone@example.com"
                                               class="form-control" data-parsley-group="wizard-step-2"
                                               data-parsley-type="email" value="{{$membro->email}}"/>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                    </div>
                    <!-- end wizard step-2 -->
                    <!-- begin wizard step-3 -->
                    <div class="wizard-step-3">
                        <fieldset>
                            <legend class="pull-left width-full">Endereço de Moradia</legend>
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="endereço">Endereço</label>
                                        <div class="controls">
                                            <input type="text" name="endereço" id="endereço"
                                                   placeholder="Av. Rio de Janeiro"
                                                   class="form-control" value="{{$membro->endereço}}"
                                                   data-parsley-group="wizard-step-3" required/>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-4 -->
                                <!-- begin col-2 -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="numero">Número</label>
                                        <div class="controls">
                                            <input type="text" name="número" id="numero" placeholder="100"
                                                   class="form-control" value="{{$membro->número}}"
                                                   data-parsley-group="wizard-step-3" required/>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-2 -->
                                <!-- begin col-3 -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="bairro">Bairro</label>
                                        <div class="controls">
                                            <input type="text" name="bairro" id="bairro" placeholder="Bairro"
                                                   class="form-control" value="{{$membro->bairro}}"
                                                   data-parsley-group="wizard-step-3" required/>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-3 -->
                                <!-- begin col-3 -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cep">CEP</label>
                                        <div class="controls">
                                            <input type="text" name="cep" id="cep" placeholder="68.122-000"
                                                   class="form-control" value="{{$membro->cep}}"
                                                   data-parsley-group="wizard-step-3" required/>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-3 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                    </div>
                    <!-- end wizard step-3 -->
                    <!-- begin wizard step-4 -->
                    <div>
                        <div class="jumbotron m-b-5 text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>Atenção</h1>
                                    <p>
                                        Tem certeza das informações que estás enviando?<br/>
                                        Quando enviar estes dados, as informações anteriores serão automáticamente perdidas!
                                    </p>
                                    <p><button class="btn btn-success btn-lg" type="submit" role="button">Alterar Membro</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end wizard step-4 -->
                </div>
            </form>
        </div>
    </div>
    <!-- end panel -->


    <div class="col-md-6">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


    <script src="{{ url('assets/plugins/parsley/dist/parsley.js') }}"></script>
    <script src="{{ url('assets/plugins/parsley/dist/i18n/pt-br.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-wizard/js/bwizard.js') }}"></script>
    <script src="{{ url('assets/js/form-wizards-validation.demo.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.mask.js') }}"></script>

    <script>
        jQuery(document).ready(function () {
            App.init();
            FormWizardValidation.init();
            jQuery('#cpf').mask('000.000.000-00');
            jQuery('#cep').mask('00.000-000');
            jQuery('#telefone').mask('(00) 0000-0000');

            var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                    onKeyPress: function (val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };
            jQuery('#celular').mask(SPMaskBehavior, spOptions);
            jQuery('#div_nascimento .input-group.date').datepicker({
                autoclose: true,
                todayHighlight: true,
                toggleActive: true,
                language: 'pt-BR'
            });

        });
    </script>
@endsection

