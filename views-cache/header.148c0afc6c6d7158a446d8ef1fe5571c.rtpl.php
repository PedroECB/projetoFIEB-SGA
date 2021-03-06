<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGA | Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../res/user2/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../res/user2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
 <link rel="stylesheet" href="../../res/site/dist/css/estilo.css">
 
  <link rel="shortcut icon" href="../../res/user2/dist/img/teste2.png" type="image/x-icon">
  <link rel="icon" href="../../res/user2/dist/img/teste2.png" type="image/x-icon">
  <link rel="stylesheet" href="../../res/user2/dist/css/skins/skin-azul.css">
  <link rel="stylesheet" href="../../res/user2/dist/css/estilo.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-azul sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/user2" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>GA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SISTEMA</b> FIEB</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button  SINO-->
           <!-- <a href="#" class="sdropdown-toggle" data-toggle="sdropdown" title="Notificações">
              <i class="fa  fa-bell-o"></i>
              <span class="label label-success">0</span>
            </a>-->
            <ul class="dropdown-menu">
              <li class="header">Nenhuma notificação disponível</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="../../res/user2/dist/img/user02.png" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        <?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?> 
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Seja bem vindo ao sistema de gestão articul...</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">Ver todas as mensagens</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
          <!--  
            <a href="#" class="sdropdown-toggle" data-toggle="sdropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
          -->  

            <ul class="dropdown-menu">
              <li class="header">Você tem 0 notificações</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 Solicitações de cadastro pendentes
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver tudo</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->

          <!--  
            <a href="#" class="sdropdown-toggle" data-toggle="sdropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
         -->  
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 notificações</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Status Ciclo
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Completo</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ver todo o progresso</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../../res/user2/dist/img/user02.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../../res/user2/dist/img/user02.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?> 
                  <small><?php echo htmlspecialchars( $cargo, ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $origem, ENT_COMPAT, 'UTF-8', FALSE ); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!--
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>

              -->
                <!-- /.row -->


              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/user2/edit-profile" class="btn btn-default btn-flat">Editar Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="/logout" data-toggle="#"><i class="fa fa-power-off" title="sair"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../res/user2/dist/img/user02.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> 

      -->
      <!-- /.search form -->

  <ul class="sidebar-menu">
        <li class="header" style="background-color:#08375d;"><b style="color:white;"><center>Menu</center></b></li>
        <!-- Optionally, you can add icons to the links -->



       <li class="treeview">
          <a href="#"><i class="fa fa-industry"></i> <span>Empresas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right-container"></i>
            </span>
          </a>
          <!--<ul class="treeview-menu menu-open">
             <li><a href="/user2/empresa-create"><i class="fa fa-plus"></i>Cadastrar</a></li>
             <li><a href="/user2/empresas/origem"><i class="fa fa-dot-circle-o"></i>Empresas <?php echo htmlspecialchars( $origem, ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
            <li><a href="/user2/empresas"> <i class="fa fa-sort-alpha-asc"></i>Listar Todas</a></li>
          </ul>-->
        </li> 

        <!--<li>
          <a href="#"><i class="fa fa-industry"></i> <span>Empresas</span></a>
        </li>
        <ul class="treeview-menu menu-open"><a>Cadastrar</a></ul>

      -->

        
        
            <li><a href="/user2/empresa-create" style="color:#9ba8b2; background-color:#043156;"><i class="fa fa-plus"></i><span>Cadastrar</span></a></li>
            <li><a href="/user2/empresas/origem" style="color:#9ba8b2; background-color:#043156;"><i class="fa fa-dot-circle-o"></i><span>Empresas <?php echo htmlspecialchars( $origem, ENT_COMPAT, 'UTF-8', FALSE ); ?></span></a></li>
            <li><a href="/user2/empresas-ciclo-atual" style="color:#9ba8b2; background-color:#043156;"><i class="fa fa-sort-alpha-asc"></i><span>Empresas ciclo atual</span></a></li>




        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-calendar-o"></i> <span>Visitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/user2/visita/create"><i class="fa fa-calendar-plus-o"></i>Agendar</a></li>
            <li><a href="/user2/origem/visitas"><i class="fa fa-dot-circle-o"></i>Visitas <?php echo htmlspecialchars( $origem, ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
             <li><a href="/user2/visitas"> <i class="fa fa-sort-alpha-asc"></i>Listar Todas</a></li> 
          </ul>
        </li>-->

        <!--<li><a href="/user2/origem/visitas"><i class="fa fa-calendar-o"></i> <span>Visitas</span></a></li>-->

      <!-- <li class="treeview">
          <a href="#"><i class="fa fa-circle-o-notch"></i> <span>Ciclos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-sort-alpha-asc"></i>Listar</a></li>
          </ul>
        </li>
      -->
      <li><a href="/user2/origem/visitas"><i class="fa fa-calendar-o"></i> <span>Visitas</span></a></li>
      
  <li class="treeview">
          <a href="#"><i class="fa fa-pie-chart"></i> <span>Relatórios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <!--<ul class="treeview-menu">

             <?php if( $tp == 'SINDICATO' ){ ?> 
            <li><a href="/user2/relatorio-sindicato/"><i class="fa fa-bar-chart"></i>Relatórios <?php echo htmlspecialchars( $origem, ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
           <?php } ?>

           <?php if( $tp == 'CASA' ){ ?> 
            <li><a href="/user2/relatorio-casa/"><i class="fa fa-bar-chart"></i>Relatórios <?php echo htmlspecialchars( $origem, ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
           <?php } ?>

          </ul> -->
        </li>
        
          <?php if( $tp == 'SINDICATO' ){ ?> 
            <li><a href="/user2/relatorio-sindicato/" style="color:#9ba8b2; background-color:#043156;"><i class="fa fa-bar-chart"></i><span>Relatórios <?php echo htmlspecialchars( $origem, ENT_COMPAT, 'UTF-8', FALSE ); ?></span></a></li>
           <?php } ?>

           <?php if( $tp == 'CASA' ){ ?> 
            <li><a href="/user2/relatorio-casa/" style="color:#9ba8b2; background-color:#043156;"><i class="fa fa-bar-chart"></i><span>Relatórios <?php echo htmlspecialchars( $origem, ENT_COMPAT, 'UTF-8', FALSE ); ?></span></a></li>
           <?php } ?>


           <li><a href="/user2/ciclos-relat/" style="color:#9ba8b2; background-color:#043156;"><i class="fa fa-circle-o-notch"></i><span>Relatórios por Ciclo</span></a></li>

         <!-- <li><a href="/user2/origem/visitas"><i class="fa fa-calendar-o"></i> <span>Contatos</span></a></li> -->

          <li><a href="/user2/contatos"><i class="fa fa-fax"></i> <span>Contatos</span></a></li>
          <li><a href="/user2/help"><i class="fa fa-question-circle"></i> <span>Dúvidas Frequentes</span></a></li>




      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
