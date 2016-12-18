<?php 


class Topic
{

  //Init DB Variable
	private $db;



	/*
	Constructor

*/
	public function __construct()
	{
		$this->db = new Database;
	}

/*
  Get All Topics
*/	
  public function getAllTopics()
  {
  	$this->db->query("SELECT topics.*,users.username,users.avatar,categories.name FROM topics
  		INNER JOIN users ON topics.user_id = users.id
  		INNER JOIN categories ON topics.category_id = categories.id
  		ORDER BY create_date DESC");


  	//Assign Result Set
  	$results = $this->db->resultset();

  	return $results;
  }


/*
     Get total # of Topics

  */
    public function getTotalTopics()
    {

      $this->db->query('SELECT * FROM topics');
      $rows = $this->db->resultset();
      return $this->db->rowCount();

    }



/*
     Get total # of Topics

  */
    public function getTotalCategories()
    {

      $this->db->query('SELECT * FROM categories');
      $rows = $this->db->resultset();
      return $this->db->rowCount();

    }



  /*
     Get total # of Replies

  */
    public function getTotalReplies($topic_id)
    {

      $this->db->query('SELECT * FROM replies WHERE topic_id ='.$topic_id);
      $rows = $this->db->resultset();
      return $this->db->rowCount();

    }  




   /*
  Get Category by id
*/  
  public function getByCategory($category_id)
  {
    $this->db->query("SELECT topics.*,categories.*,users.username,users.avatar,categories.name FROM topics
      INNER JOIN categories ON topics.category_id = categories.id
       INNER JOIN users ON topics.user_id = users.id
      WHERE topics.category_id= :category_id");

    $this->db->bind(':category_id', $category_id);

    //Assign Result Set
    $results = $this->db->resultset();

    return $results;
  }




  /*
     Get Category by id

  */
    public function getCategory($category_id)
    {

      $this->db->query('SELECT * FROM categories WHERE id= :category_id');
      $this->db->bind(':category_id', $category_id);
      // Assign Row
      $row = $this->db->single();
      return $row;

    }


    /*
    Create Topic
*/
    public function create($data)
    {

      // Insert Query
      $this->db->query("INSERT INTO topics(category_id, user_id, title, body, last_activity)
                       VALUES(:category_id, :user_id, :title, :body, :last_activity)");


      // Bind Values
      $this -> db->bind(':category_id', $data['category_id']);
      $this -> db->bind(':user_id', $data['user_id']);
      $this -> db->bind(':title', $data['title']);
      $this -> db->bind(':body', $data['body']);
      $this -> db->bind(':last_activity', $data['last_activity']);


      //Execute
      if($this->db->execute())
      {
        return true;
      }
      else
      {
        return false;
      }


    }


}
?>