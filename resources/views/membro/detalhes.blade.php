@extends('app')

@section('css')
    <link href="{{ url('assets/css/invoice-print.min.css') }}" rel="stylesheet" xmlns="http://www.w3.org/1999/html"/>
@endsection

@section('content')
{{--<h1 class="h1">Detalhes do Membro</h1>--}}
<!-- begin invoice -->
<div class="invoice">
    <div class="invoice-company">
                    <span class="pull-right hidden-print">
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-success m-b-10"><i class="fa fa-print m-r-5"></i> Print</a>
                    </span>
        {{$membro->nome}} - Batisado em: {{ $membro->data_batismo }}
    </div>
    <div class="invoice-header">
        <div class="row">
            <div class="col-md-4">
                <div class="invoice-from">
                    <small>Residencia</small>
                    <address class="m-t-3 m-b-3">
                        {{--<strong>Twitter, Inc.</strong><br />--}}
                        <label>Endereço</label>: {{ $membro->endereço }}, {{ $membro->número }}<br />
                        <label>CEP</label>: {{ $membro->cep }}<br />
                        <label>Bairro</label>: {{ $membro->bairro }}<br />
                    </address>
                </div>
            </div>
            <div class="col-md-4">
                <div class="invoice-to">
                    <small>Contato</small>
                    <address class="m-t-3 m-b-3">
                        {{--<strong>Company Name</strong><br />--}}
                        <label>E-Mail</label>: {{ $membro->email }}<br />
                        <label>Telefone</label>: {{ $membro->telefone }}<br />
                        <label>Celular</label>: {{ $membro->celular }}<br />
                    </address>
                </div>
            </div>
            <div class="col-md-4">
                <div class="invoice-date">
                    <small>Pessoais</small>
                    {{--<div class="date m-t-5"></div>--}}
                    <address class="m-t-3 m-b-3">
                        <label>CPF</label>: {{ $membro->cpf }}<br />
                        <label>RG</label>: {{ $membro->rg }}<br />
                        <label>Responsável</label>: {{ !empty($membro->responsável) ? $membro->responsável : "Não consta!" }}
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="invoice-content">
        <div class="table-responsive">
            <table class="table table-invoice">
                <thead>
                <tr>
                    <th>DESCRIÇÃO</th>
                    <th>DATA</th>
                    <th>OUTRO</th>
                    <th>VALOR</th>
                </tr>
                </thead>
                <tbody>

                <?php $sacrificio = 0; $pacto = 0; $dizimo = 0; $aleatoria = 0; ?>

                @foreach ($devolucoes as $devolucao)
                    <tr style="font-size: 14px;">
                        <td>
                            <span style="font-style: italic; font-weight: 600">{{ $devolucao->tipo }}</span>
                            <br />
                            <small>Referente ao mês de {{ $devolucao->referência_mês }}</small>
                        </td>
                        <td> Registrado em <span style="font-style: italic;font-weight: 600">{{ $devolucao->data }}</span></td>
                        <td>50</td>
                        <td>{{ $devolucao->valor }} - {{ preg_replace("/[^0-9]/", "", $devolucao->tipo) }}</td>
                    </tr>
                    <?php
                            if($devolucao->tipo == "Oferta de Sacrifício"){
                                $sacrificio = $sacrificio + preg_replace("/[^0-9]/", "", $devolucao->valor);
                            } elseif($devolucao->tipo == "Oferta de Pacto"){
                                $pacto = $pacto + preg_replace("/[^0-9]/", "", $devolucao->valor);
                            } elseif($devolucao->tipo == "Dízimo"){
                                $dizimo = $dizimo + preg_replace("/[^0-9]/", "", $devolucao->valor);
                            } else{
                                $aleatoria = $aleatoria + preg_replace("/[^0-9]/", "", $devolucao->valor);
                            }
                    ?>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="invoice-price">
            <div class="invoice-price-left">
                <div class="invoice-price-row">
                    <div class="sub-price">
                        <small>TOTAL DÍZIMO</small>
                            0
                    </div>
                    <div class="sub-price">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="sub-price">
                        <small>TOTAL PACTO</small>
                            0
                    </div>
                    <div class="sub-price">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="sub-price">
                        <small>TOTAL SACRIFÍCIO</small>
                        $108.00
                    </div>
                    <div class="sub-price">
                        <i class="fa fa-plus"></i>
                    </div>
                    <div class="sub-price">
                        <small>TOTAL ALEATÓRIA</small>
                        $108.00
                    </div>
                </div>
            </div>
            <div class="invoice-price-right">
                <small>TOTAL GERAL</small> $4508.00
            </div>
        </div>
    </div>
    <div class="invoice-note">
        * Make all cheques payable to [Your Company Name]<br />
        * Payment is due within 30 days<br />
        * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
    </div>
    <div class="invoice-footer text-muted">
        <p class="text-center m-b-5">
            THANK YOU FOR YOUR BUSINESS
        </p>
        <p class="text-center">
            <span class="m-r-10"><i class="fa fa-globe"></i> matiasgallipoli.com</span>
            <span class="m-r-10"><i class="fa fa-phone"></i> T:016-18192302</span>
            <span class="m-r-10"><i class="fa fa-envelope"></i> rtiemps@gmail.com</span>
        </p>
    </div>
</div>
<!-- end invoice -->
    <script>
        jQuery(document).ready(function () {
            App.init();
        });
    </script>

@endsection

