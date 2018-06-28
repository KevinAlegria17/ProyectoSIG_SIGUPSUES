<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>


            
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    
                        
                        <li><a href="RepoNoEscogido">Proyectos no escogidos</a></li>
                        <li><a href="RepoAbandonados">Proyectos Abandonados</a></li>
                        <li><a href="cuposDisponibles">Cupos Disponibles</a></li>
                        <li><a href="cantidadBeneficiarios">Mayor cantidad de beneficiarios</a></li>
                        <li><a href="servicioSocialFinalizado">Servicio Social Finalizado</a></li>
                
                        <li><a href="empresasSolicitantes">Empresas Solicitantes</a></li>
                        <li><a href="{{ route('peticiones') }}">Cantidad de Peticiones</a></li>
                        <li><a href="/mayorDemanda">Servicio social mas demandado</a></li>
                        <li><a href="/dineroAhorrado">Dinero Ahorrado</a></li>
                        <li><a href="/existenciasPorEscuela">Servicio Social Existente</a></li>
                        <li><a href="">Nuevo alumno por CSV</a></li>
                   
                </ul>
            </li>

            <!--li><a  href="/alumnos"><i class='fa fa-user'></i> <span>Alumnos</span></a></li>
            <li><a  href="/proyectos"><i class='fa fa-institution'></i> <span>Proyectos</span></a></li>
            <li><a  href="/serviciosocial"><i class='fa fa-line-chart'></i> <span>Servicio Social</span></a></li>
            <li><a  href="/otros"><i class='fa fa-institution'></i> <span>Otros</span></a></li-->
            
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
