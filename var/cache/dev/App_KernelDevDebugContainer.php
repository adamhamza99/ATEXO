<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDuubPkk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDuubPkk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDuubPkk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDuubPkk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDuubPkk\App_KernelDevDebugContainer([
    'container.build_hash' => 'DuubPkk',
    'container.build_id' => '430dd96a',
    'container.build_time' => 1646589165,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDuubPkk');
