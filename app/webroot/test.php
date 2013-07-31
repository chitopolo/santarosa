<div class="navbar">
	<div class="navbar-inner">
		<div class="container" style="width: auto;">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#">Project name</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li class="nav-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-search pull-left" action="">
					<input type="text" class="search-query span2" placeholder="Search">
				</form>
				<ul class="nav pull-right">
					<li><a href="#">Link</a></li>
					<li class="divider-vertical"></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.nav-collapse -->
		</div>
	</div><!-- /navbar-inner -->
</div><?php
/**
 * Web Access Frontend for TestSuite
 *
 * PHP 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/2.0/en/development/testing.html
 * @package       app.webroot
 * @since         CakePHP(tm) v 1.2.0.4433
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

set_time_limit(0);
ini_set('display_errors', 1);

/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

/**
 * These defines should only be edited if you have cake installed in
 * a directory layout other than the way it is distributed.
 * When using custom settings be sure to use the DS and do not add a trailing DS.
 */

/**
 * The full path to the directory which holds"app", WITHOUT a trailing DS.
 *
 */
if (!defined('ROOT')) {
	define('ROOT', dirname(dirname(dirname(__FILE__))));
}

/**
 * The actual directory name for the"app".
 *
 */
if (!defined('APP_DIR')) {
	define('APP_DIR', basename(dirname(dirname(__FILE__))));
}

/**
 * The absolute path to the"Cake" directory, WITHOUT a trailing DS.
 *
 * For ease of development CakePHP uses PHP's include_path. If you
 * need to cannot modify your include_path, you can set this path.
 *
 * Leaving this constant undefined will result in it being defined in Cake/bootstrap.php
 *
 * The following line differs from its sibling
 * /app/webroot/test.php
 */
define('CAKE_CORE_INCLUDE_PATH', 'C:' . DS . 'xampp' . DS . 'cake' . DS . 'lib');

/**
 * Editing below this line should not be necessary.
 * Change at your own risk.
 *
 */
if (!defined('WEBROOT_DIR')) {
	define('WEBROOT_DIR', basename(dirname(__FILE__)));
}
if (!defined('WWW_ROOT')) {
	define('WWW_ROOT', dirname(__FILE__) . DS);
}

if (!defined('CAKE_CORE_INCLUDE_PATH')) {
	if (function_exists('ini_set')) {
		ini_set('include_path', ROOT . DS . 'lib' . PATH_SEPARATOR . ini_get('include_path'));
	}
	if (!include ('Cake' . DS . 'bootstrap.php')) {
		$failed = true;
	}
} else {
	if (!include (CAKE_CORE_INCLUDE_PATH . DS . 'Cake' . DS . 'bootstrap.php')) {
		$failed = true;
	}
}
if (!empty($failed)) {
	trigger_error("CakePHP core could not be found. Check the value of CAKE_CORE_INCLUDE_PATH in APP/webroot/index.php. It should point to the directory containing your" . DS ."cake core directory and your" . DS ."vendors root directory.", E_USER_ERROR);
}

if (Configure::read('debug') < 1) {
	throw new NotFoundException(__d('cake_dev', 'Debug setting does not allow access to this url.'));
}

require_once CAKE . 'TestSuite' . DS . 'CakeTestSuiteDispatcher.php';

CakeTestSuiteDispatcher::run();
