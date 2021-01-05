<?php
$manager = new MongoDB\Driver\Manager();
$filter = ['umur' => ['$lt' => 26]];
$options=[];
$query = new MongoDB\Driver\Query($filter,$options);$cursor = $manager -> executeQuery("databaseAnda.collectionUser",$query);
foreach($cursor as $document){
    echo'<pre>';
    print_r($document);
    echo'</pre>';
}

?>