<?php

$hash = password_hash('password', PASSWORD_DEFAULT);

var_dump(password_verify('password', $hash));
