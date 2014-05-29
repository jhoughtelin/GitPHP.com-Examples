<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * nonAssocArray.php
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
$arr = ['good','evil','neutral'];
echo json_encode($arr,JSON_PRETTY_PRINT);