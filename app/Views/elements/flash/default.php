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
    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
        <span class="flex justify-end cursor-pointer" onclick="this.parentNode.parentNode.classList.add('hidden');">X</span>
    </div>
    <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
        <p><?= $message ?></p>
    </div>
</div>