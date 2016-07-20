<?php
namespace Clearcode;
require '../vendor/autoload.php';

use ImporterStub\ImporterInterface;
use Psr\Log\LoggerInterface;

class Application implements ImporterInterface
{
    public function read($sourceType, \SplFileInfo $file) {
        
    }

    public function write($destinationType) {
        
    }
    
     public function setLogger(LoggerInterface $logger) {
        
    }
}
