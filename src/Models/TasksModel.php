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
    public function getUncompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT * FROM `todo-list` WHERE `completed` = 0 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }
    /**
     * @return DB array
     */
    public function getCompletedTasks(): array
    {
        $query = $this->db->prepare('SELECT * FROM `todo-list` WHERE `completed` = 1 AND `deleted` = 0;');
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @param $newTask
     * @return bool
     */
    public function addTask($newTask): bool
    {
        $query = $this->db->prepare('INSERT INTO `todo-list` (`task_name`) VALUES (:task_name);');
        $query->bindParam(':task_name', $newTask);
        if($query->execute()) {
            return true;
        }
        return false;
    }
    /**
     * @param $completedTask
     * @return bool
     */
    public function markTaskAsCompleted($completedTask): bool
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `completed` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $completedTask);
        if($query->execute()) {
            return true;
        }
        return false;
    }
    /**
     * @param $deletedTask
     * @return bool
     */
    public function deleteTask($deletedTask): bool
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `deleted` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $deletedTask);
        if($query->execute()) {
            return true;
        }
        return false;
    }
    /**
     * @param $taskForEdit
     * @return array
     */
    public function getTaskForEdit($taskForEdit): array
    {
        $query = $this->db->prepare('SELECT `id`, `task_name`, `completed` FROM `todo-list` WHERE `id` = :id;');
        $query->bindParam(':id', $taskForEdit);
        $query->execute();
        return $query->fetch();
    }
    /**
     * @param $taskForEdit
     * @return bool
     */
    public function updateDB($taskForEdit): bool
    {
        $query = $this->db->prepare('UPDATE `todo-list` SET `task_name` = :task_name WHERE `id` = :id;');
        $query->bindParam(':id', $taskForEdit['id']);
        $query->bindParam(':task_name', $taskForEdit['task_name']);
        if($query->execute()) {
            return true;
        }
        return false;
    }
}