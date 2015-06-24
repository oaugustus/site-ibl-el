<?php
/**
 * Bolt entry script
 *
 * Here we'll require in the first stage load script, which handles all the
 * tasks needed to return the app.  Once we get the app, we simply tell it
 * to run, building a beautiful web page for you and other visitors.
 */

/**
 * @var \Bolt\Application $app
 */
$app = require_once dirname(__FILE__) . '/app/load.php';

if ($app) {
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_ALL,'ptb');
    $app->run();
} else {
    return false;
}
