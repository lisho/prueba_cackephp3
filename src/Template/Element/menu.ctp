<?php if (isset($auth)): ?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            
              <!--
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> -->

            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                
                 <!-- /.boton toggle navigation -->
                 
                <div class="navbar-toggle nav-home"> 
                    <a class="" href="/pages/home">
                        <i class="fa fa-home"></i>
                    </a>
                </div>
  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa  fa-group  fa-fw"></i> <span class="esconder">Participantes </span><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-th fa-fw"></i><span class="esconder"> Acciones </span><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->

<!-- *** Administtración *** -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gears fa-fw"></i><span class="esconder"> Administración </span><i class="fa fa-caret-down"></i>
                    </a>
                    
                     <ul class="dropdown-menu dropdown-user">
                        <li class="dropdown-header">Usuarios del sistema:</li>
                            <li><a  href="/Users/add"><i class="glyphicon glyphicon-plus"></i> Nuevo usuario</a></li>
                            <li><a  href="/Users/index"><i class="glyphicon glyphicon-list"></i> Lista de usuarios</a></li>
                        
                         <li role="separator" class="divider"></li>
                         
                         <li class="dropdown-header">Gestión de Avisos:</li>
                         <li><a  href="/Avisos/add"><i class="glyphicon glyphicon-plus"></i> Nuevo aviso</a></li>
                         <li><a  href="/Avisos/index"><i class="glyphicon glyphicon-list"></i> Lista de avisos</a></li>
                         <li><a  href="/Importancia_avisos/add"><i class="glyphicon glyphicon-plus"></i> Nuevo nivel de importancia</a></li>
                         <li><a  href="/Tipo_avisos/add"><i class="glyphicon glyphicon-plus"></i> Nuevo tipo de aviso</a></li>
                         
                    </ul>
                
                
                </li>
                
<!-- *** Alertas *** -->        

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i><span class="esconder"> Avisos </span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                       <?php $cell = $this->cell('Pages::ultimosAvisos');
                            echo $cell; ?>
                            
                       
                         <li>
                             <a  class="text-center" href="/Avisos/index"><h4><i class="fa fa-gears"></i> 
                                 <strong>  Gestión de Avisos</strong>
                                <i class="fa fa-angle-right"></i></h4>
                            </a>
                       </li>
                       <!-- <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#"><i class="fa fa-gears"></i>
                                <strong>  Ver Todos los Avisos</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li> -->
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                         <?php echo ucwords($auth['username']);?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="/Users/view/<?= $auth['id']; ?>"><i class="fa fa-user fa-fw"></i> Mi perfil</a>
                        
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-gear fa-fw"></i> 
                                Settings
                            </a>
                        </li>
                        <li class="divider"></li>
                        
                         <li>
                            <a href="/users/logout">
                                <i class="fa fa-user fa-fw"></i> 
                               Salir
                            </a>
                        </li>
                     
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                
                
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse hidden">
                    <ul class="nav" id="side-menu">
                        <div class="sidebar-head text-center">
                            
                         <?= $this->Html->image('soñadorlogo2.svg', ["width"=>"150px", "class"=>"img-circle img-thumbnail sombra","url"=>['controller'=>'pages', 'action'=>'home']]) ?>
                        <h1 class="logo-text">E.J.S.</h1>
                        </div>
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar participante">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

	<?php else: ?>
	
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bienvenidos a la Escuela de Formación Juan Soñador</a>
    </div>
	        <div id="navbar" class="navbar-collapse collapse">
			
			<?php echo $this->Form->create('User', array('class'=>'navbar-form navbar-right')); ?>
			
			<div class="form-group">
			
			<?php echo $this->Form->input('username', array(
														'label'=>false,
														'class'=>'form-control',
														'placeholder'=>'Usuario')); ?>
			</div>

			<div class="form-group">
			<?php echo $this->Form->input('password', array(
														'label'=>false,
														'class'=>'form-control',
														'placeholder'=>'Contraseña')); ?>
			</div>

			<?php echo $this->Form->button('Entrar', array('class'=>'btn btn-success')); ?>

			<?php echo $this->Form->end(); ?>

        </div> <!-- Fin //navbar-collapse -->
    </div> <!-- Fin container -->
</nav> <!-- Fin navbar-inverse -->

	<?php endif ?>