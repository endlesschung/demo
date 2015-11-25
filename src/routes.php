<?php
/**
 * Created by PhpStorm.
 * User: endless
 * Date: 15-11-23
 * Time: 下午5:48
 */

Route::get('jc/getMatches',array('as' => 'getRegister','uses' => 'Jc\Demo\Controllers\DemoController@getMatches'));