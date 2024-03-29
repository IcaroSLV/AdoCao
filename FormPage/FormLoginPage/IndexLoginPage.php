<?php
session_start();
    if(isset($_SESSION['logado'])) {
        if ($_SESSION['logado'] === "2") {
            unset($_SESSION['logado']);
            echo "<script>alert('Email ou Senha inválidos!')
            </script>";
        }
    } else if(isset($_SESSION['cadastrado'])) {
        if ($_SESSION['cadastrado'] === "2") {
            unset($_SESSION['cadastrado']);
            echo "<script>alert('Cadastrado com sucesso!')
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdoCão</title>
    <link rel="stylesheet" href="formPage.css">
    <link rel="shortcut icon"
        href="https://img.freepik.com/vetores-gratis/um-modelo-de-adesivo-de-personagem-de-desenho-animado-de-cachorro_1308-75254.jpg?w=740&t=st=1699276934~exp=1699277534~hmac=bd0606629695c49a70fb9ce700d88d13a25dc6709fbde747e28c6b687dc9b02e"
        type="image/x-icon">
    <script src="FormPage.js"></script>
    <link rel="stylesheet" href="formLoginPage.css">
</head>

<body>
    <div class="boxForm">
        <div class="imgContent" id="imgContainer">
        </div>
        <div class="formContent">
            <form action="../PHP/login.php" method="POST" id="formLogin">
                <div>
                    <h1>ADO<span>C</span>ÃO</h1>
                </div>
                <div>
                    <div>
                        <input type="email" id="emailInput" placeholder="Digite o email" name="emailLogin" required>
                        <p id="emailError">Digite um email válido!</p>
                    </div>
                    <div>
                        <input type="password" id="senhaInput" placeholder="Digite a senha" name="senhaLogin" required>
                        <p id="senhaError">Digite uma senha válida!</p>
                    </div>
                    <div class="linkRegister">
                        <button class="googleLink">
                            <img src="../formImg/googleLogo.png" alt="">
                            <p>Registrar com o google</p>
                        </button>
                        <button class="facebookLink">
                            <img src="../formImg/facebookLogo.png" alt="">
                            <p>Registrar com o facebook</p>
                        </button>
                    </div>
                </div>
                <div class="btnContent">
                    <button type="button" onclick="submitForm()">Entrar</button>
                </div>
            </form>
            <hr>
            <a href="../FormRegisterPage/FormPage.html">Não tem uma conta? Crie uma!<img class="icon" src="../formImg/icon-pata.png"></a>
                <a href="../../index.php"><img class="icon" src="../formImg/seta2-icon.png"><p>Voltar para a página</p><img class="icon" src="../formImg/icon-pata.png"></a>
        </div>
    </div>
    <script>
        (function () {
            let imgList = [
                ["../formImg/sideImg1.jpg", '#8ec5da', '#85C0D5'],
                ['../formImg/sideImg2.jpg', '#D48651', '#D69362'],
                ['../formImg/sideImg3.jpg', '#F7E5BD', '#F5E6CC'],
                ['../formImg/sideImg4.jpg', '#F0B4D5', '#EFC9E1']
            ]

            let randomNumber = Math.floor(Math.random() * imgList.length);
            let randomColor = randomNumber;

            document.getElementById("imgContainer").innerHTML = "<img id=img src='" + imgList[randomNumber][0] + "'>"

            document.documentElement.style.setProperty("--background-color", imgList[randomNumber][1])
            document.documentElement.style.setProperty("--primary-color", imgList[randomNumber][2])

        })()

        function resetStyles() {
            let senhaError = document.getElementById("senhaError");
            let emailError = document.getElementById("emailError");


            senhaError.style.opacity = "0";
            emailError.style.opacity = "0";
        }


        function submitForm() {
            let formulario = document.getElementById("formLogin");


            let senhaError = document.getElementById("senhaError");
            let emailError = document.getElementById("emailError")

            let senhaInput = document.getElementById("senhaInput");
            let emailInput = document.getElementById("emailInput");

            resetStyles();

            if (emailInput.value.trim() == "") {
                emailError.style.opacity = "1"
            }
            if (senhaInput.value.trim() == "") {
                senhaError.style.opacity = "1"
            }


            if (!emailInput.value.trim() == "" && !senhaInput.value.trim() == "") {
                formulario.submit()
            }
        };



    </script>
</body>

</html>