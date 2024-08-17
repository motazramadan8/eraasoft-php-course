<?php
  function filter_string_polyfill(string $string): string {
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
  }

  // ** sanitization

  // ? string
  $string = "Motaz <script>alert('hello ya bash')</script> Ramadan";
  // echo filter_var($string, FILTER_SANITIZE_STRING); // Deprecated PHP 8.1
  // echo filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); // Deprecated PHP 8.1
  // echo htmlspecialchars($string, ENT_SUBSTITUTE); // Modern way to sanitize string
  // echo filter_string_polyfill($string);

  // ? email => Remove all characters except letters, digits and ! # $ % & ' * + - = ? ^ _ ` { | } ~ @
  // $email = "motazramadan198@<script>alert('hello ya bash')</script>gmail.com";
  // echo filter_var($email, FILTER_SANITIZE_EMAIL);

  // ? URL => Remove all characters except letters, digits and $ - _ . + !* ' ( ) , { } | \\ ^ ~ [ ] ` < > # % " ; / ? : @ & = .
  $url = "https://www.motaz.vercel.app";
  echo filter_var($url, FILTER_SANITIZE_URL);
