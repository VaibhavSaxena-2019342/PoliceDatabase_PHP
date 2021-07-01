<?php
	class Record{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		// Get All Jobs
		public function getAllRecs(){
			$this->db->query("SELECT * FROM convicts ORDER BY DOA DESC ");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get Categories
		public function getCategories(){
			$this->db->query("SELECT * FROM categories");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get Jobs By Category
		public function getByCategory($category){
			$this->db->query("SELECT convicts.*
						FROM convicts,categories
						WHERE convicts.CRIME_TYPE = categories.Category_Name 
						AND categories.Category_ID = :cat
						ORDER BY DOA DESC 
						");
			
			$this->db->bind(':cat', $category);

			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get category
		public function getCategory($category_id){
			$this->db->query("SELECT * FROM categories WHERE Category_ID = :category_id");

			$this->db->bind(':category_id', $category_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		// Get Job
		public function getRec($id){
			$this->db->query("SELECT * FROM convicts WHERE ID = :id");

			$this->db->bind(':id', $id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		// Create Job
		public function create($data){
			//Insert Query
			$this->db->query("INSERT INTO convicts (NAME, CRIME_TYPE)
			VALUES (:name,:crime)");
			// Bind Data
			$this->db->bind(':name', $data['NAME']);
			$this->db->bind(':crime', $data['CRIME_TYPE']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		public function create2($data){
			//Insert Query
			$this->db->query("INSERT INTO categories (Category_Name)
			VALUES (:crime)");
			// Bind Data
			$this->db->bind(':crime', $data['CRIME_TYPE']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		// Delete Job
		public function delete($id){
			//Insert Query
			$this->db->query("DELETE FROM convicts WHERE ID = $id");
			
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		// Update Job
		public function update($id, $data){
			//Insert Query
			$this->db->query("UPDATE convicts
				SET 
				NAME = :nam,
				CRIME_TYPE = :crime
				WHERE ID = :idd");
			// Bind Data
			$this->db->bind(':nam', $data['NAME']);
			$this->db->bind(':crime', $data['CRIME_TYPE']);
			$this->db->bind(':idd', $id);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	}