<?php

 class Newsletter {
        protected $id;
        protected $email;
        protected $cumpleanio;
       
        
            
                public function insertarUsuario() {
                    $conexion = (new Conexion())->getConexion();
            
                    $query = "INSERT INTO newsletter (email, cumpleanio) VALUES (?, ?)";
                    $PDOStatement = $conexion->prepare($query);
                    
                    $result = $PDOStatement->execute([
                        $this->getEmail(),
                        $this->getCumpleanio(),
                        
                    ]);
            
                    return $result;
                }
            
            
      


       

       

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of cumpleanio
         */ 
        public function getCumpleanio()
        {
                return $this->cumpleanio;
        }

        /**
         * Set the value of cumpleanio
         *
         * @return  self
         */ 
        public function setCumpleanio($cumpleanio)
        {
                $this->cumpleanio = $cumpleanio;

                return $this;
        }
 
 }

?>