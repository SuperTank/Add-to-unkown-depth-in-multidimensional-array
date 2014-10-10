<?php


	$arr = ["sometext" => "foo", "subarray" => ["sometest" => "bar", "subarray" => ["sometext" => "FOOBAR", "subarray" => []] ]];

	$serarr = serialize($arr);

	echo "Original: <pre>";
	var_dump($arr);
	echo "</pre>";
	echo "<hr />";
	echo "Serialized Original:";
	var_dump($serarr);

	$childId = "bar";
	$arrayKeyId = "subarray";
	$childIdPos = strpos($serarr, $childId);
	$childArrayPos = strpos($serarr, $arrayKeyId, $childIdPos);

	$childArrayStartIndex = $childArrayPos + strlen($arrayKeyId ."\";");
	$childArray = substr($serarr, $childArrayStartIndex);

	echo "<hr />";
	echo "childArray: ";
	var_dump($childArray);

	$numberStartBrackets = strlen($childArray) - strlen(str_replace("{", "", $childArray));
	$numberEndBrackets = strlen($childArray) - strlen(str_replace("}", "", $childArray));

	echo "<hr />";
	echo "numberStartBrackets: ". $numberStartBrackets;
	echo "<br />";
	echo "numberEndBrackets: ". $numberEndBrackets;

	// Remove any excess end-brackets to make it a valid array (of type string)
	$cleanChildArr = substr($childArray, 0, strlen($childArray) - ($numberEndBrackets - $numberStartBrackets));
	$childArrayEndIndex = strpos($serarr, $cleanChildArr, $childArrayStartIndex) + strlen($cleanChildArr); // The pos where the child ends in the original array	

	echo "<hr />";
	echo "clean childArray: ";
	var_dump($cleanChildArr);

	echo "<hr />";
	echo "original array start index:<br />";
	var_dump($childArrayStartIndex);		

	echo "<hr />";
	echo "original array end index:<br />";
	var_dump($childArrayEndIndex);	

	$unserializedChildArray = unserialize($cleanChildArr);

	echo "<hr />";
	echo "unserialized clean childArray:<br />";
	var_dump($unserializedChildArray);


	$unserializedChildArray["someNewContent"] = "cat";

	echo "<hr />";
	echo "new child content:<br /> ";
	var_dump($unserializedChildArray);

	$serializedNewChildArray = serialize($unserializedChildArray);
	echo "<hr />";
	echo "serialized new child content:<br />";
	var_dump($serializedNewChildArray);

	echo "<hr />";
	$newOriginal = substr($serarr, 0, $childArrayStartIndex);
	echo "newOriginal conjuring 1):<br />";
	var_dump($newOriginal);

	$newOriginal = $newOriginal . $serializedNewChildArray;

	echo "<br /><br />";
	echo "newOriginal conjuring 2):<br />";
	var_dump($newOriginal);

	$newOriginal = $newOriginal . substr($serarr, $childArrayEndIndex);
	echo "<br /><br />";
	echo "newOriginal conjuring 3):<br />";
	var_dump($newOriginal);	

	echo "<hr />";
	echo "unserialized new original:<br /><pre> ";
	var_dump(unserialize($newOriginal));	
	echo "</pre>";	


?>