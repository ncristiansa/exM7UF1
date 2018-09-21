<?php
$i = 12;
$tipus_de_i = gettype( $i );
echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i";
$a = 1.240;
$tipus_de_a = gettype($a);
echo "<br>";
echo "La variable \$a
	contiene el valor $a
	i es del tipo $tipus_de_a";
echo "<br>";
$b = True;
$tipus_de_b = gettype($b);
echo "La variable \$b
	 contiene el valor $b
	 i es del tipo $tipus_de_b";
echo "<br>";
$c = "Ejercicio 2";
$tipus_de_c = gettype($c);
echo "La variable \$c
	contiene el valor $c
	i es del tipo $tipus_de_c";


/*
	3. Hemos puesto la barra invertida delante del simbolo del dolar para que pueda mostrarnos el signo del dolar i la variable i sin mostrar su valor.
	4. La variable $i es de tipo entero o integer.
	5. La función gettype sirve para obtener el tipo de variable.
	6. He añadido la variable a, b, c con los tipos de variables.
	7. Con la función gettype(variable) pdemos obtener el tipo de valor.
*/
?>
