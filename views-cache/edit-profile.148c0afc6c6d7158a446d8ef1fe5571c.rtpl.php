<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header" style="margin-bottom:25px;">
  <h1>
   
  </h1>
  <ol class="breadcrumb">
    <button class="btn btn-xs"><li><a href="/user2"><i class="fa fa-home"></i> Início</a></li></button>
    <button class="btn btn-xs"><li class="active"><a href="/user2/edit-profile">Editar perfil</a></li></button>
  </ol>
</section>

<!-- Main content -->
<section class="content">
 
  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border ">
         <div class="col-md-12"> 
          <h3 class="box-title" style="vertical-align: middle; margin-right:-25px;" >EDITAR PERFIL</h3>
          <a href="javascript:history.back()" style="margin-left: 62px;"><button type="button" class="btn btn-link navbar-right"><b>Voltar</b></button></a>
         </div> 
        </div>
        <!-- /.box-header -->
      
        <!-- form start -->
        <form role="form" action="/user2/edit-profile" method="post">
          <div class="box-body">

            <div class="form-group">
              <label for="desperson">Nome: *</label>
              <input type="text" class="form-control" id="desperson" name="cNome" placeholder="Digite o nome" value="<?php echo htmlspecialchars( $user["nome_func"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" maxlength="25" required>
            </div>

             <div class="form-group">
              <label for="cRg">CPF:</label>
              <input type="text" class="form-control" id="cRg" name="cRg" placeholder="" value="<?php echo htmlspecialchars( $user["cpf_func"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
            </div>
            

            <div class="form-group">
              <label for="cCargo">Cargo: *</label>
              <input type="text" class="form-control" id="cCargo" name="cCargo" placeholder="Ex: Agente/Executivo" value="<?php echo htmlspecialchars( $user["cargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" maxlength="25" required>
            </div>

            <div class="form-group">
              <label for="cOrigem">Origem</label>
              <input type="text" class="form-control" id="desemail" name="cOrigem" placeholder="Digite o e-mail" value="<?php echo htmlspecialchars( $user["origem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
            </div>



            <div class="form-group">
              <label for="desemail">E-mail: *</label>
              <input type="email" class="form-control" id="desemail" name="cEmail" placeholder="Digite o e-mail" maxlength="43" value="<?php echo htmlspecialchars( $user["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
            </div>


            <div class="form-group">
              <label for="nrphone">Telefone:</label>
              <input type="tel" class="form-control" id="nrphone" name="cTelefone" placeholder="(DDD) 7777-8888"  value="<?php echo htmlspecialchars( $user["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" maxlength="16">
            </div>

            <div class="form-group">
              <label for="nrphone2">Telefone Alternativo:</label>
              <input type="tel" class="form-control" id="nrphone2" name="cTelefone2" placeholder="(DDD) 7777-8888"  value="<?php echo htmlspecialchars( $user["telefone2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" maxlength="16">
            </div>
           
    
            <div class="form-group">
              <a href="/user2/alter-password"><button type="button" class="btn btn-link"><b>Alterar Senha</b></button></a>
            </div>



          </div>
          <!-- /.box-body -->
          <div class="box-footer">
           <div class="col-md-12"> 
            <a href="javascript:history.back()"><button type="button" class="btn btn-primary"><b>VOLTAR</b></button></a>
            <button type="submit" class="btn btn-link navbar-right" onclick="return confirm('Deseja realmente salvar as alterações no perfil?')"><b>SALVAR</b></button>
           </div> 
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
