<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHMrxx70\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHMrxx70/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHMrxx70.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHMrxx70\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHMrxx70\App_KernelDevDebugContainer([
    'container.build_hash' => 'HMrxx70',
    'container.build_id' => '67017b78',
    'container.build_time' => 1687269256,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHMrxx70');
