<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_message.reply_form.factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\message-bundle\\FormFactory\\AbstractMessageFormFactory.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\message-bundle\\FormFactory\\ReplyMessageFormFactory.php';

return $this->services['fos_message.reply_form.factory'] = new \FOS\MessageBundle\FormFactory\ReplyMessageFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'}, 'FOS\\MessageBundle\\FormType\\ReplyMessageFormType', 'message', 'FOS\\MessageBundle\\FormModel\\ReplyMessage');
