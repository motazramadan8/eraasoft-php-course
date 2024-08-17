<?php

echo "<pre>";
// print_r(filter_list());

$mac = "00:00:5e:00:53:af";

var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
