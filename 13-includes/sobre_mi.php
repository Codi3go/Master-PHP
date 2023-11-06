<?php include 'includes/cabecera.php';?>
         <!--Contenido-->
         <div>
             
             <<h2>Esta es la pagina de sobre mi</h2>
             <p>Texto de prueba de la pagina sobre mi</p>
             
         </div>
         
<?php include 'includes/footer.php';?>

         
         
         /*existe tambien el include_once que no permite que se incluya
         de manera repetida ya sea el footer o el cabecero.
         
         tambien esta el require el cual hace lo mismo que el include 
         pero la diferencia es que el include si hay un error permite la
         ejecucion del resto de codigo, pero el require no, muestra
         inmediatamente un error, el require tambien tiene la estructura
         require_one*/
         
         //es mejor ustilizar simepre el require_one