<?php
/***************************************
    Class Name: PDO
    Class URI: https://github.com/fatihgol/pdo-database-class-v2
    Author: Fatih Göl
    Author URI: http://fatihgol.com/
    Version: 2.4.1
    
    License: Licensed under the MIT (MIT-LICENSE.txt).

    Tags: PDO,Database,Class,PHP,Data,Object
***************************************/

Class dbConfig{

	protected $dbConfig = array();

    protected function createConfig() {
        $this->dbConfig['host'] = 'Hostname'; 		// Hostname
        $this->dbConfig['username'] = 'Hostname';	// Username
        $this->dbConfig['password'] = 'Password';	// Password
        $this->dbConfig['dbname'] = 'dbname';  		// Database name
    }
}
?>
