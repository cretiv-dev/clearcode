<?php
namespace Clearcode;
require '../vendor/autoload.php';

use ImporterStub\ImporterInterface;
use Psr\Log\LoggerInterface;
use Smarty;

class Application implements ImporterInterface
{
    protected static $_instance = null;
    
    private $smarty;
    
    public static function getInstance() {
        if(self::$_instance != null) {
            return self::$_instance;
        } else {
            return self::$_instance = new self();
        }
    }


    public function read($sourceType, \SplFileInfo $file) {
        
    }

    public function write($destinationType) {
        
    }
    
    public function setLogger(LoggerInterface $logger) {
        
    }
    public function assigVariableToView($name, $variable) {
        $this->smarty->assign($name, $variable);
    }

    public function setTemplate($template) {
        $this->smarty->display($template);
    }


    private function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(__DIR__.'/public/views');
    }
}
