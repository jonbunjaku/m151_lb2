<?php
/*class Database
{
    protected $connection = null;

    public function __construct()
    {
        try {
            $this->connection = new mysqli("44.211.235.166", "admin", "password.123", "m151");

            if (mysqli_connect_errno()) {
                throw new Exception("Could not connect to database.");
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function select($query = "", $types = "", $params = [])
    {
        try {
            $stmt = $this->executeStatement($query, $types, $params);
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();

            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }

    public function modify($query = "", $types = "", $params = [])
    {
        try {
            $stmt = $this->executeStatement($query, $types, $params);
            $stmt->close();

            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
    }
    return false;
    }

    private function executeStatement($query = "", $types = "", $params = [])
    {
        try {
            $stmt = $this->connection->prepare($query);

            if ($stmt === false) {
                throw new Exception("Unable to do prepared statement: " . $query);
            }

            if ($params) {
                $stmt->bind_param($types, ...$params);
            }

            $stmt->execute();

            return $stmt;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}*/
