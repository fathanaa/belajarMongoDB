<?php
$manager = new MongoDB\Driver\Manager();
$bulkWrite = new MongoDB\Driver\BulkWrite;
$bulkWrite -> delete(
    ['nama' => 'Deswita'],
    ['limit' => true]
);

$manager -> executeBulkWrite("databaseAnda.collectionUser" $bulkWrite);
//Tampilkan hasil
$query = new MongoDB\Driver\Query([]);
$cursor = $manager -> executeQuery("databaseAnda.collectionUser",$query);

foreach($cursor as $document){
    echo'<pre>';
    print_r($document);
    echo'</pre>';
}

?>