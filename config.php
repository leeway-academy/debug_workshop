<?php

mysqli_report(MYSQLI_REPORT_ALL);

set_error_handler(function(int $errno , string $errstr , string $errfile, int $errline, array $errcontext ) {
    error_log("[PROBLEMA]: '$errstr' ($errno) en '$errfile' linea '$errline'".PHP_EOL, 3, __DIR__.DIRECTORY_SEPARATOR.'error.log');
}); 

return [
    'email' => 'mauro.chojrin@leewayweb.com',
    'host' => 'localhost',
    'user' => 'root',
    'pwd' => 'root',
    'db' => 'epiz_28017509_XXX',
];