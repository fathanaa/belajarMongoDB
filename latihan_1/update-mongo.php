<?php
$manager = new MongoDB\Driver\Manager();
$bulkWrite = new MongoDB\Driver\BulkWrite;
$bulkWrite -> update(
    ['nama'=>'Deswita'],
    ['$set'=>['umur'=>30]],
    ['multi' => true,'upsert' => false]
    );

$manager -> executeBulkWrite("databaseAnda.collectionUser",$bulkWrite);
$query = new MongoDB\Driver\Query([]);
$cursor = $manager->executeQuery("databaseAnda.collectionUser",$query);
foreach($cursor as $document){
    echo'<pre>';
    print_r($document);
    echo'</pre>';
    }

?>