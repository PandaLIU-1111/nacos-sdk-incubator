<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\NacosSdk;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'listeners' => [
            ],
            'processes' => [
            ],
            'dependencies' => [
            ],
            'annotations' => [],
            'publish' => [
                [
                    'id' => 'nacos',
                    'description' => 'The config for nacos.',
                    'source' => __DIR__ . '/../publish/nacos.php',
                    'destination' => BASE_PATH . '/config/autoload/nacos.php',
                ],
            ],
        ];
    }
}
