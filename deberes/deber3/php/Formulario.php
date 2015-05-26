<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="./Resultado.php" method="POST">
       <p>
         <label>Nombre:</label>
         <input type="text" name="nombre" />
       </p>
       <p>
         <label>Apellido:</label>
         <input type="text" name="apellido" />
       </p>
       <p>
       Genero:</td><br>
     <label>
         <input type="radio" name="genero" id="ref_mascu" value="Masculino" /> 
              Masculino </label>
     <br />
     <label>
            <input type="radio" name="genero" id="ref_feme" value="Femenino" /> 
              Femenino </label>
      <br />
       </p>
       <p>
          <label>Correo electronico:</label>
         <input type="text" name="correo" /> 
       </p>
       <p>
           Cuidad de nacimiento:
           <select name="cuidad" id="ciudad">
                <option selected="selected"></option>
                <option>Quito</option>
                <option>Guayaquil</option>
                <option>Cuenca</option>
                <option>Otavalo</option>
                <option>Manabi</option>
                <option>Loja</option>
                <option>Macas</option>
                <option>Otro</option>
         </select>        
       </p>
       <p>
           Intereses:
           <br>
           <INPUT type="checkbox" name="intereses" value="Programacion">Programacion<br />
           <INPUT type="checkbox" name="intereses" value="Redes">Redes<br />
           <INPUT type="checkbox" name="intereses" value="Emsambleje">Ensamblaje<br />
           <INPUT type="checkbox" name="intereses" value="SOA">SOA<br>
           <INPUT type="checkbox" name="intereses" value="BI">BI<br />
           <INPUT type="checkbox" name="intereses" value="Analisis de Texto">Analisis de Texto<br />
           <INPUT type="checkbox" name="intereses" value="Big Data">Big Data<br>
           <INPUT type="checkbox" name="intereses" value="Redes Sociales">Redes sociales<br>
       </p>
       <p>
           Biografias Personal:
           <br>
           <textarea id="bigrafias" name="biografiaPerso" rows="5" cols="50">
           </textarea>
       </p>
       <p>
        <input type="submit" value="Guardar Cambios" />
       </p>
     </form>
    </body>
</html>
