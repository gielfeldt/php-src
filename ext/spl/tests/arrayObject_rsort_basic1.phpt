--TEST--
SPL: Test ArrayObject::sort(SORT_FLAG_REVERSE) function : basic functionality with array based store
--FILE--
<?php
/* Prototype  : int ArrayObject::sort()
 * Description: proto int ArrayIterator::sort()
 * Sort the entries by values.
 * Source code: ext/spl/spl_array.c
 * Alias to functions:
 */

echo "*** Testing ArrayObject::sort(SORT_FLAG_REVERSE) : basic functionality ***\n";

$ao1 = new ArrayObject(array(4,2,3));
$ao2 = new ArrayObject(array('a'=>4,'b'=>2,'c'=>3));
var_dump($ao1->sort(SORT_FLAG_REVERSE));
var_dump($ao1);
var_dump($ao2->sort('blah'));
var_dump($ao2);
var_dump($ao2->sort(SORT_NUMERIC | SORT_FLAG_REVERSE));
var_dump($ao2);
?>
===DONE===
--EXPECTF--
*** Testing ArrayObject::sort(SORT_FLAG_REVERSE) : basic functionality ***
bool(true)
object(ArrayObject)#%d (1) {
  ["storage":"ArrayObject":private]=>
  array(3) {
    [0]=>
    int(4)
    [1]=>
    int(3)
    [2]=>
    int(2)
  }
}

Warning: sort() expects parameter 2 to be integer, string given in %sarrayObject_rsort_basic1.php on line %d
bool(false)
object(ArrayObject)#%d (1) {
  ["storage":"ArrayObject":private]=>
  array(3) {
    ["a"]=>
    int(4)
    ["b"]=>
    int(2)
    ["c"]=>
    int(3)
  }
}
bool(true)
object(ArrayObject)#%d (1) {
  ["storage":"ArrayObject":private]=>
  array(3) {
    [0]=>
    int(4)
    [1]=>
    int(3)
    [2]=>
    int(2)
  }
}
===DONE===
