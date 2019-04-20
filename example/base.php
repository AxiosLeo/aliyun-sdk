<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:51
 */

/**
 * @param $var
 * @param bool $echo
 * @param null $label
 * @param int  $flags
 *
 * @return string|string[]|null
 */
function dump($var = null, $echo = true, $label = null, $flags = ENT_SUBSTITUTE)
{
    $label = (null === $label) ? '' : rtrim($label) . ':';
    ob_start();
    var_dump($var);
    $output = ob_get_clean();
    $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
    if (!extension_loaded('xdebug')) {
        $output = htmlspecialchars($output, $flags);
    }
    $output = '<pre>' . $label . $output . '</pre>';
    if ($echo) {
        echo $output;

        return '';
    } else {
        return $output;
    }
}

require_once __DIR__ . '/../vendor/autoload.php';
$access_id     = 'testAccessKeyId';
$access_secret = 'testAccessKeySecret';

