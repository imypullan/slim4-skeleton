<?php
namespace App\Models;
class TasksModel {
    protected \PDO $db;
    /**
     * TasksModel constructor.
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    /**
     * @return DB array
     */
    public function getUncompletedTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `todo-list` WHERE `completed` = 0 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }
    /**
     * @return array
     */
    public function getCompletedTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `todo-list` WHERE `completed` = 1 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @param $newTask
     */
    public function addTask($newTask)
    {
        $query = $this->db->prepare('INSERT INTO `todo-list` (`task_name`) VALUES (:task_name);');
        $query->bindParam(':task_name', $newTask);
        $query->execute();
    }
    /**
     * @param $completedTask
     */
    public function markTaskAsCompleted($completedTask)
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `completed` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $completedTask);
        $query->execute();
    }
    /**
     * @param $deletedTask
     */
    public function deleteTask($deletedTask)
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `deleted` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $deletedTask);
        $query->execute();
    }
    /**
     * @param $taskForEdit
     * @return array
     */
    public function getTaskForEdit($taskForEdit)
    {
        $query = $this->db->prepare('SELECT `id`, `task_name`, `completed` FROM `todo-list` WHERE `id` = :id;');
        $query->bindParam(':id', $taskForEdit);
        $query->execute();
        return $query->fetch();
    }
    /**
     * @param $taskForEdit
     */
    public function updateDB($taskForEdit)
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `task_name` = :task_name WHERE `id` = :id;');
        $query->bindParam(':id', $taskForEdit['id']);
        $query->bindParam(':task_name', $taskForEdit['task_name']);
        $query->execute();
    }
}