<?php 
session_start();
include '../NAVBAR/navbarcontroller.php';

    
    $prenom="";
    $nom="";
    $nemail="";
    $npassword="";
    $date="";
    $tele="";
    $age="";
    $sexe="";
    $adress="";



    if(isset($_GET["try"])){
        if($_GET["try"]==1){

        $prenom=$_SESSION["prenom"];
        $nom=$_SESSION["nom"];
        $nemail=$_SESSION["nemail"];
        $npassword=$_SESSION["npassword"];
        $date=$_SESSION["date"];
        $tele=$_SESSION["tele"];
        $age=$_SESSION["age"];
        $adress=$_SESSION["adress"];
        $sexe=$_SESSION["sexe"];



        }
        
        
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>



    <link href="../output.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    

</head>
<style>
    .poppins {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
</style>
<body style=" background-color: white;"class="poppins flex items-center">
<div class="p-1 bg-green-100 " style="">
        <ul id="slidedown" class="flex-row">
            <li class="mt-5 mb-2 text-2xl text-center text-black text-bold">Shop</li>
            <li class="mb-5 text-center text-bold "><span> </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> </span></li>
        </ul>
    </div>
<div class="bg-green-100 p-5">
        <ul id="slidedown" class="flex-rew">
            <li class="text-2xl text-center text-black text-bold mt-5 mb-2">Sign Up</li>
            <li class="mb-5 text-center text-bold "><span>Home </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> Sign up</span></li>
        </ul>
    </div>
    <div class="flex justify-center flex-col items-center mx-auto bg-[rgb(234,245,249)] p-4 rounded-tr-3xl rounded-bl-3xl rounded-br-3xl h-[1395px] mt-[100px] mb-[140px] xl:w-[600px] sm:w-[450px] w-[440px]">
        
        
            <p class="font-bold text-center mt-[40px] mb-[20px] text-[rgb(21,12,107)] text-3xl">Créez votre compte</p>
            <div class="flex justify-center items-center ">
                <button class="xl:w-[500px] sm:w-[360px] w-[300px] hover:bg-[rgb(80,72,153)] border-[2px] rounded-3xl border-[rgb(36,134,199)] h-[48px] text-[rgb(36,134,199)] mt-[20px]" onclick="signup()">
                    Vous avez déjà un compte ? Connectez-vous !
                </button>
            </div>
            <form method="post" action="signController.php">

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px] ">Prénom <span class="text-red-500">*</span></p>
                <input pattern="^[a-zA-Z0-9]{3,20}$" value="<?=$prenom?>" name="prenom" type="text" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]" required>
            </div>
            <p class="text-[rgb(21,12,107)] mt-[4px] ml-[35px] text-[14px]">il ne doit contenir que des alphabets et chiffres de 3 a 20</p>


            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Nom <span class="text-red-500">*</span></p>
                <input pattern="^[a-zA-Z0-9]{3,20}$" value="<?=$nom?>" name="nom" type="text" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]" required>
            </div>
            <p class="text-[rgb(21,12,107)] mt-[4px] ml-[35px] text-[14px]">il ne doit contenir que des alphabets et chiffres de 3 a 20</p>


            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Email <span class="text-red-500">*</span></p>
                <input value="<?=$nemail?>" name="nemail" type="email" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]" required>
            </div>


            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Mot de passe <span class="text-red-500">*</span></p>
                <input pattern="^.{3,10}$" value="<?=$npassword?>" name="npassword" type="password" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]" required>
            </div>
            <p class="text-[rgb(21,12,107)] mt-[4px] ml-[35px] text-[14px]">chiffres de 3 a 10</p>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Sex</p>
                <input pattern="^[MF]{1}$" value="<?=$sexe?>" name="sexe" type="text" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]">
            </div>
            <p class="text-[rgb(21,12,107)] mt-[4px] ml-[35px] text-[14px]">M ou F</p>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">age <span class="text-red-500">*</span></p>
                <input pattern="^[0-9]{2}$" value="<?=$age?>" name="age" type="text" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]" required>
            </div>
            <p class="text-[rgb(21,12,107)] mt-[4px] ml-[35px] text-[14px]">2 Numéro</p>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Adress <span class="text-red-500">*</span></p>
                <input pattern="^[a-zA-Z0-9\s]{1,35}$" value="<?=$adress?>" name="adress" type="text" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]" required>
            </div>
            <p class="text-[rgb(21,12,107)] mt-[4px] ml-[35px] text-[14px]">35 charachter au max</p>


            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Date de naissance <span class="text-red-500">*</span></p>
                <input pattern="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" value="<?=$date?>" name="date" type="text" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]" placeholder="dd/mm/yyyy" required>

            </div>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Télephone <span class="text-red-500">*</span></p>
                <input pattern="^[0-9]{10}$" value="<?=$tele?>" name="tele" type="tel" class="bg-white text-black rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto px-[10px]" required>
            </div>
            <p class="text-[rgb(21,12,107)] mt-[4px] ml-[35px] text-[14px]">il doit etre 10 numero</p>


            <?php


            if(isset($_GET["x"])){
                echo '<p class="text-[rgb(255,0,0)] mt-[20px] font-bold ml-[35px]">'.$_SESSION["invalid"].'</p>';

        }

            ?>
            


            <div class="text-right">
                <button type="submit" class="bg-[rgb(39,197,143)] text-white h-[47px] w-[140px] rounded-tl-3xl rounded-br-3xl rounded-bl-3xl mt-[20px] mr-[30px] text-lg mx-auto">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>

    <script>

        function signup() {
            window.location.href = "login.php";

        }
        
    </script>
</body>
</html>

<?php 
    include '../Footer/Footerview.php';
?>
