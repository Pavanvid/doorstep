<?php
    // crud -- create,read,unedrstand,delete...using classes oops
    class crud{
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }
        public function insertcustomers($fname,$email,$contact,$addres,$grocery,){
            try{
                //code
                $sql = "INSERT INTO door_step(Customer_Name,Email_Address,Contact_Number,Full_Address,Ordered_items) VALUES (:fname,:email,:contact,:addres,:grocery)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':addres',$addres);
                $stmt->bindparam(':grocery',$grocery);
               
                $stmt->execute();
                return true;
             } catch (PDOException $e){
                    echo $e->getMessage();
                    return False;
             }
        }
        public function customers(){
            try{
            $sql = "SELECT * FROM `door_step`";
            $result = $this->db->query($sql);
            return $result;
        }
            catch (PDOException $e){
            echo $e->getMessage();
            return False;
     }
    }

        public function customer_details($id){
        try{
            $sql = "select * from door_step where Door-step_id = id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            //$stmt->execute();
            $result = $stmt->execute();
            return $result;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    }
?>