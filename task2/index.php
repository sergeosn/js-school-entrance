<?php

/**
 * Checks whether arrays arr1 and arr2 consist of the same
 * number of the same elements
 *
 * @param array arr1 - array of unique elements sorted
 *                          in ascending order
 * @param array arr2 - array of arbitrary numbers of arbitrary length
 * @returns {Boolean}
 */

function haveSameItems(array $arr1, array $arr2)
{
    sort($arr2);

    return $arr1 === $arr2;
}
