<?php /*********************************************************
**
** Script to build notes as HTML using Sheaf.
**
** build.php
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
           'message' => '<h1>Topics in Abstract Algebra for Computer Science Applications</h1>',
           'toc' => 'true'
         )
      );

// Render the notes as HTML.
$s->html();

/*eof*/?>