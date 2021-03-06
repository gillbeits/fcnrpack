<?php
/**
 * Project: FCNR
 * Ivan Koretskiy <gillbeits@gmail.com>
 * Date: 16/01/15
 * Time: 18:03
 */
include_once __DIR__ . "/../vendor/autoload.php";

$packer = new \FCNR\Packer([
    [40, 30, 10, 1],
    [40, 30, 10, 1],
    [30, 20, 10, 1],
    [30, 20, 10, 1],
    [30, 20, 10, 1],
    [30, 20, 10, 1],
    [30, 20, 5, 1],
    [30, 15, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [30, 10, 5, 1],
    [22, 20, 1, 1],
    [22, 20, 1, 1],
    [22, 20, 1, 1],
    [22, 20, 1, 1],
    [22, 20, 1, 1],
    [21, 9, 5, 1],
    [20, 15, 3, 1],
    [20, 10, 5, 1],
    [20, 8, 3, 1],
    [20, 8, 3, 1],
    [20, 8, 3, 1],
    [17, 17, 1, 1],
    [15, 10, 10, 1],
    [15, 10, 10, 1],
    [15, 10, 10, 1],
    [15, 10, 10, 1],
    [15, 10, 10, 1],
    [15, 10, 10, 1],
    [15, 10, 10, 1],
    [15, 10, 2, 1],
    [15, 10, 2, 1],
    [15, 10, 2, 1]
]);

$packer
    ->setMaxLength(60)
    ->setMaxWidth(60)
    ->pack()
    ->getImage();