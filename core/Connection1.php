<?php
class Connection1
{
    private static $instance = null, $conn = null;

    private function __construct($config)
    {
        try{
            $dsn = 'mysql:dbname='.$config['db'].';host='.$config['host'];
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            $con = new PDO($dsn, $config['user'], (empty($config['pass'])) ? null : $config['pass'] , $options);
            self::$conn = $con;
        }catch(Exception $exception){
            $mess = $exception->getMessage();
            App::$app->loadError('database',['message'=>$mess]);
//            if(preg_match('/Access denied for user/', $mess)){
//                die('Lỗi Kết Nối Cơ Sở Dữ Liệu');
//            }
//
//            if(preg_match('/Unknown database/', $mess)){
//                die('Không Tìm Thấy Cơ Sở Dữ Liệu');
//            }
            die();
        }
    }

    public static function getInstance($config)
    {
        if (self::$instance == null) {
            $connection = new Connection1($config);
            self::$instance = self::$conn;
        }

        return self::$instance;
    }
}
