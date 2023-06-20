<?php include('sesion.php');?>
<?php include("header.php");




?>

<main>


<script src="../js/birdscript.js"></script>
<form  method="post"  class="form_prof">




<h1 class="login-title">Ваш профиль</h1>


<div class="profil_block">
    <div class="block_prof_1">
    <img src="../img/def_bird.png" class="img_status">
    <h3><?php echo $_SESSION['first_name'] ?></h3>
    </div>

    <div class="block_prof">
    <p>Рекорд: <span> <?php echo $_SESSION['score'] ?></span> </p>
    <p>Ваш статус: <span>
         <?php if( $_SESSION['score'] >= 100){
echo"Крутая пташка";
    }else{
        echo"Ну так, дефолт ";
    } 
    
    if(isset($_POST['game_btn'])){
        header("Location: main_game.php");
    }
    ?>
    </span></p>
    <button class="login-button" name ="game_btn"> <a href="main_game.php">Играть</a></button>
    <button class="login-button-logaut"> <a href="logaut.php">Выход</a></button>
  
    </div>
</div>

</form>
</main>

