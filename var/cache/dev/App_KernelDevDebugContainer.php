<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVmNNibc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVmNNibc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVmNNibc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVmNNibc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVmNNibc\App_KernelDevDebugContainer([
    'container.build_hash' => 'VmNNibc',
    'container.build_id' => '80b5c549',
    'container.build_time' => 1738182553,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVmNNibc');
