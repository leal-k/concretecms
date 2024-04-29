<?php
namespace Concrete\Controller\SinglePage\Dashboard\Extend;

use Concrete\Core\Page\Controller\MarketplaceDashboardPageController;

class Addons extends MarketplaceDashboardPageController
{
    public function getRedirectLocation(): string
    {
        return '/addons';
    }
}
