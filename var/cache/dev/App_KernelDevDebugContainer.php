<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWBRZiN9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWBRZiN9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWBRZiN9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWBRZiN9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWBRZiN9\App_KernelDevDebugContainer([
    'container.build_hash' => 'WBRZiN9',
    'container.build_id' => 'ad4136cb',
    'container.build_time' => 1684249017,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWBRZiN9');
