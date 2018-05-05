<?php
class User extends CI_Model {

        public $user_id;
        public $username;
        public $password;
		public $first_name;
		public $status;

    
        public function get_all()
        {
            $this->load->database();
            $query = $this->db->get('user');
            return $query->result();
        }
		
		public function get_count()
        {
            $this->load->database();
            $query = $this->db->get('user');
            return $query->num_rows();
        }

		public function get($id){
			$this->load->database();
			$this->db->where('user_id',$id);
            $query = $this->db->get('user');
            return $query->result();
		}
    
        public function insert_entry()
        {
            $this->load->database();
            $query = $this->db->get('user');
            $this->username = $_POST['username'];
            $this->first_name = $_POST['first_name'];
            $this->password = $_POST['password'];
            $this->status = $_POST['status'];
            $this->db->insert('user', $this);
            $insert_id = $this->db->insert_id();

            return $insert_id;
        }
    
        public function delete_entry($id){
            $this->load->database();
            $this->user_id = $id;
            $this->db->where('user_id',$this->user_id);
            $this->db->delete('user');
            if($this->db->affected_rows()>0){ 
                return $this->user_id;
            }else{
               return false; 
            }
               
        }
        
        public function getValidLogins($username, $password){
            $this->load->database();
			$array = array('username' => $username, 'password' => $password);
			$this->db->where($array);
            $query = $this->db->get('user');
            $result = $query->result();
            
            return (int)($result[0]->user_id);
        }

        public function update_entry($user, $id)
        {
			$this->load->database();
            $this->user_id = $id;
            $this->username = $user['username'];
            $this->first_name = $user['first_name'];
            $this->password = $user['password'];
            $this->status = $user['status'];
			
			$this->db->where('user_id',$id);
            $this->db->update('user', $this);
			return $this->user_id;
        }

}