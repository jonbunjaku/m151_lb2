<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
 
class UserModel extends Database
{
    // selects all users from DB
    public function getUsers()
    {
        return $this->select("SELECT * FROM user ORDER BY id");
    }

    // deletes user by id from DB
    public function deleteUser($id)
    {
        return $this->modify("DELETE FROM user WHERE id = ?;", ["i", $id]);
    }
}