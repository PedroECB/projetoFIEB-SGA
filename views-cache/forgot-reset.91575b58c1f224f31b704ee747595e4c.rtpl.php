<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> SGA | Recuperar senha</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../res/site/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../res/site/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../res/site/dist/css/estilo.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com../../resourcespond/1.4.2../../resourcespond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition lockscreen azul">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <img src="../res/site/dist/img/LOGO01BRANCO.png" height="" class="img-responsive"></img>
  </div>
  
   <div class="help-block text-center" style="color:white; font-weight: bolder;">
     Olá <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?>, digite uma nova senha:
    </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">

    <!-- lockscreen credentials (contains the form)  /admin/forgot../../resourceset-->
    <form  action="/forgot/reset" method="post">
      <input type="hidden" name="code" value="<?php echo htmlspecialchars( $code, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
      <div class="input-group">
        <input type="password" class="form-control" placeholder="Digite a nova senha" name="password">
        <div class="input-group-btn">
          <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  
  <div class="lockscreen-footer text-center">
    <b><a href="#" class="text-black">SISTEMA DE GESTÃO ARTICULADA  2018 &copy</a></b><br>
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<script src="../res/site/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../res/site/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
