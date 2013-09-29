<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

$array = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => array(
        'key3.1' => 'value3.1',
        'key3.2' => array(
            'key3.2.1' => 'value3.2.1',
            'key3.2.2' => array(
                'key3.2.2.1' => 'value3.2.2.1'
            ),
        ),
    ),
);

echo $array; // Try to display "value3.2.2.1"
