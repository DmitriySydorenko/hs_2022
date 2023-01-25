<?php

namespace App\controllers\models;


class Gallery {
    public function index() {

        // $dbh = new \PDO('mysql:host=localhost;dbname=testBase', 'root', 'root');
        // $sth = $dbh->query("SELECT * FROM Users");
        // $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        // return $rows;

        $select = new \Core\Select();
        $select-> setTableName('Users');
        return $select->execute();

    }
}

