<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHxDDxiz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHxDDxiz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHxDDxiz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHxDDxiz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHxDDxiz\App_KernelDevDebugContainer([
    'container.build_hash' => 'HxDDxiz',
    'container.build_id' => 'a2fc74e7',
    'container.build_time' => 1713783348,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHxDDxiz');
