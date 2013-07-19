<?php

/**
 * Hours form base class.
 *
 * @method Hours getObject() Returns the current form's model object
 *
 * @package    myday
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHoursForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'hours'      => new sfWidgetFormInputText(),
      'item_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Items'), 'add_empty' => true, 'table_method' => 'getItems')),
      'date'       => new sfWidgetFormDate(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hours'      => new sfValidatorInteger(),
      'item_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Items'), 'required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('hours[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Hours';
  }

}
