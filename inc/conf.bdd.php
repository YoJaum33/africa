<?php
// ajout des const comme dit dans le brief
  const DB_HOST    = "localhost";
  const DB_NAME    = "site";
  const DB_LOGIN   = "base2";
  const DB_PASS    = "Ecrouves!54";
  const DB_DRIVER  = "mysql";
  const DB_CHARSET = "utf8mb4";
  const DB_OPTIONS = [
    PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // turn on errors in the form of exceptions, good for dev (so no good for prod ^^)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // make the default fetch be an associative array
    PDO::MYSQL_ATTR_FOUND_ROWS   => true // track affected SQL rows, using rowCount
  ];

?>