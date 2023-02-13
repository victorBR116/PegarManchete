<?php

require_once 'Noticia.php';

$manchete = new Manchete("https://www.r7.com/", "r7-flex-title-h5__link"); // inserir o link do site de noticia e a class HTML.
echo $manchete->pegarManchetes();

//link e class do g1: "https://g1.globo.com/", "feed-post-link gui-color-primary gui-color-hover"