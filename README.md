# course-abstract-algebra

Lecture notes, assignments, and other materials for a one-semester introductory course on topics in number theory, modular arithmetic, abstract algebra, and computer science applications thereof.

PHP 5.4 or later and [Sheaf](http://sheaf.io) are required. The latest version of Sheaf is already included in this repository. Install the notes on a Linux server in a directory `example` (e.g., under the web root directory) as follows:

    git clone https://github.com/lapets/course-abstract-algebra.git example
    cd example
    chmod 0755 permissions-fix.sh
    ./permissions-fix.sh

On a running server, `index.php` will render the notes in their HTML form. In a Linux environment, it is also possible to build the HTML version of the notes as follows:

    php index.php > index.html
    chmod 0644 index.html

The `gh-pages` branch of this repository also contains the rendered HTML version of the notes; they can be viewed at http://lapets.github.io/course-abstract-algebra.
