<?php
class Student{
    private $id;
    private $name;

    public static $file_path = 'data.txt';
    function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }
      
    function cvs(){
        return $this->id.",".$this->name.PHP_EOL;
    }

    function save(){
        file_put_contents(self::$file_path,$this->cvs(),FILE_APPEND);
    }

    public static function display(){
        $students = file(self::$file_path);
        echo"<b>ID | NAME</b><br>";
        foreach($students as $student){
            list($id,$name)=explode(",",trim($student));
            echo"$id | $name<br>";
        }
    }
}
?>