<?php

class IteratorCollection implements IteratorAggregate
{

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
        echo 11;die();
        return new ArrayIterator([1, 2, 3]);
    }
}

$te = new iteratorCollection();

foreach ($te as $value) {
    echo $value;
}