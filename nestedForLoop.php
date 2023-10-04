<?php
#phpForLoop -week3lab-7Walter-1
#Walter O'Hara 04/10/2023 
    echo "<table border= '1'>";
    for ($i=1;$i<=20;$i++){
        
        
        echo "<tr>";
        for ($j=1; $j<=15; $j++) {
        echo "<td>row$j,col$i</td>";
        
        }
        echo "</tr>";
        }
       
echo "</table>";
?>