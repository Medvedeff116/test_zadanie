<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = 'psql:host=localhost;dbname=test_zad_db';

return $db;
