<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class GradeModel extends Database
{
    // selects all grades from DB
    public function getGrades()
    {
        return $this->select("SELECT * FROM grade ORDER BY id");
    }

    // deletes grade by id from DB
    public function deleteGrade($id)
    {
        return $this->modify("DELETE FROM grade WHERE id = ?", "i", [$id]);
    }

}
?>