<?php
namespace MiniOrange\Classes\Actions;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DatabaseController extends Controller
{

    public function createTables()
    {
        
        echo "Setting up database for MiniOrange SAML SP for Laravel...<br>";
        try {
            Artisan::call('migrate:refresh', array(
                '--path' => 'vendor/devasyadave/newdb/src/classes/actions/2014_10_12_100000_create_miniorange_tables.php',
                '--force' => TRUE
            ));
        } catch (\PDOException $e) {
            echo "Could not create tables. Please check your Database Configuration and Connection and try again.";
            exit();
        }
        echo "Tables created successfully. You will be redirected in about 5 seconds.";
        header("refresh:6;url=login");
    }
    public static function installTables(){
        echo "Installing Database tables for MiniOrange SAML SP for Laravel...<br>";
        try {
            Artisan::call('migrate:refresh', array(
                '--path' => 'vendor/devasyadave/newdb/src/classes/actions/2014_10_12_100000_create_miniorange_tables.php',
                '--force' => TRUE
            ));
        } catch (\PDOException $e) {
            echo "Could not create tables. Please check your Database Configuration and Connection and try again.";
            exit();
        }
        echo "Tables created successfully. You will be redirected in about 5 seconds.";
        header("refresh:6;url=mo_admin");
        
    }
}