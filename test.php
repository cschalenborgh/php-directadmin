<?
/**
 *
 * DirectAdmin API
 *
 * @author Chris Schalenborgh <chris.s@kryap.com>
 * @version 0.1
 * @link http://www.directadmin.com/api.html
 */


$da = new \DirectAdmin\DirectAdmin();
$da->connect('domain.be', 2222);
$da->set_login('username', 'password');

$da->set_method('get');
$da->query('/CMD_API_SHOW_DOMAINS');
$da = $da->fetch_body();

var_dump($da);
?>
