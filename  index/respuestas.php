<?php 
    $repuestas = $_GET['respuestas'];
    $respuestas_correctas = 0;

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