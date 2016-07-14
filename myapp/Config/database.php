<?php
class DATABASE_CONFIG
{
    const sqlite3_db_file = '';

    public $default = array(
        'datasource' => 'Database/Sqlite',
        'persistent' => false,
        'database' => __DIR__ . '/cake.sqlite3',
        'encoding' => 'utf8',
    );
}
