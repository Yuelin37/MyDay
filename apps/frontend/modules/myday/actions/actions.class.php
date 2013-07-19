<?php

/**
 * myday actions.
 *
 * @package    myday
 * @subpackage myday
 * @author     Yuelin Yan
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mydayActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  public function executeShow($request)
  {
  
  }
  
  public function executeAddHours($request)
  {
  // Define the form
		$this->formAddHours = new HoursForm();
	
		// Define the form
		$this->formAddHours->getWidgetSchema()->setNameFormat('hours[%s]');
	
		// Deal with the request
		if ($request->isMethod('post'))
		{
			$this->formAddHours->bind($request->getParameter('hours'));
			if ($this->formAddHours->isValid())
			{
				// Handle the form submission
				$hours = $this->formAddHours->save();

	
				$this->redirect('myday/show');
			}
  		}
  }
}
