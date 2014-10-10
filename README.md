Output:

---------------------------------------------------------------------

Original:

array(2) {
  ["sometext"]=>
  string(3) "foo"
  ["subarray"]=>
  array(2) {
    ["sometest"]=>
    string(3) "bar"
    ["subarray"]=>
    array(2) {
      ["sometext"]=>
      string(6) "FOOBAR"
      ["subarray"]=>
      array(0) {
      }
    }
  }
}

Serialized Original:string(147) "a:2:{s:8:"sometext";s:3:"foo";s:8:"subarray";a:2:{s:8:"sometest";s:3:"bar";s:8:"subarray";a:2:{s:8:"sometext";s:6:"FOOBAR";s:8:"subarray";a:0:{}}}}" childArray: string(57) "a:2:{s:8:"sometext";s:6:"FOOBAR";s:8:"subarray";a:0:{}}}}" numberStartBrackets: 2
numberEndBrackets: 4clean childArray: string(55) "a:2:{s:8:"sometext";s:6:"FOOBAR";s:8:"subarray";a:0:{}}" original array start index:
int(90) original array end index:
int(145) unserialized clean childArray:
array(2) { ["sometext"]=> string(6) "FOOBAR" ["subarray"]=> array(0) { } } new child content:
array(3) { ["sometext"]=> string(6) "FOOBAR" ["subarray"]=> array(0) { } ["someNewContent"]=> string(3) "cat" } serialized new child content:
string(87) "a:3:{s:8:"sometext";s:6:"FOOBAR";s:8:"subarray";a:0:{}s:14:"someNewContent";s:3:"cat";}" newOriginal conjuring 1):
string(90) "a:2:{s:8:"sometext";s:3:"foo";s:8:"subarray";a:2:{s:8:"sometest";s:3:"bar";s:8:"subarray";"

newOriginal conjuring 2):
string(177) "a:2:{s:8:"sometext";s:3:"foo";s:8:"subarray";a:2:{s:8:"sometest";s:3:"bar";s:8:"subarray";a:3:{s:8:"sometext";s:6:"FOOBAR";s:8:"subarray";a:0:{}s:14:"someNewContent";s:3:"cat";}"

newOriginal conjuring 3):
string(179) "a:2:{s:8:"sometext";s:3:"foo";s:8:"subarray";a:2:{s:8:"sometest";s:3:"bar";s:8:"subarray";a:3:{s:8:"sometext";s:6:"FOOBAR";s:8:"subarray";a:0:{}s:14:"someNewContent";s:3:"cat";}}}" unserialized new original:

 array(2) {
  ["sometext"]=>
  string(3) "foo"
  ["subarray"]=>
  array(2) {
    ["sometest"]=>
    string(3) "bar"
    ["subarray"]=>
    array(3) {
      ["sometext"]=>
      string(6) "FOOBAR"
      ["subarray"]=>
      array(0) {
      }
      ["someNewContent"]=>
      string(3) "cat"
    }
  }
}
