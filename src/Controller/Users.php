<?php


namespace App\Controller;


use App\Model\UsersModel;

class Users extends Table
{
    protected string $tableName = "users";

    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new UsersModel($config);

    }
}