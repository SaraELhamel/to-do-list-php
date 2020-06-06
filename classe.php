<?php
class User {
  // Properties
  public $id ;
  public $username ;
  public $password;
  public $email;
  public $firstname;
  public $lastname;
  public $photo;
  

  function __construct($id, $username, $password,$email,$firstname, $lastname,$photo) {
    $this->id =$id;
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->photo = $photo;
  }
  public function register()
  {
    $sql= 'INSERT INTO user(username,password,email,firstname,lastname,photo';
    $stmt= $conn->prepare($sql);
    $stmt->execute();
  }
  public function UpdateInformation($username,$email,$firstname,$lastname,$password,$photo)
  {
    include 'connection.php';
    $sql='UPDATE user SET username = :username, password= :password, photo=:photo';
    $stmt= $conn->prepare($sql);
    $stmt->execute(['username' =>$username,'password'=>$password, 'photo'=>$photo,]);
  }
  
  public function getId()
  {
    return $this->id;
  }
  public function setId()
  {
    return $this->$id;
  }
}
class Task {
    // Properties
    public $id;
    public $taskText;
    public $done;
    public $todolist_id;
    
  
    // Methods
    public function Updatetask($id,$taskText,$done,$todolist_id)
    {
      include 'connection.php';
      $sql='UPDATE task SET tasText = :taskText,';
      $stmt= $conn->prepare($sql);
      $stmt->execute(['tasText' =>$taskText]);
    }
    public function Deletetask($id,$taskText,$done,$todolist_id)
    {
      include 'connection.php';
      $sql='DELETE task SET tasText = :taskText,';
      $stmt= $conn->prepare($sql);
      $stmt->execute(['tasText' =>$taskText]);
    }
   
    
  }
  class TodoList {
    // Properties
    public $id;
    public $name;
    public $color;
    public $user_id;
    
  
    // Methods
    public function DeleteTodoList($id,$name,$color,$user_id)
    {
      include 'connection.php';
      $sql='DELETE todo SET todo = :todo,';
      $stmt= $conn->prepare($sql);
      $stmt->execute(['todo' =>$todo]);
    }
    public function Updatename($id,$name,$color,$user_id)
    {
      include 'connection.php';
      $sql='UPDATE name SET name = :name,';
      $stmt= $conn->prepare($sql);
      $stmt->execute(['name' =>$name]);
    }
    public function Changecolor($id,$name,$color,$user_id)
    {
      include 'connection.php';
      $sql='UPDATE color SET color = :color,';
      $stmt= $conn->prepare($sql);
      $stmt->execute(['color' =>$color]);
    }
  }
   
?>