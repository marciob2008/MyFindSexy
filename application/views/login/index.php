<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>
    <?php require_once('./application/views/header.php');?>
    <link href="./bootstrap/css/login.css" rel="stylesheet">
    <link href="./bootstrap/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Login do Usuário</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="true"> Lembre me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" id="redirect">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
  $("#redirect").click(function(){
    url = "http://localhost/MyFindSexy/dashboard";
    $( location ).attr("href", url);
  });
});
</script>