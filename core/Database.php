<?php

class Database
{
    private $__conn;
    use QueryBuilder;
    //Kết Nối Database
    public function __construct()
    {
        global $db_config;
        $this->__conn = Connection1::getInstance($db_config);
    }
    //Thêm Dữ Liệu
    function insertData($table, $data){
        if (!empty($data)){
            $fieldStr = '';
            $valueStr = '';
            foreach ($data as $key=>$value){
                $fieldStr.=$key.',';
                $valueStr.="'".$value."',";
            }
            $fieldStr = rtrim($fieldStr, ',');
            $valueStr = rtrim($valueStr, ',');
            $sql = "INSERT INTO $table($fieldStr) VALUE ($valueStr)";
            $status = $this->query($sql);
            if($status){
                return true;
            }
        }
        return false;
    }
    //Sửa Dữ Liệu
    function updateData($table, $data, $condition=''){
        if(!empty($data)){
            $updateStr = '';
            foreach ($data as $key=>$value){
                $updateStr.="$key='$value',";
            }
            $updateStr = rtrim($updateStr, ',');

            if(!empty($condition)){
                $sql= "UPDATE $table SET $updateStr WHERE $condition";
            }else{
                $sql= "UPDATE $table SET $updateStr";
            }

            $status = $this->query($sql);

            if($status){
                return true;
            }
        }
        return false;
    }
    //Xoá Dữ Liệu
    function deleteData($table,$condition=''){
        if(!empty($condition)){
            $sql = "DELETE FROM `$table` WHERE $condition";
        }else{
            $sql = "DELETE FROM `$table`";
        }

        $status = $this->query($sql);

        if($status){
            return true;
        }
        return false;
    }
    //Truy Vấn Câu Lệnh SQL
    function query($sql){
        try {
            $statement = $this->__conn->prepare($sql);
            $statement->execute();
            return $statement;
        }catch (Exception $exception){
            $mess = $exception->getMessage();
            $data['message'] = $mess;
            App::$app->loadError('database',$data);
            die();
        }
    }
    //Trả Về ID Mới Nhất sau khi đã Insert
    function lastInsertId(){
        return $this->__conn->lastInsertId();
    }

}