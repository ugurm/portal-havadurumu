<?php
namespace kouosl\havadurumu\controllers\console;


/**
 * Default controller for the `havadurumu` module
 */
class DefaultController extends \kouosl\base\controllers\console\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
	public function actionDeneme()
    {
        echo 'deneme';
    }
}
