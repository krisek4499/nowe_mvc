<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formularz</title>
  <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<!--<script src="js/jquery-1.11.1.min.js"><script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
     
      
     <div class="row">
  <div class="col-sm-12">

<?php  if($User){
  echo '<form action="/mvc/Index/Update" method="post">

     <input type="hidden" name="id" value="'.$User[0]->id.'" />
         imie:<br />
     <input type="text" name="imie"
       value="'.$User[0]->imie.'" /><br />
       nazwisko:<br />
     <input type="text" name="nazwisko"
       value="'.$User[0]->nazwisko.'" /><br />
       zawod:<br />
     <input type="text" name="zawod"
       value="'.$User[0]->zawod.'" /><br />
       numer telefonu:<br />
     <input type="text" name="nr_telefonu"
       value="'.$User[0]->nr_telefonu.'" /><br />
       data urodzenia:<br />
     <input type="date" name="data_ur"
       value="'.$User[0]->data_ur.'" /><br />
       email:<br/>
     <input type="text" name="email"
       value="'.$User[0]->email.'" /><br />
       
     <input type="submit" class="btn btn-success" value="popraw" />
         </form>';}
    else {
           echo '<form action="/mvc/Index/" method="post">

          <input type="submit" class="btn btn-success" value="powrót do formularza" />
              </form>';
         }
   ?>
    

  




</div>
 </div>
    </div>
</body>

</html>