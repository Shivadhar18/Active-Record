<?php

class Manage
 {
  public static function autoload($class)
  {
  include $class.'.php';
  }
 }
spl_autoload_register(array('Manage','autoload'));
 ini_set('display_errors', 'On');
 error_reporting(E_ALL);
 $obl=new main();
 
 class main
 {
  public function __construct()
   {
    echo 'Existing Accounts Records.<br>';
    accounts::findAll();
    echo '<br>';
    echo 'Creating new id 12 in accounts table.<br>';
    $record = new account();
    $record->id='';
    $record->email='abc@gmail.com';
    $record->fname='abc';
    $record->lname='xyz';
    $record->phone='974-555-5555';
    $record->birthday='2000-05-05';
    $record->gender='male';
    $record->password='123';
    $record->save();
    echo 'After adding record.<br>';
    accounts::findAll();
    echo '<br>';
    echo 'Searching new created id 12 in accounts table.<br>';
    $id=12;
    accounts::findOne($id);
    echo '<br>';
    echo 'updating details of id=12.<br>';
    $record = new account();
    $record->id=12;
    $record->email='xyz@gmail.com';
    $record->fname='qqq';
    $record->lname='www';
    $record->phone='923-111-1111';
    $record->birthday='1999-02-03';
    $record->gender='female';
    $record->password='123';
    $record->save();
    echo 'After update.<br>';
    accounts::findOne($id);
    echo '<br>';
    //print_r($record1);
   
   echo 'To delete id=12 from accounts.<br>';
   $record=new account();
   $record->id=12;
   $record->delete();
   echo 'After Delete id=12.<br>';
   accounts::findAll();
   echo '<br>';
   echo'------------';
   echo '<br>';

   echo 'Existing Todos Records.<br>';
   todos::findAll();
   echo '<br>';
   echo 'Creating new id 13 in todos table.<br>';
   $record = new todo();
   $record->id='';
   $record->owneremail='abc@gmail.com';
   $record->ownerid='7';
   $record->createddate='2017-09-09 00:00:00';
   $record->duedate='2017-10-10 00:00:00';
   $record->message='Active Record';
   $record->isdone='0';
   $record->save();
   echo 'After adding record.<br>';
   todos::findAll();
   echo '<br>';
   echo 'Searching new created id 12 in todos table.<br>';
   $id=12;
   todos::findOne($id);
   echo '<br>';
   echo 'updating details of id=13.<br>';
   $record = new todo();
   $record->id=12;
   $record->owneremail='xyz@gmail.com';
   $record->ownerid='2';
   $record->createddate='2017-07-07 00:00:00';
   $record->duedate='2017-08-08 00:00:00';
   $record->message='Active Record update';
   $record->isdone='1';
   $record->save();
   echo 'After update.<br>';
   todos::findOne($id);
   echo '<br>';
   echo 'To delete id=12 from todos.<br>';
   $record=new todo();
   $record->id=12;
   $record->delete();
   echo 'After Delete id=12.<br>';
   todos::findAll();
   echo '<br>';
   }
  }
?>
