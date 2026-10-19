<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Anos de idade</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5 text-center">
    <h5>Quantos anos você vai fazer? </h5>
      <form action = "<?=$_SERVER['PHP_SELF']?>" method="get">
  <label>Informe o ano atual</label><br>
  <input type="number" name="anoAt" value="<?=$anoAt?>"> <br> 
    <label>Informe o seu ano de nascimento</label><br>
  <input type="number" name="anoNas" value="<?=$anoNas?>"> <br> 
  <input type="submit" class="btn btn-danger text-light mt-2 mb-4"> 
    </form>

        <div class="container mt-3"></div>
<?php 
$anoAt = $_GET['anoAt'] ?? 0; 
$anoNas = $_GET['anoNas'] ?? 0; 

$idade = $anoAt - $anoNas; 
echo "<p>Você vai fazer $idade anos em $anoAt .</p>;"
?> 
</div>
    </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
