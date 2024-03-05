<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EducaPlus</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h2>EducaPlus</h2>
              </div>
			 
			 
			 <center>
                            <div class="btn-group justify-content-center" role="group" aria-label="Basic example">
                            <a href="loginAlumno.html" class="btn btn-secondary">
                                <img src="img/usuario.png" alt="Part" class="rounded-circle" style="width: 30px; height: 30px;">           
                            </a>
                            <a href="loginDocente.html" class="btn btn-secondary">
                                <img src="img/usuario.png" alt="Part" class="rounded-circle" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </center> 
					
		     <!-- BOTONES -->
              <div class="heading">
			  

                <h2>Bienvenido</h2>
				<h3>Docente</h3>
                <!-- <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a> -->
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Usuario</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Contraseña</label>
                </div>

               <a href="seleccionMaterias.html" class="sign-btn">
                    <input type="submit" value="Iniciar sesión" class="sign-btn" />
                </a>


               </div>
            </form>

            
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/image1.png" class="image img-1 show" alt="" />
              <img src="./img/image2.png" class="image img-2" alt="" />
              <img src="./img/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <!-- <div class="text-group">
                  <h2>Create your own courses</h2>
                  <h2>Customize as you like</h2>
                  <h3>Con los mejores profesores a tu disposición</h3>
                </div> -->
              </div>

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

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>
