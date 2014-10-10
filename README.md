output:
================================

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

newOriginal:

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
      array(1) {
        ["someNewContent"]=>
        string(3) "cat"
      }
    }
  }
