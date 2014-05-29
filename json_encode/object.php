<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * object.php
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

$obj = (object) array(
    'objectproperty'=>'objectpropertyvalue',
    'anotherProp'=>'anotherValue',
    'evilProp' => [
        'goodKey' => 'good',
        'badKey' => 'bad',
        'neutralKey' => 'neutralKey'
    ]
);

echo json_encode($obj,JSON_PRETTY_PRINT);