 <!-- ========== Left Sidebar Start ========== -->
 <div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Navegação</li>
                <li>
                    <a href="{{ route('dashboard') }}"><i class="fi-air-play"></i> <span> HOME </span></a>
                </li>
                <li>
                    <a href="{{ route('provas.index') }}"><i class="fi-paper"></i> <span> PROVAS </span></a>
                </li>
                <li>
                    <a href="{{ route('questoes.index') }}"><i class="fi-speech-bubble"></i> <span> QUESTÕES </span></a>
                </li>
                <li>
                    <a href="{{ route('plano.index') }}"><i class="fi-briefcase"></i> <span> PLANOS </span></a>
                </li>
                @if(Auth::user()->tp_user == 1)
                <li>
                    <a href="{{ route('users') }}"><i class="fi-head"></i> <span> USUÁRIOS </span></a>
                </li>
                <li>
                    <a href="{{ route('especialidades.index') }}"><i class="fi-target"></i> <span> ESPECIALIDADES </span></a>
                </li>
                <li>
                        <a href="{{ route('banca.index') }}"><i class="fi-paper"></i> <span> BANCAS </span></a>
                </li>
                @endif
                <li>
                    <a href="{{ route('pagamento.index') }}"><i class="pe-7s-cash"></i><span>PAGAMENTOS</span></a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->