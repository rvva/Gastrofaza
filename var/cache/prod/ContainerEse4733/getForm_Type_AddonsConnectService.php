<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.addons_connect' shared service.

return $this->services['form.type.addons_connect'] = new \PrestaShopBundle\Form\Admin\Type\AddonsConnectType(${($_ = isset($this->services['prestashop.adapter.admin.data_provider.addons']) ? $this->services['prestashop.adapter.admin.data_provider.addons'] : $this->getPrestashop_Adapter_Admin_DataProvider_AddonsService()) && false ?: '_'}->isAddonsAuthenticated(), ${($_ = isset($this->services['prestashop.adapter.admin.data_provider.addons']) ? $this->services['prestashop.adapter.admin.data_provider.addons'] : $this->getPrestashop_Adapter_Admin_DataProvider_AddonsService()) && false ?: '_'}->getAddonsEmail()["username_addons"]);
