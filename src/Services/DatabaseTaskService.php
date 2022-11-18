<?php

class DatabaseTaskService
{
    private PDO $db;

    public function construct(){
        $this->db = Database::get();
    }

    public function get(int $id): ?TaskEntity
    {
        // TODO: Implement get() method.
        $userInfo = $db->prepare("Select * from tache where id = :id");
        $userInfo->execute(['id'=>$id]);
        $userInfos=$userInfo->fetchAll();
    }
    public function list(array $args = []): array
    {
        // TODO: Implement list() method.
    }
    public function create(TaskEntity $task): TaskEntity
    {
        // TODO: Implement create() method.
    }
    public function update(TaskEntity $task): TaskEntity
    {
        // TODO: Implement update() method.
    }public function delete(int $id): void
{
    // TODO: Implement delete() method.
}}
