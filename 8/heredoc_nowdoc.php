<?php
  $name = 'Motaz Ramadan';
  $website = "https://motaz.vercel.app";

  // Heredoc
  $link = <<<LINK
  <a href="$website" target="_blank" data-color='red' class="btn">Motaz Ramadan</a>
  LINK;

  // Nowdoc
  $link2 = <<<'LINK'
  <a href="$website" target="_blank" data-color='red' class="btn">Motaz Ramadan</a>
  LINK;

  echo $link;
