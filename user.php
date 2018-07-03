<?php 

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\PageUser;
use \Hcode\PageUser2;
use Hcode\Model\User;
use Hcode\Model\Empresa;
use Hcode\Model\Visita;
use Hcode\Model\Sindicato;
use Hcode\Model\Casa;







$app->get('/user', function() {  
     
    User::verifyLoginUser();

    $page = new PageUser();
    $page->setTpl("index");

});





$app->get('/user/solicitations', function() {  
                          
      User::verifyLoginUser();
      $solicitations = User::listAllSolicitationsUser($_SESSION['origem']);

      $page = new PageUser();   
      $page->setTpl("solicitations", array("solicitations"=>$solicitations));
});

$app->get('/user/demandas', function() {  
                          
      User::verifyLoginUser();
      $demandas = User::listAllDemandas($_SESSION['origem']);

      $page = new PageUser();   
      $page->setTpl("list-demandas", array("demandas"=>$demandas));
});

$app->get('/user/demanda/:idDemanda/delete', function($idDemanda) {  
                          
      User::verifyLoginUser();
      User::deleteDemanda($idDemanda);
      header("Location: /user/demandas");
      exit;
});



$app->get('/user/solicitations/:iduser/aprove', function($iduser) {  
                          
      User::verifyLoginUser();
      $dadosUser = User::getCadastro($iduser);

    if($dadosUser[0]['origem'] == $_SESSION['origem']){

      User::aproveSolicitation($dadosUser[0]);
      header("Location: /user/solicitations");
      exit;

    }else{
        throw new \Exception('Pare de tentar burlar a desgraça',89);
    }

      
});


$app->get('/user/solicitations/:iduser/recuse', function($iduser) {  
                          
      User::verifyLoginUser();
      $dadosUser = User::getCadastro($iduser);

    if($dadosUser[0]['origem'] == $_SESSION['origem']){

      User::recuseSolicitation($dadosUser[0]);
      header("Location: /user/solicitations");
      exit;

    }else{
        throw new \Exception('Pare de tentar burlar a desgraça',89);
    }

      
});




$app->get('/user/solicitations-info/:iduser', function($iduser) {  
                          
      User::verifyLoginUser();
      $user = User::getCadastro($iduser);
      
      if($user[0]['origem'] == $_SESSION['origem']){

        $page = new PageUser();   
        $page->setTpl("solicitationsinfo", array("user"=>$user[0])); 

      }else{
         throw new Exception('Tentativa de acesso recusada', 8);
      }

      
});


$app->get('/user/edit-profile', function() {  
                          
      User::verifyLoginUser();
      $user = User::loadById($_SESSION['idFuncionario']);                         
      $page = new PageUser();   
      $page->setTpl("edit-profile", array("user"=>$user[0]));
});





$app->post('/user/edit-profile', function() {  
                          
      User::verifyLoginUser();
      User::editProfile($_POST, $_SESSION['idFuncionario']);
    
});



$app->get('/user/alter-password', function() {  
                          
      User::verifyLoginUser();                       
      $page = new PageUser();   
      $page->setTpl("alter-password");
});

$app->post('/user/alter-password', function() {  
                          
      User::verifyLoginUser();
      User::alterPassword($_SESSION['idFuncionario'], $_POST);
      header("Location:/user");
      exit;                       
});

$app->get('/user/empresa-create', function() {  
                          
      User::verifyLoginUser(); 
      $cidades = Empresa::listCidades();
      $sindicatos = User::listSindicatos(); 

      $page = new PageUser();   
      $page->setTpl("empresa-create-new", array("cidades"=>$cidades, "sindicatos"=>$sindicatos));
});

$app->post('/user/empresa-create', function() {  
                          
      User::verifyLoginUser();                       
      Empresa::saveEmpresa($_POST);
      header("Location:/user/empresas/origem");
      exit;

});

$app->get("/user/empresas", function(){

    User::verifyLoginUser();
    $empresas = Empresa::listAll();
    $page = new PageUser();   
    $page->setTpl("list-empresas", array("empresas"=>$empresas));

});

$app->get("/user/empresas/origem", function(){

    $origem = $_SESSION['origem'];

    User::verifyLoginUser();
    $empresas = Empresa::listAllOrigem($origem);
    $page = new PageUser();   
    $page->setTpl("list-empresas", array("empresas"=>$empresas));
    

});


$app->get("/user/empresas/:idempresa", function($idempresa){

    User::verifyLoginUser();
    $empresa = Empresa::getFuncEmpresaSind($idempresa);
    $page = new PageUser();   
    $page->setTpl("empresa-info-new", array("empresa"=>$empresa[0],"origem"=>$_SESSION));

});




$app->get("/user/agendarvisita/:idempresa", function($idempresa){

    User::verifyLoginUser();
    $empresa = Empresa::getFuncEmpresaSind($idempresa);
    $sindicatos = User::listSindicatos();
    $cidades = Empresa::listCidades();
    $page = new PageUser();   
    $page->setTpl("agendavisita-create", array("empresa"=>$empresa[0], "sindicatos"=>$sindicatos, "cidades"=>$cidades,"origem"=>$_SESSION));

});


$app->post("/user/agendarvisita/:idempresa", function($idempresa){

    User::verifyLoginUser();
    Visita::SaveVisitaEmp($_POST);
    header("Location: /user/visitas");
    exit;

});

$app->get("/user/visitas", function(){

User::verifyLoginUser();
$visitas = Visita::listAll();

$page = new PageUser();
$page->setTpl("list-visitas", array("visitas"=>$visitas));

});

$app->get("/user/empresa/:idempresa/delete", function($idempresa){

      User::verifyLoginUser();
      
     if(Empresa::removeEmpresa($idempresa)){
      header("Location: /user/empresas");
      exit;
     };


});


$app->get("/user/visita/create", function(){

      User::verifyLoginUser();
      $sindicatos = User::listSindicatos();
      $cidades = Empresa::listCidades();

      $page = new PageUser();
      $page->setTpl("visita-create", array("sindicatos"=>$sindicatos, "cidades"=>$cidades,"origem"=>$_SESSION));



});

$app->post("/user/visita/create", function(){

      User::verifyLoginUser();
      Visita::SaveVisitaEmp2($_POST);
      header("Location: /user/origem/visitas");
      exit;


});


$app->get("/user/visitas-info/:idvisita", function($idvisita){

      User::verifyLoginUser();

      $visita = Visita::getVisita($idvisita);


      $page = new PageUser();
      $page->setTpl("visita-info", array("visita"=>$visita[0],"origem"=>$_SESSION));

});

$app->get("/user/edit-visita/:idvisita", function($idvisita){

      User::verifyLoginUser();
      $visita = Visita::getVisita($idvisita);
      $sindicatos = User::listSindicatos();


      $page = new PageUser();
      $page->setTpl("visita-edit", array("visita"=>$visita[0],"origem"=>$_SESSION, "sindicatos"=>$sindicatos));

});

$app->post("/user/edit-visita/:idvisita", function($idvisita){

     User::verifyLoginUser();
     if(Visita::atualizaVisita($_POST)){
       $idvisita = $_POST['idVisita'];
      
      echo "<script> alert('Visita Alterada com Sucesso'); javascript:history.back(); </script>";
      
      exit;

     };
  });


 $app->get("/user/finalize-visita/:idvisita", function($idvisita){

      User::verifyLoginUser();
      $visita = Visita::getVisita($idvisita);
      $sindicatos = User::listSindicatos();

      $page = new PageUser();
      $page->setTpl("finalize-visita01", array("visita"=>$visita[0],"origem"=>$_SESSION, "sindicatos"=>$sindicatos));
    

});


 $app->post("/user/finalize-visita/:idvisita", function($idvisita){

      User::verifyLoginUser();
      $visita = Visita::getVisita($idvisita);
      $sindicatos = User::listSindicatos();
      Visita::finalizeVisita($_POST);
      header("Location: /user/visitas-info/$idvisita");
      exit;
      
    

});



$app->get("/user/origem/visitas", function(){

  $origem = $_SESSION['origem'];

    User::verifyLoginUser();
    $visitas = Visita::listAllOrigem($origem);

    $page = new PageUser();
    $page->setTpl("list-visitas", array("visitas"=>$visitas));

});

 $app->get("/user/relatorio-sindicato/", function(){

      User::verifyLoginUser();
     $nome = $_SESSION['origem']; //Sindicato::getNomeSindicato($idSindicato);

     $dadosSindicato = ['nome_sindicato'=>$nome];

     $dadosEmpresas = Sindicato::contEmpresas($nome);
     $dadosVisitas = Sindicato::contVisitas($nome);



      
      $page = new PageUser();
      $page->setTpl("sind-relat1", array("dadosSindicato"=>$dadosSindicato,
                                         "dadosEmpresas"=>$dadosEmpresas[0],
                                         "dadosVisitas"=>$dadosVisitas[0]));

      

});

 

  $app->get("/user/relatorio-casa/", function(){

      User::verifyLoginUser();
      $nome =  $_SESSION['origem'];
      
      $dadosCasa = ['nome_casa'=>$nome];
      

      $dadosEmpresas = Casa::contEmpresas($nome);
      $dadosVisitas = Casa::contVisitas($nome);

   
      $page = new PageUser();
      $page->setTpl("casa-relat", array("dadosCasa"=>$dadosCasa, 
                                        "dadosEmpresas"=>$dadosEmpresas[0],
                                        "dadosVisitas"=>$dadosVisitas[0]));
    

}); 
