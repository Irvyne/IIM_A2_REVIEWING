<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

$tree = array(
    '.gitignore',
    'app' => array(
        'AppKernel.php',
        'autoload.php',
        'Resources' => array(
            'java' => array(
                'yuicompressor.jar',
            ),
            'views' => array(
                'layout' => array(
                    'base.html.twig',
                ),
            ),
        ),
    ),
    'bin' => array(
        'doctrine',
    ),
    'composer.json',
    'composer.lock',
    'config' => array(
        'parameters.yml',
    ),
    'README.md',
    'src' => array(
        'IrvyneBlogBundle' => array(

        ),
    ),
    'var' => array(
        'cache' => array(
            'dev',
            'prod',
        ),
        'logs' => array(
            'dev' => array(
                'warning',
                'debug',
                'notice',
            ),
            'prod' => array(
                'warning',
                'debug',
                'notice',
            ),
        ),
    )
);

/*
 * Display the above array ($tree) as an html unordered list (<ul>)
 */

function displayAsHtml ($input) {

}

displayAsHtml($tree);