<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1DjnS8N\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1DjnS8N/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1DjnS8N.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1DjnS8N\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1DjnS8N\App_KernelDevDebugContainer([
    'container.build_hash' => '1DjnS8N',
    'container.build_id' => '35fca90c',
    'container.build_time' => 1647790944,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1DjnS8N');
