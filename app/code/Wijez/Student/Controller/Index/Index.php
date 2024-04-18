<?php

namespace Wijez\Student\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
  public function execute()
  {
    $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    $result->getConfig()->getTitle()->set('My module page');
    return $result;
  }
}
