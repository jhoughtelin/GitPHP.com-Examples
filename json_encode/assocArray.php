<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * assocArray.php
 *
 * PHP version 5.5.x
 *
 * @category  gitphp.com_examples
 * @package   gitphp.com_examples
 * @author    Josh Houghtelin <Josh@FindSomeHelp.com>
 * @since     2014/05/12
 * @link      http://gitphp.com
 */
header('Content-Type: application/json');
$arr = [
    'oneName' => 'value',
    'twoNames' => 'novalue',
    'falseValue' => false,
    'arrayValue' => ['one','two','three']
];
echo json_encode($arr,JSON_PRETTY_PRINT);