<?php
session_start();
require_once 'C:\xampp\htdocs\bug\BugHub\Admin\admin\staff (1).php';
require_once 'C:\xampp\htdocs\bug\BugHub\controller\DBcontroller.php';
require_once 'C:\xampp\htdocs\bug\BugHub\Admin\manage_staff\staff.php';
require_once 'C:\xampp\htdocs\bug\BugHub\models\person.php';
require_once 'C:\xampp\htdocs\bug\BugHub\models\message.php';
require_once 'C:\xampp\htdocs\bug\BugHub\Admin\admin\project_controller.php';
if ($_SESSION["user_role"] != 'admin') {
   header("location:../../Login/login.php");
}
//echo $_SESSION["user_role"];
class admin_controller
{

   public $db ;

   public function addStaff(person $staff)
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $q = "select * from account where ID = $staff->id ;";
         $result = $this->db->select($q);
         if (!$result) {
            $query = "insert into account values ( $staff->id , '$staff->email' , '$staff->password' ,$staff->age , '$staff->roleid' , '$staff->name' , '$staff->gender' , $staff->phone)";
            $query2 = "insert into staff values ( $staff->id , '$staff->name' , 0 ) ";
            $this->db->insert($query);
            $this->db->insert($query2);
            return true;
         } else {
            return false;
         }
      } else {
         echo "Error in data base connection";
         return false;
      }

   }
   public function deleteStaff($id)
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query1 = "select * from staff where ID = $id ";
         $result = $this->db->select($query1);
         if ($result) {
            $query2 = "delete staff , account from staff inner join account on staff.ID = account.ID where staff.ID = $id ";
            return $this->db->delete($query2);
         } else {
            return false;
         }
      } else {
         echo "Error in Database Connection";
         return false;
      }
   }
   public function getAllStaff()
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query = " select ID , Name , role , `phone number` from account where role = 'staff';";
         return $this->db->select($query);
      } else {
         echo "Error in Database Connection";
         return false;
      }
   }
   public function sendmessage(msgs $m)
   {

      $this->db= db::getInstance();

      if ($this->db->openconnection()) {

         //    $cust_id = $_SESSION["user_id"];
         $f_C = $m->getContent();
         $f_d = $m->getDate();
         $cid = $m->getCustid();
         //echo $f_C . " from cont :<br>       " . $f_d . "<br>" . $cid . "<br>";
         $query = "INSERT INTO `message`( `content`, `date`, `Sign`, `Customer_ID`) VALUES ('$f_C','$f_d',2,$cid)";
         $resultq = $this->db->insert($query);
         if ($resultq != false) {
            $_SESSION["feedback"] = "sent";
            //echo"yayyyyyyy";
            // $this->db->closeconnection();
            return true;

         } else {
            //   echo "didnt work";
            $_SESSION["feedback"] = "didnt work";
            // $this->db->closeconnection();
            return false;

         }

      } else {
         echo "error connectyion ";
      }
   }
   public function get_msg()
   {
      //  echo $id;
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query = "SELECT  `Customer_ID`,`content` FROM `message` WHERE  `sign`=1";
         $result = $this->db->select($query);
         if (count($result) != 0) {
            return $this->db->select($query);

         } else {
            //  echo "there is no bug for you !!";
            return false;
         }
      } else {
         echo "Error in Database Connection";

         return false;
      }
   }
   public function add_project(project_controller $project)
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $check_staff = "SELECT * FROM `staff` WHERE `ID`=$project->staff_p";
         $check_cus = "SELECT * FROM `customer` WHERE `ID`=$project->customer_p";
         $check_bug = "SELECT * FROM `bug` WHERE `ID`=$project->bug_p and `customer_id`=$project->customer_p";
         if (
            count($this->db->select($check_staff)) != 0 && count($this->db->select($check_bug))
            != 0 && count($this->db->select($check_cus)) != 0
         ) {
            $query = "INSERT INTO `project` (`State`, `Staff_ID`, `Customer_ID`, `Bug_ID`) VALUES(" . $project->P_State . "," . $project->staff_p . "," . $project->customer_p . "," . $project->bug_p . ")";
            if (mysqli_query($this->db->connection, $query)) {
               $pro_id = mysqli_insert_id($this->db->connection);
               $project->P_ID = $pro_id;
               $query = "UPDATE bug SET State = 1,`Staff_ID`=" . $project->staff_p . " WHERE ID =" . $project->bug_p . ";";
               mysqli_query($this->db->connection, $query);
            } else {
               echo "Error in data base connection";
               return false;
            }
         } else {
            ?>
            <script>
               fun();
               function fun() {
                  alert("wrong entries!!");
               }
            </script>
            <?php
         }
      }
   }

   public function Search_for_Project($p_id)
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query = "SELECT * FROM `project` WHERE ID=$p_id;";
         $res = $this->db->connection->query($query);
         //
         //if ($res->num_rows >0){
         // while ($row= $res->fetch_assoc()){
         //     foreach ($columns as $c)
         //     echo $row[$c];
         //  }
         //}
         return $res;
      } else {
         echo "Error in data base connection";
         return false;
      }
   }

   public function view_projects()
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query = "SELECT * FROM `project` ;";
         $res = $this->db->connection->query($query);
         return $res;
      } else {
         echo "Error in data base connection";
         return false;
      }
   }

   public function deleteproject($p_id)
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query = "delete from project where id = $p_id ";
         return $this->db->delete($query);
      } else {
         echo "Error in Database Connection";
         return false;
      }
   }

   public function set_project_state($p_id, $p_state)
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query = "UPDATE project SET State = $p_state WHERE ID =$p_id;";
         mysqli_query($this->db->connection, $query);
         //return $this->db->insert($query);
      } else {
         echo "Error in Database Connection";
         return false;
      }
   }


   public function view_bugs()
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query = "SELECT * FROM bug ;";
         $res = $this->db->connection->query($query);
         return $res;
      } else {
         echo "Error in data base connection";
         return false;
      }
   }
   public function view_feedback()
   {
      $this->db= db::getInstance();
      if ($this->db->openconnection()) {
         $query = "SELECT * FROM feedback ;";
         $res = $this->db->connection->query($query);
         return $res;
      } else {
         echo "Error in data base connection";
         return false;
      }
   }
}
?>