<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerApiclient
 */

namespace DragonJsonServerApiclient\Controller;

class ApiclientController extends \Zend\Mvc\Controller\AbstractActionController
{
    public function indexAction()
    {
        $config = $this->getServiceLocator()->get('Config');

        $viewModel = new \Zend\View\Model\ViewModel();
        $viewModel
            ->setVariables([
                'application' => $config['dragonjsonserver']['application'],
                'serverurl'   => $config['dragonjsonserver']['serverurl'],
                'apiclient'   => $config['dragonjsonserverapiclient'],
            ])
            ->setTerminal(true);
        return $viewModel;
    }
}
