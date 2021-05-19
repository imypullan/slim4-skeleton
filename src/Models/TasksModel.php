<?php
namespace App\Models;
class TasksModel {
    protected $db;
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    public function getUncompletedTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `todo-list`;');
        $query->execute();
        return $query->fetchAll();
    }
}