<?php

//La Clase es el molde que se utiliza para crear los objeto
//La Clase debe contener unas propiedades que definimos
//La Clase debe tener una funcion con la cual llamaremos los datos posteriormente.
//El nombre de una clase siempre empieza en mayuscula

class Book {
    //Propiedades, caracteristicas del objeto
   
    //Métodos
    
public function __construct(  //Usaremos el cosntructor solo con las propiedades
    public string $autor,
    public string $titulo,
    public float $precio,
    public int $stock,
    public int $id        
        
)
   {
        //echo "Aqui se podria ejecutar este codigo o dejarse vacio";
    }
}

//Instancia significa crear un nuevo objeto
$book1 = new Book(
        'Gabriel Garcia Marquez',
        'Cien años de soledad',
        '150000',
        '25',
        '1'
);

//var_dump($book1);

echo $book1->titulo
?>