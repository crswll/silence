<?php

namespace Craft;

class SilencePlugin extends BasePlugin
{
  public function getName()
  {
    return Craft::t('Silence');
  }

  public function getVersion()
  {
    return '1.0';
  }

  public function getDeveloper()
  {
    return 'Bill Criswell';
  }

  public function getDeveloperUrl()
  {
    return 'https://github.com/crswll';
  }

  public function init()
  {
    craft()->log->removeRoute('WebLogRoute');
    craft()->log->removeRoute('ProfileLogRoute');
  }

}
