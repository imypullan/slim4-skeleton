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
        $query = $this->db->prepare('SELECT * FROM `todo-list` WHERE `completed` = 0;');
        $query->execute();
        return $query->fetchAll();
    }
    public function getCompletedTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `todo-list` WHERE `completed` = 1;');
        $query->execute();
        return $query->fetchAll();
    }
}