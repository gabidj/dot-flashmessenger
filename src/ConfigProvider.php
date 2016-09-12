<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-flashmessenger
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
 */

namespace DotKernel\DotFlashMessenger;


use DotKernel\DotFlashMessenger\Factory\FlashMessengerFactory;
use DotKernel\DotFlashMessenger\Factory\FlashMessengerMiddlewareFactory;
use DotKernel\DotFlashMessenger\Factory\FlashMessengerOptionsFactory;
use DotKernel\DotFlashMessenger\Options\FlashMessengerOptions;

/**
 * Class ConfigProvider
 * @package DotKernel\DotFlashMessenger
 */
class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencyConfig(),

            'dot_flashmessenger' => [
                'namespace' => 'dot_flashmessenger',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getDependencyConfig()
    {
        return [
            'factories' => [
                FlashMessengerInterface::class => FlashMessengerFactory::class,

                FlashMessengerMiddleware::class => FlashMessengerMiddlewareFactory::class,

                FlashMessengerOptions::class => FlashMessengerOptionsFactory::class,
            ],
        ];
    }
}