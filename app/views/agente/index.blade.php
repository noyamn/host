<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Gestion Online de Agentes | GOA</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
	<!-- Bootstrap 3.3.4 -->
    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
    <!-- Font Awesome Icons -->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}
    <!-- Ionicons -->
    {{ HTML::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}
    <!-- Theme style -->
    {{ HTML::style('dist/css/styles-agente.css') }}
    <!-- AdminLTE Skins --!>
    {{ HTML::style('dist/css/skins/_all-skins.css') }}
    <!-- DATA TABLES -->
    {{ HTML::style('plugins/datatables/dataTables.bootstrap.css') }}	
	<!-- Date Range -->
    {{ HTML::style('plugins/daterangepicker/daterangepicker-bs3.css') }}	
	
	<!-- Scripts JavaScript-->
    <!-- jQuery 2.1.4 -->
    {{ HTML::script('plugins/jQuery/jQuery-2.1.4.min.js') }}
    <!-- Bootstrap 3.3.2 JS -->
    {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
    <!-- SlimScroll -->
    {{ HTML::script('plugins/slimScroll/jquery.slimscroll.min.js') }}
    <!-- FastClick -->
    {{ HTML::script('plugins/fastclick/fastclick.min.js') }}
    <!-- AdminLTE App --> 
    {{ HTML::script('dist/js/app.min.js') }}
    <!-- AdminLTE for demo purposes -->
    {{ HTML::script('dist/js/demo.js') }}
	<!-- CKEditor -->
    {{ HTML::script('//cdn.ckeditor.com/4.4.7/basic/ckeditor.js') }}
	<!-- Date Range -->	
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}
    {{ HTML::script('plugins/daterangepicker/daterangepicker.js') }}
    <!-- DATA TABES SCRIPT -->	
    {{ HTML::script('plugins/datatables/jquery.dataTables.min.js') }}
    {{ HTML::script('plugins/datatables/dataTables.bootstrap.min.js') }}
	<!-- Validator-->
    {{ HTML::script('plugins/validator/gen_validatorv4.js') }}    
	<!-- Web Notifications-->
    {{ HTML::script('plugins/webnotification/WebNotifications.js') }}       
	<!-- Funciones JavaScript del Sistema-->
    {{ HTML::script('dist/js/Funciones.js') }}
	<!-- Funciones AJAX del Sistema-->
    {{ HTML::script('dist/js/Ajax.js') }}       
	
  </head>
  <body class="skin-yellow layout-top-nav">
    <div class="wrapper">

      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="../../index2.html" class="navbar-brand"><b>WU</b>GoA</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{url()}}/home">Inicio <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reclamos <span class="caret"></span></a>
                  <ul class="dropdown-menu menu-li" role="menu">
                    <li class="divider"></li>
                    <li><a href="{{url()}}/home/incidencias/inicia/reclamo">Iniciar un Reclamo</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url()}}/home/incidencias/busca/reclamo">Estado de Reclamos</a></li>   
                    <li class="divider"></li>                                     
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <span class="caret"></span></a>
                  <ul class="dropdown-menu menu-li" role="menu">
                    <li class="divider"></li>
                    <li><a href="{{url()}}/home/incidencias/inicia/consulta">Iniciar una Consulta</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url()}}/home/incidencias/busca/consulta">Estado de Consultas</a></li>   
                    <li class="divider"></li>                                     
                  </ul>
                </li>                
              </ul>                       
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu" style="visibility: hidden;">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-envelope-o"></i>
                      <span class="label label-success">0</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the messages -->
                        <ul class="menu">
                          <li><!-- start message -->
                            <a href="#">
                              <div class="pull-left">
                                <!-- User Image -->
                                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                              </div>
                              <!-- Message title and timestamp -->
                              <h4>
                                Support Team
                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                              </h4>
                              <!-- The message -->
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li><!-- end message -->
                        </ul><!-- /.menu -->
                      </li>
                      <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                  </li><!-- /.messages-menu -->

                  <!-- Notifications Menu -->
                  <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bell-o"></i>
                      <span class="label label-danger" id="count-notificaciones">
                        0
                      </span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">Notificaciones</li>
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu" id="notificaciones">                                                  
                        </ul>
                      </li>
                      <li class="footer"><a href="#">View all</a></li>
                    </ul>
                  </li>                  
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <img src="{{url()}}/dist/img/pago-facil-logo.png" class="user-image" alt="User Image"/>
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs">Agente</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                        <img src="{{ url() }}/dist/img/pago-facil-logo.png" class="img-circle" alt="User Image" />
                        <p>
                          {{ Auth::user()->agente->nombre_fantasia }}
                          <small>{{ Auth::user()->agente->domicilio }}</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="{{url()}}/home/datos_personales" class="btn btn-default btn-flat">Datos Personales</a>
                        </div>
                        <div class="pull-right">
                          <a href="{{url()}}/login/cerrarsesion" class="btn btn-default btn-flat">Cerrar Sesion</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
           <div class="col-md-12">
              <div class="box box-solid">
                 <div class="box-body" style="padding:0px;">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                       <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                          <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                       </ol>
                       <div class="carousel-inner">
                          <div class="item active">
                             <img src="{{url('dist/img/agente/banner/1.jpg')}}" width="100%" height="400px" alt="">
                             <div class="carousel-caption">
                             </div>
                          </div>
                          <div class="item">
                             <img src="{{url('dist/img/agente/banner/2.jpg')}}" width="100%" alt="">
                             <div class="carousel-caption">
                             </div>
                          </div>
                          <div class="item">
                             <img src="{{url('dist/img/agente/banner/3.jpg')}}" width="100%" alt="">
                             <div class="carousel-caption">
                             </div>
                          </div>
                          <div class="item">
                             <img src="{{url('dist/img/agente/banner/4.jpg')}}" width="100%" alt="">
                             <div class="carousel-caption">
                             </div>
                          </div>
                       </div>
                       <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                       <span class="fa fa-angle-left"></span>
                       </a>
                       <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                       <span class="fa fa-angle-right"></span>
                       </a>
                    </div>
                 </div>
                 <!-- /.box-body -->
                 <div class="row" style="margin-top: 15px;">
                    <div class="col-md-12">
                       <div class="col-md-10 col-md-offset-1">
                          <p class="lead col-md-12" style="margin-top:20px; font-size:35px;">
                             Gesti&oacute;n Online de Agentes
                          </p>
                          <p style="font-size:18px;">
                             Bienvenido a G.O.A., un sistema web de Gesti&oacute;n Online orientado a la atenci&oacute;n online de
                             los Agentes con el objetivo de ofrecer una variante de atenci&oacute;n y as&iacute; minimizar los tiempos de respuesta.
                          </p>
                          <p style="font-size:18px;">
                            Desde esta aplicacion usted podra realizar en simples pasos sus reclamos y consultas, y asi poder ofrecerle a sus clientes un servicio mas eficiente.
                          </p>
                          <p style="font-size:18px;">
                            Ante cualquier duda contactese con la mesa de ayuda <a>gestiononline@westernunion.com.ar</a>
                          </p>                                                       
                       </div>
                       <div class="col-md-10 col-md-offset-1">
                       </div>
                       <div class="col-md-4 label-home">
                          <img src="{{url('dist/img/home-gestion-online.png')}}" class="icono-home" alt="...">
                          <h4>Gesti&oacute;n de manera Online</h4>
                          <p>
                       </div>
                       <div class="col-md-4 label-home">
                          <img src="{{url('dist/img/home-pers.jpg')}}" class="icono-home" alt="...">
                          <h4>Atenci&oacute;n y respuesta personalizada</h4>
                       </div>
                       <div class="col-md-4 label-home">
                          <img src="{{url('dist/img/home-time.jpg')}}" class="icono-home" alt="...">
                          <h4>Minimiza los tiempos de respuesta</h4>
                       </div>
                    </div>
                 </div>
                 <div class="row" style="margin-top: 25px;">
                    <div class="col-md-12">
                       <div class="col-md-10 col-md-offset-1">
                          <p class="lead col-md-12" style="margin-top:20px; font-size:35px;">
                             Novedades
                          </p>
                       </div>
                       <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="thumbnail">
                              <img src="{{url('dist/img/agente/novedades/1.jpg')}}" alt="...">
                              <div class="caption">
                                <h4>Estamos en Facebook</h4>
                                <small>Seguinos en nuestra Fanpage y conoc&eacute; m&aacute;s sobre todos los servicios de Pago F&aacute;cil.</small>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 col-md-offset-1">
                            <div class="thumbnail">
                              <img src="{{url('dist/img/agente/novedades/2.jpg')}}" alt="...">
                              <div class="caption">
                                <h4>Env&iacute;os de Dinero</h4>
                                <small>Con tus env&iacute;os de dinero tambi&eacute;n podes obtener beneficios. Ingres&aacute; en www.soycliente.com, eleg&iacute; el descuento que quieras, ingres&aacute; el n&uacute;mero de env&iacute;o de dinero y el descuentos te va a llegar en un mensaje de texto a tu celular.</small>
                              </div>
                            </div>
                          </div>     
                          <div class="col-md-5">
                            <div class="thumbnail">
                              <img src="{{url('dist/img/agente/novedades/3.jpg')}}" alt="...">
                              <div class="caption">
                                <h4>Soy Cliente </h4>
                                <small>&iexcl;Sumate al programa Soy Cliente!Es simple, una vez que te registras, cada vez que pagas tus facturas, envi&aacute;s o recib&iacute;s dinero dentro del pa&iacute;s o recarg&aacute;s tu celular, le indic&aacute;s al cajero tu n&uacute;mero de documento y ya pod&eacute;s acceder a los mejores descuentos y beneficios! M&aacute;s informaci&oacute;n www.soycliente.com</small>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 col-md-offset-1">
                            <div class="thumbnail">
                              <img src="{{url('dist/img/agente/novedades/4.jpg')}}" alt="...">
                              <div class="caption">
                                <h4>Descargate la aplicaci&oacute;n de Pago F&aacute;cil</h4>
                                <small>Conoc&eacute; siempre el local m&aacute;s cercano de Pago F&aacute;cil</small>
                              </div>
                            </div>
                          </div>                                                
                        </div>
                    </div>
                 </div>                 
              </div>
                 <div class="row" style="margin-top: 25px; padding-bottom:150px;">
                    <div class="col-md-12">
                       <div class="col-md-10 col-md-offset-1">
                          <p class="lead col-md-12" style="margin-top:20px; font-size:35px;">
                             Cobertura geogr&aacute;fica
                          </p>
                       </div>
                       <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{url('dist/img/agente/mapa.jpg')}}" class="col-md-12" alt="...">   
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <div class="callout callout-default">
                                   <h4>AMBA Capital Federal | GBA</h4>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Oficina comercial</strong>
                                   </div>
                                   <div class="row">
                                    <small>Montevideo 825 (C1019ABQ)</small>
                                   </div>                                   
                                   </div>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Horario de atenci&oacute;n</strong>
                                   </div>
                                   <div class="row">
                                    <small>Lunes a Viernes de 9 a 18 hs.</small>
                                   </div>
                                   </div>                                   
                                </div>                                
                            </div>  
                            <div class="col-md-6 col-md-offset-1">
                                <div class="callout callout-default">
                                   <h4>Buenos Aires</h4>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Oficina comercial</strong>
                                   </div>
                                   <div class="row">
                                    <small>Independencia 2031/35 (7600)</small>
                                   </div>                                   
                                   </div>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Horario de atenci&oacute;n</strong>
                                   </div>
                                   <div class="row">
                                    <small>Lunes a Viernes de 9 a 18 hs.</small>
                                   </div>
                                   </div>                                   
                                </div>                                
                            </div>    
                            <div class="col-md-6 col-md-offset-1">
                                <div class="callout callout-default">
                                   <h4>NORTE: Salta | Jujuy | Tucum&aacute;n</h4>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Oficina comercial</strong>
                                   </div>
                                   <div class="row">
                                    <small>Lamadrid 80 (4400) Salta.</small>
                                   </div>                                   
                                   </div>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Horario de atenci&oacute;n</strong>
                                   </div>
                                   <div class="row">
                                    <small>Lunes a Viernes de 9 a 18 hs.</small>
                                   </div>
                                   </div>                                   
                                </div>                                
                            </div>    
                            <div class="col-md-6 col-md-offset-1">
                                <div class="callout callout-default">
                                   <h4>C&oacute;rdoba | Santiago del Estero | La Pampa</h4>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Oficina comercial</strong>
                                   </div>
                                   <div class="row">
                                    <small>Rosario de Santa Fe 153 (5000)</small>
                                   </div>                                   
                                   </div>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Horario de atenci&oacute;n</strong>
                                   </div>
                                   <div class="row">
                                    <small>Lunes a Viernes de 9 a 18 hs.</small>
                                   </div>
                                   </div>                                   
                                </div>                                
                            </div>    
                            <div class="col-md-6 col-md-offset-6">
                                <div class="callout callout-default">
                                   <h4>Mendoza | San Luis | Catamarca | San Juan </h4>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Oficina comercial</strong>
                                   </div>
                                   <div class="row">
                                    <small>Av. Espa&nacute;a 1233 (5500) Mendoza.</small>
                                   </div>                                   
                                   </div>
                                   <div class="col-md-6">
                                   <div class="row">
                                    <strong>Horario de atenci&oacute;n</strong>
                                   </div>
                                   <div class="row">
                                    <small>Lunes a Viernes de 9 a 18 hs.</small>
                                   </div>
                                   </div>                                   
                                </div>                                
                            </div>                                                                                                                                                                                                                                                                                                                                                                                                   
                        </div>
                    </div>
                 </div>                 
              </div>                     
              
              <!-- /.box -->
           </div>
        </div>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://www.unlam.edu.ar">UNLAM</a></strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->    
    
<script type="text/javascript">
    
    $( document ).ready(function() {
        
        cargaNotificaciones(url(), 'agente');
        
        var notificacionesAgente = function() 
        { 
            getNotificaciones(url(), 'agente');
            return false;
        }
        
        setInterval(notificacionesAgente, 2000);
        
        $('.notifications-menu').click(function(){ clickNotificaciones(url(), 'agente'); });                                  
                     
        @yield('javascript')	
            
    });
    
    function url()
    {
      return '{{App::make('url')->to('/')}}';
    } 
     	
</script>    
  </body>
</html>
