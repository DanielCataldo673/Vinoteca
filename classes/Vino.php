<?php

class Vino {
    protected $id;
    protected $titulo;
    protected $marca;
    protected $cosecha;
    protected $caracteristicas;
    protected $alcohol;
    protected $acidez_total;
    protected $azucar_residual;
    protected $imagen;
    protected $precio;
    protected $variedad;

    protected $createValues= ['id', 'titulo', 'marca',
      'cosecha', 'caracteristicas', 'alcohol', 'acidez_total', 'azucar_residual', 'imagen', 'precio'];
      
      /* Metodo Para Insertar un nuevo vino a la BD */

public function insert($titulo,$marca,$cosecha,$caracteristicas,$alcohol,$acidez_total,$azucar_residual,$imagen,$precio,$variedad_id){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO vinos VALUES (NULL,:titulo,:marca,:cosecha,:caracteristicas,:alcohol,:acidez_total,:azucar_residual,:imagen,:precio,:variedad_id)";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'titulo' => $titulo,
        'marca' => $marca,
        'cosecha' => $cosecha,
        'caracteristicas' => $caracteristicas,
        'alcohol' => $alcohol,
        'acidez_total' => $acidez_total,
        'azucar_residual' => $azucar_residual,
        'imagen' => $imagen,
        'precio' => $precio,
        'variedad_id' => $variedad_id,

        ]
        );
}
       
       /* editar vino */

public function edit($titulo,$marca,$cosecha,$caracteristicas,$alcohol,$acidez_total,$azucar_residual,$precio,$variedad_id,$id){

    
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE vinos SET
        titulo = :titulo,
        marca = :marca,
        cosecha = :cosecha,
        caracteristicas = :caracteristicas,
        alcohol = :alcohol,
        acidez_total = :acidez_total,
        azucar_residual = :azucar_residual,
        precio = :precio,
        variedad_id = :variedad_id
         WHERE id = :id ";



    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,    
        'titulo' => $titulo,
        'marca' => $marca,
        'cosecha' => $cosecha,
        'caracteristicas' => $caracteristicas,
        'alcohol' => $alcohol,
        'acidez_total' => $acidez_total,
        'azucar_residual' => $azucar_residual,
        'precio' => $precio,
        'variedad_id' => $variedad_id,


        ]
        );

            

}


/* Remplazar Imagen */

public function reemplazar_imagen($imagen,$id){
    $conexion = (new Conexion())->getConexion();
    $query = "UPDATE vinos SET imagen = :imagen WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'imagen' => $imagen,
        
        
        ]
        );


   }

    /* Eliminar vino */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM vinos WHERE id = ?";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute([$this->id]);



}





      /* Devuelve es una instancia del objeto vino, con todas sus propiedades */
      public function createVino($vinoData) : Vino {

        $vino = new self();
  /* primero, por cada valor en nuestro array de valores, buscamos el valor correspondiente y se lo asignamos a la propiedad */

        foreach ($this->createValues as $value) {
            $vino->{$value} = $vinoData[$value];
        }
      
     /* Variedad */

     $vino->variedad = (new Variedad())->get_x_id($vinoData['variedad_id']);

     return $vino;


}
    //Metodo
    //Devuele catalogo Completo

    public function catalogo_completo() : array {
        $catalogo = [];

        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM vinos";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

        $PDOStatement->execute();

        while($result = $PDOStatement->fetch()){
            $catalogo[] = $this->createVino($result);
        }

        return $catalogo;
    }

        //Devuelve el catalogo de productos de una variedad en particular

        public function catalogo_x_variedad(int $variedad_id) : array {
            $catalogo = [];
    
            //llamamos a la conexion
            $conexion = (new Conexion())->getConexion();
    
            $query = "SELECT * FROM vinos WHERE variedad_id= ?";
    
            $PDOStatement = $conexion->prepare($query);
    
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
    
            $PDOStatement->execute(
                [$variedad_id]
            );
    
            while($result = $PDOStatement->fetch()){
                $catalogo[] = $this->createVino($result);
            }
    
    
            return $catalogo;
        



}

//Devuelve los datos de un producto en particular

public function producto_x_id(int $idProducto) : ?Vino {
    

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM vinos WHERE id = :idProducto";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

    $PDOStatement->execute(
        [
            'idProducto' => $idProducto
        ]
    );

    $result = $this->createVino($PDOStatement->fetch());

    if (!$result) {
        return null;
    }

    return $result;


}

//Precio formateado

public function precio_formateado(){
    return number_format($this->precio, 2, ",", ".");
}

/* Metodo bajada reducida */
public function bajada_reducida(int $cantidad = 10): string
{
    $texto = $this->caracteristicas;

    $array = explode(" ", $texto);
    if (count($array) <= $cantidad) {
        $resultado = $texto;
    } else {
        array_splice($array, $cantidad);
        $resultado = implode(" ", $array) . "...";
    }

    return $resultado;
}

/* Traer los nombres de cada clase sin usar JOIN (con los metodos) */

    public function nombre_completo() {
        return $this->getVariedad()->getNombre();
    }

//Metodo buscar

public function buscarVinos($keywords){
    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();
    //Creamos una variable con comodines para buscar coincidencias
    $keywords = '%' . $keywords . '%';
 
    //llamamos a las query
    $query = "SELECT * FROM vinos where marca LIKE :keywords ";
 
    //preparamos la consulta
    $PDOStatement = $conexion->prepare($query);
 
    //preparamos la busqueda con BINDPARAM
    $PDOStatement->bindParam(':keywords', $keywords, PDO::PARAM_STR);
 
    //executamos
    $PDOStatement->execute();
 
    
    $resultados = $PDOStatement->fetchAll(PDO::FETCH_CLASS, self::class);
 
    return $resultados;
 
    
 
 }
   

    /* GETTER */

    public function getVariedad() :Variedad
   {
        return $this->variedad;
    }

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Get the value of cosecha
     */ 
    public function getCosecha()
    {
        return $this->cosecha;
    }

    /**
     * Get the value of caracteristicas
     */ 
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Get the value of alcohol
     */ 
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * Get the value of acidez_total
     */ 
    public function getAcidez_total()
    {
        return $this->acidez_total;
    }

    /**
     * Get the value of azucar_residual
     */ 
    public function getAzucar_residual()
    {
        return $this->azucar_residual;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

   


    /**
     * Set the value of caracteristicas
     *
     * @return  self
     */ 
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }
}




?>