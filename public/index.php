    <?php
// All file paths relative to root
chdir(dirname(__DIR__));

require 'vendor/autoload.php';
session_start();

//read configuration file
use Noodlehaus\Config; //get help from netbeans
$conf = Config::load('app/bootstrap/settings.yaml');//load from the top
//access particular settings, if nothing there specify default values
//whatever goes in settings stays in slim
$settings = $conf->get('settings', []);
//var_dump on steroids ddd()
//ddd($settings);
//ddd($conf->get('view'));
// Instantiate Slim with intitial settings
$app = new \Slim\App(['settings'=>$settings]);
//ddd($app);
require 'app/bootstrap/dependencies.php';
require 'app/bootstrap/middleware.php';

// Register the routes
require 'app/src/routes.php';

$app->run();