<?php

namespace Adeliom\EasyBlogBundle;

use Adeliom\EasyBlogBundle\DependencyInjection\EasyBlogExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EasyBlogBundle extends Bundle
{
    /**
     * @return ExtensionInterface|null The container extension
     */
    public function getContainerExtension()
    {
        return new EasyBlogExtension();
    }
}
