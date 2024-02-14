<?php

class Connection{
    public static function connect($config){
        try {

            return new PDO(
                'mysql:host=' .$config['host'] . ';dbname=' .$config['dbname'],
                $config['user'],
                $config['dbpass']
                //"mysql:host=127.0.0.1; dbname=oop_crud", 'root', ''
            );
            echo "I am going to be a great software engineer and I will be implementing object oriented programming in any language of my choice. By the end of 2 months, I should comfortable fit into mid position of PHP developer by God's grace. I pray in Jesus name. Amen.";

            /*
            $string = "mysql:hostname=127.0.0.1;dbname=saturday_crud2";
                $con = new PDO($string, 'root', '');
                return $con;
            */
        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }
}