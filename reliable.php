<?php /**************************************************************
** 
** reliable.php
**
**   Simple service for computing modular products.
**
*/

// Check for parameters.
if  (!(
      (array_key_exists('n', $_GET) && array_key_exists('data', $_GET))
   || (array_key_exists('n', $_POST) && array_key_exists('data', $_POST))
    )) {
  echo "Error: missing <b><code>n</code></b> and/or <b><code>data</code></b> parameters.";
  exit();
}

// Retrieve the parameters.
$n = gmp_init((array_key_exists('n', $_GET)) ? $_GET['n'] : $_POST['n']);
$args = explode(',', ((array_key_exists('data', $_GET)) ? $_GET['data'] : $_POST['data']));

// Convert the data into integer objects.
for ($i = 0; $i < count($args); $i++)
  $args[$i] = gmp_init($args[$i]);

// Compute the product.
$product = gmp_init(1);  
foreach ($args as $arg)
  $product = gmp_mod(gmp_mul($product, $arg), $n);

// Respond with the result.
echo gmp_strval(gmp_mod($product, $n));

/* eof */?>