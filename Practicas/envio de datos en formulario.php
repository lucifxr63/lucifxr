<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action=""method="">
<!--ingreso de informacion plana-->        
        <imput type="text" placeholder="Nombre:"name="nombre">
            <br>

<!--elecciones-->
        <label for="hombre">hombre</label>
        <imput type= "radio" name="sexo" value="hombre" id="hombre">
       
       
        <label for="mujer">mujer</label>
        <imput type= "radio" name="sexo" value="mujer" id="mujer">
        <br>

<!--se puede hacer con un ciclo al nesecitar mas años-->

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <br>
<!--eleccion de una opcion-->
        </select>
        <label for="terminos">acepta los terminos</label>
        <imput type="Checkbox" name="terminos" id="terminos"value="true">
        <br>
       
       
        <imput type="submit" value="Enviar">
    </form>
</body>
</html>