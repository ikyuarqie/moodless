<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('mariadb');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('184.169.208.182');
$CFG->dbname    = getenv('moodledb');
$CFG->dbuser    = getenv('admin1');
$CFG->dbpass    = getenv('MyNewPass1!');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://mymoodles.herokuapp.com/');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
