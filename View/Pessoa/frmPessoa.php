<!DOCTYPE html>
<html lang="pt-br">
<head></head>
<body>

<form class="form-horizontal" action="/pessoa/form/save" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Pessoas</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nome">Nome:</label>  
  <div class="col-md-4">
  <input id="Nome" name="Nome" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CPF">CPF:</label>  
  <div class="col-md-4">
  <input id="CPF" name="CPF" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nascimento">Data Nascimento:</label>  
  <div class="col-md-4">
  <input id="Nascimento" name="Nascimento" type="date" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email:</label>  
  <div class="col-md-4">
  <input id="Email" name="Email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefone">Telefone:</label>  
  <div class="col-md-4">
  <input id="Telefone" name="Telefone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Endereco">Endereço:</label>  
  <div class="col-md-4">
  <input id="Endereco" name="Endereco" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<button type="submit">Enviar</button>
</fieldset>
</form>

</body>
</html>
