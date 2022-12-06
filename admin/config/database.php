<?php
// Deklarasi Configuration Database
define('DB_SERVER', 'localhost');             // HOST SERVER
define('DB_USERID', 'root');                  // USER ID
define('DB_PASSWORD', '');                      // PASSWORD
define('DB_NAME', 'spk_topsis');     // NAMA DATABASE

$connect = mysqli_connect(DB_SERVER, DB_USERID, DB_PASSWORD, DB_NAME);

if (!$connect) {
    echo "Database tidak terkoneksi";
} 
// else {
//     echo "Database terkoneksi";
// }
