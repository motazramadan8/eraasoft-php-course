<?php

  $text = "Lorem ipsum dolor sit abet, connecter adipisicing edit. Non sint dolor quo? Ilo obcaecati possums vel quia venial et, rescinds anim durius berate dolores porno molesting! Dolor nescient odic culpa.Lorem ipsum dolor sit abet, connecter adipisicing edit. Non sint dolor quo? Ilo obcaecati possums vel quia venial et, rescinds anim durius berate dolores porno molesting! Dolor nescient odic culpa.Lorem ipsum dolor sit abet, connecter adipisicing edit. Non sint dolor quo? Ilo obcaecati possums vel quia venial et, rescinds anim durius berate dolores porno molesting! Dolor nescient odic culpa.Lorem ipsum dolor sit abet, connecter adipisicing edit. Non sint dolor quo? Ilo obcaecati possums vel quia venial et, rescinds anim durius berate dolores porno molesting! Dolor nescient odic culpa.Lorem ipsum dolor sit abet, connecter adipisicing edit. Non sint dolor quo? Ilo obcaecati possums vel quia venial et, rescinds anim durius berate dolores porno molesting! Dolor nescient odic culpa.";

  // gey limit random ( <50 , <100  , <150 , else )
  $start = rand(0, 400);
  $limit = rand(1, 400);
  $new_str = substr($text, $start, $limit);
  $new_str_len = strlen($new_str);

  if ($new_str_len < 50) {
    echo "string is smaller than 50" . "\n";
  } elseif ($new_str_len >= 50 && $new_str_len < 100) {
    echo "string is greater than 50 and smaller than 100" . "\n";
  } elseif ($new_str_len >= 100 && $new_str_len < 150) {
    echo "string is greater than 100 and smaller than 150" . "\n";
  } else {
    echo "string is greater than 150" . "\n";
  }
