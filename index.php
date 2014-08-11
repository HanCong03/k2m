<?php
/**
 * Created by PhpStorm.
 * User: hn
 * Date: 14-8-6
 * Time: 15:16
 */
include_once "src/Parser.class.php";

echo Parser::toXMind( file_get_contents( "test.km" ) );
//echo Parser::toFreeMind( file_get_contents( "test.km" ) );