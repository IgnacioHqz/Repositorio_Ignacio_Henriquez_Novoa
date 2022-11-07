#Ignacio Henriquez Novoa
<?php include('templates/header.html'); ?>
<body>
    <h1 align="center"> Ignacio</h1>
    <p style="text-align:center;">Aquí podrás...</p>

    <br>
    <h3 align="center">¿Queri buscar algo?</h3>

    <form align="center" action="consultas/consulta_tipo_nombre.php" method="post">

        Tipo:
        <input type="text" name="tipo_elegido">
        <br/>
        Nombre:
        <input type="text" name="nombre">
        <br/><br/>
        <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>

    <h3 align="center"> ¿Quieres buscar un pokemon por su id?</h3>
    <form align="center" action="consultas/consulta_stats.php" method="post">
        Id:
        <input type"text" name="id_elegido">
        <br/><br/>
        <input type="submit" value="Buscar">
    </form>

    <br>
    <br>
    <br>

    <h3 align="center"> ¿Quieres conocer los pokemons mas altos que. ?</h3>
    <form align="center" action="consultas/consulta_altura.php" method="post">
        Altura Minima:
        <input type="text" name="altura">
        <br/><br/>
        <input type="submit" value="Buscar">
    </form>
    <br>
    <br>
    <br>

    <h3> align="center">¿Queires buscar todos los pokemones por tipo?</h3>

    <?php
    requiere("config/conexion.php");
    $result = $db -> prepare("SELECT DISTINCT tipo FROM pokemones;");
    $result -> execute();
    $dataCollected = $result -> fetchAll();
    ?>

    <form align="center" action="consultas/consulta_tipo.php" method="post">
        Seleccionar un tipo:
        <select name="tipo">
            <?php
            foreach ($dataCollected as $d) {
                echo "<option value=$d[0]>$d[0]</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Buscar por tipo">
    </form>

    <br>
    <br>
    <br>
    <br>
</body>
</html>


