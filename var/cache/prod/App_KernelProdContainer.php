<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWvXo1vK\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWvXo1vK/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerWvXo1vK.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerWvXo1vK\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerWvXo1vK\App_KernelProdContainer([
    'container.build_hash' => 'WvXo1vK',
    'container.build_id' => 'b7154d13',
    'container.build_time' => 1615999379,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWvXo1vK');