<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

if (1 == '1');      // TRUE

if (1 === '1');     // FALSE

if ('abc' == 1);    // FALSE

if (true == 1);     // TRUE

if (true == 0);     // FALSE;

if (true == '')     // FALSE;

if (true == 'abc'); // TRUE;

if (true === 1);    // FALSE

if (false == '');   // TRUE

if (false == 0);    // TRUE

if (false == null); // TRUE

if (false === 0);   // FALSE