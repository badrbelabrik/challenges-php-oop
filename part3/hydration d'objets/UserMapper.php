<?php

class UserMapper
{
    public function mapRowToUser(array $row):User{
        return new User($row['id'],$row['name'],$row['email']);
    }

    public function mapRowsToUsers(array $rows):array{
        $users = [];

        foreach($rows as $row){
            $users[] = $this->mapRowToUser($row);
        }
        return $users;
    }
}