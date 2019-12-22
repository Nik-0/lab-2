<?php
session_start();
if ($_SESSION['name'] == null)
{
    header("Location:/index.php");
}
?>
<html>
    <head>
        <link  rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Молодец зашел</title>
    </head>
    <body>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <div class="container">
                     <div class="row">
                        <form  method="POST" action="len.php">
                         <div class="form-group " style="margin-left: 55px;" >
                            <select name="language" required class="form-control" >
                               <option value="">Выберите язык</option>
                               <option value="ru"> Русский язык</option>
                               <option value="en"> English</option>
                               <option value="ua"> Український мова</option>
                              <option value="it"> Italian</option>
                            </select>
                           <button type="submit" class="btn btn-outline-primary btn-block">Выберите язык</button>
                         </div>
                        </form>
                     </div>  
                </div>
    </body>
</html>