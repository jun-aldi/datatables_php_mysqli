<?php
 
//DB connection info
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db' => 'pertemuan13'
);
 
// DB table to use
$table = 'tma';
 
// Table's primary key
$primaryKey = 'id_tma';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id_tma', 'dt' => 0 ),
    array( 'db' => 'nilai',  'dt' => 1 ),
    array( 'db' => 'waktu',   'dt' => 2 ),
);

// Include SQL query processing class
require( 'ssp.class.php' );

//output data as json
echo json_encode(
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);