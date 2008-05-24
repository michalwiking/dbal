<?php
class CmsPhonenumber extends Doctrine_Entity
{
  public static function initMetadata($class)
  {
      $class->mapColumn('user_id', 'integer', 4);
      $class->mapColumn('phonenumber', 'string', 50, array('primary' => true));
  }
}