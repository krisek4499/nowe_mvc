<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formularz</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">-->
	<!--<script src="js/jquery-1.11.1.min.js"><script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
     
      
     <div class="row">
  <div class="col-sm-12">

         
<?php
require_once 'controllers/Index.php';


  if($User!="niepoprawny email"&&$User!="wypełnij wszystkie pola"&&$User!="niepoprawny numer telefonu") {?>
                <br><i>Imie: <?= $User[0] -> imie ?></i></br>
                <br><i>Nazwisko: <?= $User[0] -> nazwisko ?></i></br>
                <br><i>Zawód: <?= $User[0] -> zawod ?></i></br>
                <br><i>Numer telefonu: <?=  $User[0] -> nr_telefonu ?></i></br>
                <br><i>Data urodzenia: <?= $User[0] -> data_ur ?></i></br>
                <br><i>Email: <?= $User[0] -> email ?></i></br>
                <form action="delete" method="post">
	       <input type="hidden" name="id" value="<?php echo $User[0] -> id ; ?>" />

	   <input type="submit" class="btn btn-success" name="usun" value="usun" />
        </form>
		
	   <form action="edit" method="post">
	       <input type="hidden" name="id" value="<?php echo $User[0] -> id ; ?>" />

	   <input type="submit" class="btn btn-success" name="edytuj" value="edytuj" />
        </form>
               <!-- <br><i>Imie: <1?= $this -> User[0] -> imie ?></i></br>
                <br><i>Nazwisko: <1?= $this -> User[0] -> nazwisko ?></i></br>
                <br><i>Zawód: <1?= $this -> User[0] -> zawod ?></i></br>
                <br><i>Numer telefonu: <1?= $this -> User[0] -> nr_telefonu ?></i></br>
                <br><i>Data urodzenia: <1?= $this -> User[0] -> data_ur ?></i></br>
                <br><i>Email: <1?= $this -> User[0] -> email ?></i></br>-->


<?php } else{
  ?>
 




<div class="row">
    <div class="col-md-12 text-center">
     <br><br></br><a href="#" class="btn btn-danger btn-sm">
      Błąd: <?= $User ?></a></br>
        <form action="/mvc/Index/news" method="post">
	       <input type="hidden" name="id" value="<?php echo $User ?>" />

	   <input type="submit" class="btn btn-success" name="powrót do formularza" value="powrót do formularza" />
        </form>
    </div>
</div>
<?php }?>
</div>
 </div>
    </div>
</body>

</html>