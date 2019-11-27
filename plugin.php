<?php
/*
 * Plugin Name: SSL redirect fix
 * Plugin URI: https://github.com/circlehd/wordpress-ssl-redirect-fix
 * Description: Fix for wordpress redirect loop under reverse proxies
 * Version: 1.0.0
 * Text Domain: ssl-redirect-fix
 * Author: circlehd
 * Author URI: https://www.circlehd.com
 */

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $_SERVER['HTTPS'] = 'on';
}
?>
