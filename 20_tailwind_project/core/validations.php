<?php

  function required_input($input): bool {
    if (empty($input)) {
      return false;
    }
    return true;
  }

  function length_input(string $input, int $number, string $situation): bool {
    if ($situation == "gt") {
      if (strlen($input) > $number) {
        return true;
      }
      return false;
    }
    if ($situation == "lt") {
      if (strlen($input) < $number) {
        return true;
      }
      return false;
    }
    return true;
  }

  function email_input(string $email): bool {
    if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
      return true;
    }
    return false;
  }

  function confirm_password(string $password, string $confirm_password): bool {
    if ($password == $confirm_password) {
      return true;
    }
    return false;
  }

  function filter_string_polyfill(string $string): string {
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
  }