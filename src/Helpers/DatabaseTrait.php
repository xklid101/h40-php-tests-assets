<?php
/**
 * @md
 * database use helper 
 *     by using this trait in some testcase
 *     someone can change database name to be used in some test
 *     (if database is going to be used but does not exists and is not going to be created,
 *     it has to be defined in config parameters)
 * all app is using environment variables to connect to database, so this class just sets env variable
 *     to properly connect to the correct database
 */

namespace Xklid101\H40\PhpTestsAssets\Helpers;

use PDO;

trait DatabaseTrait
{
    /**
     * change env variable to use database $dbname
     *     if $dropfirst === true, then the database $dbname is going to be deleted if already exists
     *     
     * @param  string $dbname database name to be used
     * @param  bool|boolean $dropFirst drop database before use if exists
     * @return void       [description]
     */
    protected function useDb(string $dbname, bool $dropFirst = false): void {
        // drop database if needed
        if($dropFirst) {
            $conn = new PDO("pgsql:" . preg_replace('#dbname=[^;]+#', 'dbname=postgres', getenv('H40_PGSQL_DSN')));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->query('DROP DATABASE IF EXISTS "' . $dbname . '"');
        }
        // set env variable
        putenv(
            'H40_PGSQL_DSN=' .
            preg_replace('#dbname=[^;]+#', 'dbname=' . $dbname, getenv('H40_PGSQL_DSN'))
        );
    }
}
