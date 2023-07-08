<?php
class db
{
    public $dbhost = "localhost";
    public $dbuser = "root";
    public $dbpassword = "";
    public $dbname = "phpmyadmin";
    public $connection;
    public $dbHost = "localhost";
    public $dbUser = "root";
    PRIVATE STATIC $instance =null;

        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new db;
            }
            return self::$instance;
        }

    public function openconnection()
    {
        $this->connection = new mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
        if ($this->connection->connect_error) {
            echo "ERROR IN THIS CONNECTION " . $this->connection->connect_error;
            return false;
        } else {
            // echo "yayyyyyyy!!!!!!!!!";
            return true;
        }
    }
    public function closeconnection()
    {

        if ($this->connection) {
            $this->connection->close();
        }
    }
    public function select($qry)
    {
        $resultq = $this->connection->query($qry);
        if (!$resultq) {
            echo "ERROR : " . mysqli_error($this->connection);
            return false;
        } else {
            return $resultq->fetch_all(MYSQLI_ASSOC);

            // associative array return one row  fetch_all returns 2d array 
        }

    }
    public function insert($qry)
    {
        $result = $this->connection->query($qry);

        if (!$result) {

            echo "ERROR : " . mysqli_error($this->connection);

            return false;

        } else {

            return $this->connection->insert_id;

            //get the id if increamanted

        }

    }
    public function update($qry)
    {
        $result = $this->connection->query($qry);

        if (!$result) {

            echo "ERROR : " . mysqli_error($this->connection);

            return false;

        } else {

            return true;

            //get the id if increamanted

        }

    }
    public function checkemail($qry)
    {
        $result = $this->connection->query($qry);

        if (!$result) {

            echo "ERROR : " . mysqli_error($this->connection);

            return false;

        } else {

            return $result->fetch_all(MYSQLI_ASSOC);


        }

    }
    public function delete($query)
    {
      $result = $this->connection->query($query);
      if (!$result) {
        echo "Error : " . mysqli_error($this->connection);
        return false;
      } else {
        return $result;
      }
  
    }

}



?>