<?php /*********************************************************
**
** Script to render notes as HTML using Sheaf.
**
** s.php
**
*/

////////////////////////////////////////////////////////////////
//

// Load the library and rendering hooks.
include("sheaf/sheaf.php");
include("sheaf/hooks/math.php");
include("sheaf/hooks/Python.php");

$s = new Sheaf(
       array(
           'file' => 'notes.xml',
           'path' => 'sheaf/',
           'toc' => 'true'
         )
      );

// Render the notes as HTML.
$s->html();

/*eof*/?>