<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSeibXqO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSeibXqO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSeibXqO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSeibXqO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSeibXqO\App_KernelDevDebugContainer([
    'container.build_hash' => 'SeibXqO',
    'container.build_id' => '419fe114',
    'container.build_time' => 1618259273,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSeibXqO');
