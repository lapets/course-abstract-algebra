<?php /**************************************************************
** 
** unreliable.php
**
**   Simple (but unreliable) service for computing modular products.
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

// Decide whether to introduce errors (33% chance or error).
$r = rand(0,2);
if ($r == 1 && count($args) >= 2) // Introduce errors.
  $product = gmp_mod(gmp_init(rand(3,31321)), $n);
else // Compute correct product.
  $product = gmp_init(1);

// Compute the product.
foreach ($args as $arg)
  $product = gmp_mod(gmp_mul($product, $arg), $n);

// Respond with the result.
echo gmp_strval(gmp_mod($product, $n));

/* eof */?>