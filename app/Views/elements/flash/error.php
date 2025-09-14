<?php

/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div role="alert">
    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
        <span class="flex justify-end cursor-pointer" onclick="this.parentNode.parentNode.classList.add('hidden');">X</span>
    </div>
    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
        <p><?= $message ?></p>
    </div>
</div>