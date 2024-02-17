<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ***********************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     : 24.0.0                                                    *
 * @ASCOOS-CATEGORY    : Kernel (Frontend and Administration Side)                 *
 * @ASCOOS-CREATOR     : Drogidis Christos                                         *
 * @ASCOOS-SITE        : www.ascoos.com                                            *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ***********************************************************************************
 *
 * @package            : ASCOOS CMS - Animals Human Age
 * @subpackage         : Subpackage Description 
 * @source             : phpAnimals/test/example.php
 * @version            : NNNNNNNN - $release: 1.0 - $revision: 1 - $build 10
 * @created            : 2024-02-17 01:08:00 UTC+3
 * @updated            : 
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */

 define('ALEXSOFT_RUN_CMS', true);

$cms_path = str_replace('/phpAnimals/test', '',str_replace('\\', '/', __DIR__));
 
require_once($cms_path."/phpAnimals/src/phpAnimals.php");


$age = 9;
$dog = new TDog($age);
$cat = new TCat($age);

echo "1) The Dog ".$age." years old in human age is : ".$dog->getHumanYears()."</br><hr></br>";
echo "2) The Cat ".$age." years old in human age is : ".$cat->getHumanYears();
?>
