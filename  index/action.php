
<?php
    $numero = $_GET["numero"];
    $inicio = $_GET["inicio"];
    $final = $_GET["final"];

    // Imprimir la tabla de multiplicar
    echo '<form action="respuestas.php" method="GET">';
    echo "<h2>Tabla de Multiplicar del $numero:</h2>";
    echo "<table border='1'>";
    for ($i = $inicio; $i <= $final; $i++) {
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo '<td><input type="text" min="1" name="respuestas[]" required></td>';
        echo "</tr>";
    }
    echo "</table>";
    echo '<input type="hidden" name"numero" value=$numero>';
    echo '<input type="submit" value="revisar los resultados">';
    echo '</form>'
?>
