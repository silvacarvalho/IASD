<!-- begin #sidebar -->
<div id="sidebar" class="sidebar sidebar-transparent">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{{ url('assets/img/user-13.jpg') }}" alt="" /></a>
                </div>
                <div class="info">
                    Sean Ngu
                    <small>Front end developer</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navegação</li>
            <li class="has-sub">
                <a href="/">
                    <i class="fa fa-desktop"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="has-sub">{{-- MEMBROS --}}
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-users"></i>
                    <span>Membros</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('membro.novo') }}">Cadastrar </a></li>
                    <li><a href="{{ route('membro.listar') }}">Listar </a></li>
                </ul>
            </li>

            <li class="has-sub">{{-- TESOURARIA --}}
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-money"></i>
                    <span>Tesouraria</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('devolucao.dizimos') }}">Dizimos/Ofertas</a></li>
                    <li><a href="{{ route('devolucao.relatorio') }}">Relatórios</a></li>
                </ul>
            </li>
            <li class="has-sub">{{-- SECRETARIA --}}
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-assistive-listening-systems"></i>
                    <span>Secretaria</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="javascript:;">Relatórios</a></li>
                    {{--<li><a href="javascript:;">Ofertas</a></li>--}}
                    {{--<li><a href="javascript:;">Relatórios</a></li>--}}
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="fa fa-user-md"></i>
                    <span>Jovens</span>
                </a>
                {{--<ul class="sub-menu">--}}
                    {{--<li><a href="../../frontend/one-page-parallax/template_content_html/index.html" target="_blank">One Page Parallax</a></li>--}}
                    {{--<li><a href="../../frontend/blog/template_content_html/index.html" target="_blank">Blog</a></li>--}}
                    {{--<li><a href="../../frontend/forum/template_content_html/index.html" target="_blank">Forum</a></li>--}}
                    {{--<li><a href="../../frontend/e-commerce/template_content_html/index.html" target="_blank">E-Commerce</a></li>--}}
                {{--</ul>--}}
            </li>
            <li><a href="javascript:;"><i class="icon-user-female"></i> <span>Mulheres</span></a></li>
            <li><a href="javascript:;"><i class="fa fa-child"></i> <span>Infantis</span></a></li>
            <li><a href="javascript:;"><i class="fa fa-soundcloud"></i> <span>Sonoplastia</span></a></li>
            <li><a href="javascript:;"><i class="fa fa-crosshairs"></i> <span>Programação</span></a></li>

            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->