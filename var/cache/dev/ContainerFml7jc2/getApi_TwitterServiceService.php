<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'api.twitter_service' shared service.

include_once $this->targetDirs[3].'/src/AppBundle/Services/TwitterService.php';

return $this->services['api.twitter_service'] = new \AppBundle\Services\TwitterService(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'});