function foo(array $arr) {
  $arrCopy = $arr;
  $i = 0;
  while($i < count($arrCopy)){
    if ($arrCopy[$i] === 'bar') {
      unset($arr[$i]);
    }
    $i++;
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )