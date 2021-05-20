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
        $query = $this->db->prepare('SELECT * FROM `todo-list` WHERE `completed` = 0 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }
    public function getCompletedTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `todo-list` WHERE `completed` = 1 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }
    public function addTask($newTask)
    {
        $query = $this->db->prepare('INSERT INTO `todo-list` (`task_name`) VALUES (:task_name);');
        $query->bindParam(':task_name', $newTask);
        $query->execute();
    }
    public function markTaskAsCompleted($completedTask)
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `completed` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $completedTask);
        $query->execute();
    }
    public function deleteTask($deletedTask)
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `deleted` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $deletedTask);
        $query->execute();
    }
    public function getTaskForEdit($taskForEdit)
    {
        $query = $this->db->prepare('SELECT `id`, `task_name` FROM `todo-list` WHERE `id` = :id;');
        $query->bindParam(':id', $taskForEdit);
        $query->execute();
        return $query->fetch();
    }
    public function updateDB($taskForEdit)
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `task_name` = :task_name WHERE `id` = :id;');
        $query->bindParam(':id', $taskForEdit['id']);
        $query->bindParam(':task_name', $taskForEdit['task_name']);
        $query->execute();
    }
}