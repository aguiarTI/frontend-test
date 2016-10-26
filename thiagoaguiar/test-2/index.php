<!doctype html>
<html ng-app>
   <head>
      <meta charset="utf-8">
      <title>Contatos</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/common.css">
   </head>
<body>

   <div class="container" ng-controller="ContactController">
      
      <div class="row">
         <div class="page-header">
            <h1>Cadastro de contatos</h1>
         </div>
      </div>
      
      <div class="row">
         <form class="form" name="formItem">
            <label>
               <input type="text" id="name" ng-model="item.nome" placeholder="Seu nome" onkeypress="return isAlfa(event)" required="true">
            </label>
            <label>
               <input type="tel" id="tel" ng-model="item.telefone" placeholder="(00) 0000-0000" onkeypress="return isNumber(event)" required="true">
            </label>
            <label>               
               <input type="email" id="email" ng-model="item.email" placeholder="exemplo@exemplo.com" required="true">
            </label>
            <label>
               <button class="btn btn-primary" ng-click="addContact()">Salvar</button>
            </label>
            <label>
               <span class="btn btn-danger" onclick="clearForm()">Cancelar</span>
            </label>
         </form>
      </div>

      <div class="row">
         <table id="lista-compras" class="table table-striped">
            <thead>
               <tr>
                  <th>Nome</th>
                  <th>Telefone</th>
                  <th>E-mail</th>
               </tr>
            </thead>
            <tbody>
               <tr ng-repeat="item in items">
                  <td>
                     <strong>{{item.nome}}</strong>
                  </td>
                  <td>{{item.telefone}}</td>
                  <td>{{item.email}}</td>
               </tr>
            </tbody>
         </table>
      </div>

   </div>

   <!-- javascript -->
   <script src="js/jquery-2.1.1.min.js"></script>
   <script src="js/mask.min.js"></script>
   <script src="js/angular-1.0.1.js"></script>
   <script src="js/common.js"></script>
</body>
</html>
