<div class="row my-5 justify-content-center">
    <div class="col col-md-5">
         <h1 class="text-center mb-5 fw-bold text-decoration-underline fst-italic">Iniciar Sessión</h1>

         <div>
            <?= (new Alerta())->get_alertas(); ?>
         </div>

         <form class="row g-3" action="actions/auth_login.php" method="POST">
                <div class="col-12 mb-3 text-center">
                    <label for="username" class="form-label fw-bold fs-4 fst-italic">Nombre de Usuario</label>
                    <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="username" name="username" required>
                </div>

                <div class="col-12 mb-3 text-center">
                    <label for="pass" class="form-label form-label fw-bold fs-4 fst-italic">Password</label>
                    <input type="password" class="form-control border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="pass" name="pass" required>
                </div>
                
                <div class="text-center">
                <button type="submit" class="btn btn-info btn-lg fw-bold mx-auto border border-dark border-2 rounded-pill shadow-sm">Login</button>
                </div>
               
         </form>

    </div>

</div>