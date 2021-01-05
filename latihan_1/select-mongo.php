<?php
$manager = new MongoDB\Driver\Manager();
$query = new MongoDB\Driver\Query([]);
$cursor = $manager -> executeQuery("databaseAnda.collectionUser",$query);
foreach($cursor as $document){
	echo'<pre>';
	print_r($document);echo'</pre>';
}
?>