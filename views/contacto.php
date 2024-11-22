   <!--UBICACION-->

   <div class="  d-flex flex-column justify-content-center align-items-center  mt-3">
     <header>
       <h1 class="text-center text-decoration-underline fst-italic">Ubicación</h1>
     </header>
     <main>
       <iframe class="rounded-5 border border-dark border-2 mt-4" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d212225.57639116113!2d-69.1841651!3d-33.7858621!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967c163807edf24f%3A0xd6f143d49784e077!2sZuccardi%20-%20Valle%20de%20Uco!5e0!3m2!1ses-419!2sar!4v1687099067296!5m2!1ses-419!2sar" width="600px" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
   <div class=" d-flex flex-column justify-content-center align-items-center  mt-2">
     <p class="text-center text-decoration-underline fst-italic fs-6">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
         <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
       </svg> Costa Canal Uco s/n - Paraje Altamira, San Carlos, Mendoza!
     </p>
   </div>
   <!-- FORMULARIO -->
   <button type="button" class="btn btn-outline-dark btn-lg mt-3 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
     <h3 class="text-center fst-italic">
       Contacto</h3>
   </button>

   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content" style="background-color: #FDFDBD;">
         <div class="modal-header mx-auto d-block">
           <h1 class="text-center text-decoration-underline fst-italic">CONTACTO</h1>
         </div>
         <div class="modal-body">
           <form class="mt-3" action="gracias.php" method="POST">
             <div class="mb-3 text-center">
               <label for="nombre" class="col-form-label fw-bold fs-5 fst-italic">Nombre</label>
               <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" name="nombre" id="nombre" placeholder="Ingrese-su-nombre" aria-label="Ingrese-su-nombre" aria-describedby="basic-addon2" required>
             </div>
             <div class="mb-3 text-center">
               <label for="apellido" class="col-form-label fw-bold fs-5 fst-italic">Apellido</label>
               <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" name="apellido" id="apellido" placeholder="Ingrese-su-apellido" aria-label="Ingrese-su-apellido" aria-describedby="basic-addon2" required>
             </div>
             <div class="mb-3 text-center">
               <label for="mail" class="col-form-label fw-bold fs-5 fst-italic">E-mail</label>
               <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" name="mail" id="mail" placeholder="Ingrese-su-e-mail" aria-label="Ingrese su e-mail" aria-describedby="basic-addon2" required>
             </div>
             <div class="mb-3 text-center">
               <label for="telefono" class="col-form-label fw-bold fs-5 fst-italic">Telefono</label>
               <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" name="telefono" id="telefono" placeholder="Ingrese-su-telefono" aria-label="Ingrese-su-telefono" aria-describedby="basic-addon2" required>
             </div>
             <div class="mb-3 text-center">
               <label for="mensaje" class="col-form-label fw-bold fs-5 fst-italic">Mensaje</label>
               <textarea class="form-control border border-dark border-2 rounded-pill shadow-lg" name="mensaje" id="mensaje"></textarea>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center  mt-1"><input class="bg-dark text-white border border-dark border-2 rounded-pill shadow-lg" type="submit" value="Enviar">
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
   </main>

   <!-- Offcanvas barras laterales, Parte inferior de lona ocultas en su proyecto para navegación -->
   <button class="btn btn-outline-light mx-auto d-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><img class="btn btn-outline-light " height="130px" width="130px" src="img/copa3.webp"></button>
   <div class="offcanvas offcanvas-bottom bg-black " tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
     <div class="offcanvas-header ">
       <h3 class="offcanvas-title text-white" id="offcanvasBottomLabel"><i class="fa-solid fa-trophy" style="color: #fff;"></i> Vinos en Venta</h3>
       <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body small">
       <!-- Migaja de pan o breadcrumb -->
       <div class=" d-flex justify-content-center p-2">
         <nav aria-label="breadcrumb">
           <ol class="breadcrumb text-white">
             <li class="breadcrumb-item fst-italic"><a href="index.php?sec=vinos&pj=1" class="link-white fs-3 text-white"><i class="fa-solid fa-trophy" style="color: #fff;"></i> Vinos de región</a></li>
             <li class="breadcrumb-item fst-italic"><a href="index.php?sec=vinos&pj=2" class="link-white fs-3 text-white"><i class="fa-solid fa-trophy" style="color: #fff;"></i>Vinos de Pueblo</a></li>
             <li class="breadcrumb-item fst-italic"><a href="index.php?sec=vinos&pj=3" class="link-white fs-3 text-white"><i class="fa-solid fa-trophy" style="color: #fff;"></i> Vinos de Finca</a></li>
             <li class="breadcrumb-item fst-italic"><a href="index.php?sec=vinos&pj=4" class="link-white fs-3 text-white"> Ofertas</a></li>
             <br>
             <div class="d-flex justify-content-end">

               <img height="100px" width="200px" src="img/fondos2.webp">
             </div>

           </ol>
         </nav>

       </div>

     </div>
   </div>