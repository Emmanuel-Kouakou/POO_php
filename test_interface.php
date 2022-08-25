<?php
require("vendor\autoload.php");

use New_acme\Animal;
use New_acme\Chien;
use New_acme\Chat;

(new Chien)->communiquer();
(new Chat)->communiquer();
