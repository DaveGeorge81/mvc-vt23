<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2ACNx0W\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2ACNx0W/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2ACNx0W.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2ACNx0W\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2ACNx0W\App_KernelDevDebugContainer([
    'container.build_hash' => '2ACNx0W',
    'container.build_id' => 'df59aec2',
    'container.build_time' => 1683840055,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2ACNx0W');
