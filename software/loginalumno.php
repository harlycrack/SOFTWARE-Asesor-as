<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EducaPlus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <div class="box">
        <div class="inner-box">
            <div class="forms-wrap">
                <form action="menuAlumno.php" method="post" autocomplete="off" class="sign-in-form">
                    <div class="logo">
                        <img src="./img/logo.png" alt="easyclass">
                        <h2>EducaPlus</h2>
                    </div>
                    <div class="heading">
                        <h2>Bienvenido</h2>
                        <h3>Alumno</h3>
                    </div>
                    <div class="actual-form">
                        <div class="input-wrap">
                            <input
                                type="text"
                                name="username"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                required
                            />
                            <label>Número de Control</label>
                        </div>

                        <div class="input-wrap">
                            <input
                                type="password"
                                name="password"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                required
                            />
                            <label>Contraseña</label>
                        </div>

                        <input type="submit" value="Iniciar sesión" class="sign-btn" />
                    </div>
                </form>
            </div>
            <div class="carousel">
                <div class="images-wrapper">
                    <img src="./img/image1.png" class="image img-1 show" alt="">
                    <img src="./img/image2.png" class="image img-2" alt="">
                    <img src="./img/image3.png" class="image img-3" alt="">
                </div>
                <div class="text-slider">
                    <div class="text-wrap"></div>
                    <div class="bullets">
                        <span class="active" data-value="1"></span>
                        <span data-value="2"></span>
                        <span data-value="3"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="app.js"></script>
<form action="menuAlumno.php" method="post" autocomplete="off" class="sign-in-form">
    <div class="input-wrap">
        <input type="text" name="username" minlength="4" class="input-field" autocomplete="off" required />
        <label>Número de Control</label>
    </div>

    <div class="input-wrap">
        <input type="password" name="password" minlength="4" class="input-field" autocomplete="off" required />
        <label>Contraseña</label>
    </div>

    <input type="submit" value="Iniciar sesión" class="sign-btn" />
</form>

</body>
</html>
