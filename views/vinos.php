   
<?php
  

  $id_variedad = $_GET['pj'] ?? False;
  
  $miObjetoVino = new Vino();
  
  $productos = $miObjetoVino->catalogo_x_variedad($id_variedad);
  
  $variedad = (new Variedad())->get_x_id($id_variedad);

  ?>
  
  
  <h1 class="text-center my-5 text-decoration-underline fst-italic">Vinos en venta / <?= $variedad->getNombre() ; ?>  </h1>
  <div class="row">
  
  <?PHP if (count($productos)) { ?>
      <?PHP foreach ($productos as $vino) { ?>
        
          <div class="col-3" >
              <div class="card mb-3 border border-dark border-2 shadow-lg" >
                  <img src="img/<?= $vino->getImagen() ; ?>" class="card-img-top" style="height: 330px;" alt="" >
                  <div class="card-body">
                      <p class="fs-5 m-0 fw-bold text-center text-decoration-underline fst-italic"><?= $vino->nombre_completo() ; ?></p>
                      
                      <p class="card-text" style="height: 50px;">
                        <?= rtrim(substr($vino->getCaracteristicas(), 0, 40)) . (strlen($vino->getCaracteristicas()) > 40 ? '...' : '') ?>
                      </p>
                  </div>
                  <div>
                  <ul class="list-group list-group-flush" style="height: 50px;">
                      <li class="list-group-item"> <?= $vino->getMarca() ; ?></li>
                  </ul>
                  </div> 
                  <div class="card-body">
                      <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= $vino->precio_formateado() ; ?></div>
                      <a href="index.php?sec=vino&id=<?= $vino->getId() ; ?>" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                  </div>
  
              </div>
          </div>
      <?PHP } ?>
  
      <?PHP }else{ ?>
    <div class="col">
    <h2 class="text-center mb-5">No se encontraron productos.</h2>
</div>
<?PHP } ?>