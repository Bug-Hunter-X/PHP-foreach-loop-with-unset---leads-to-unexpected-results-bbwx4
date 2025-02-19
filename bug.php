function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//The problem is that in foreach loop the key is passed by value, so even if you unset the element in the array using the key ,the foreach loop continues running the array elements and the array size changes during the iteration leading to unexpected results