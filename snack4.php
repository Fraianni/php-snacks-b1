<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<p>

</p>

<?php

$text =
    'Lorem ipsum dolor sit amet consectetur adipisicing elit.
Architecto debitis ut rerum fugit ipsa adipisci, labore, error rem eius perferendis odit. 
Magnam alias recusandae deserunt beatae optio officia quam non.';

$paragraphs = explode('.', $text);
var_dump($paragraphs);

for ($i = 0; $i < count($paragraphs); $i++) {
?>
    <p> <?= $paragraphs[$i] ?>. </p>
<?php
}

?>