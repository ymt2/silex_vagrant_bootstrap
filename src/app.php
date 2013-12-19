<?php

require_once __DIR__ . '/bootstrap.php';

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

return $app;
