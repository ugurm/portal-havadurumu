<?php
namespace kouosl\havadurumu\controllers\console;
use console\controllers\BasicController;

    class TestController extends BasicController
{


    public function actionTest()
    {	
		$controller = new TestController('basic', $this->module);
        $controller->actionIndex();
		
        

    }

}