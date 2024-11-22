<div class="row my-5">
    <div class="col">
        <h1 class="text-decoration-underline fst-italic text-center mb-5 fw-bold">Agregar Nueva Variedad</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_variedad_acc.php" method="POST" enctype="multipart/form-data">
                <!-- enctype poder cargar imagenes al servidor -->
            
            <div class="col-md-4 mb-3 text-center  mx-auto">
                <label for="nombre" class="form-label fw-bold fs-2 fst-italic">Nombre</label>
                <input type="text" class="form-control mt-3 border border-dark border-2 rounded-pill shadow-lg text-center fw-bold" id="nombre" name="nombre" required>
            </div>

            
            <div class="text-center">
                <button type="submit" class="btn btn-info btn-lg fw-bold mx-auto border border-dark border-2 rounded-pill shadow-sm">Cargar</button>
                </div>
            </form>
        </div>
    </div>
</div>