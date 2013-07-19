<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Hours', 'doctrine');

/**
 * BaseHours
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $hours
 * @property integer $item_id
 * @property date $date
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Items $Items
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method integer   getHours()      Returns the current record's "hours" value
 * @method integer   getItemId()     Returns the current record's "item_id" value
 * @method date      getDate()       Returns the current record's "date" value
 * @method timestamp getCreatedAt()  Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()  Returns the current record's "updated_at" value
 * @method Items     getItems()      Returns the current record's "Items" value
 * @method Hours     setId()         Sets the current record's "id" value
 * @method Hours     setHours()      Sets the current record's "hours" value
 * @method Hours     setItemId()     Sets the current record's "item_id" value
 * @method Hours     setDate()       Sets the current record's "date" value
 * @method Hours     setCreatedAt()  Sets the current record's "created_at" value
 * @method Hours     setUpdatedAt()  Sets the current record's "updated_at" value
 * @method Hours     setItems()      Sets the current record's "Items" value
 * 
 * @package    myday
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHours extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hours');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('hours', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('item_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Items', array(
             'local' => 'item_id',
             'foreign' => 'id'));
    }
}