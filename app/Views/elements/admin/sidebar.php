<?php $controller_data = explode('\\', \Config\Services::router()->controllerName()); ?>
<?php $controller = end($controller_data); ?>
<?php $icon_home = '<span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg></span>' ?>
<aside class="navbar navbar-vertical navbar-expand-lg navbar-transparent">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark">
    <a href="/">
        Codeart
    </a>
    </h1>
    <div class="collapse navbar-collapse" id="sidebar-menu">
    <ul class="navbar-nav pt-lg-3">
        <li class="nav-item <?= ($controller === 'categories') ? 'active' : '' ?>">
            <a class="nav-link" href="/admin/categories" >
                <?= $icon_home ?>
                <span class="nav-link-title">
                Categories
                </span>
            </a>
        </li>

        <li class="nav-item <?= ($controller === 'technologies') ? 'active' : '' ?>">
            <a class="nav-link" href="/admin/technologies" >
                <?= $icon_home ?>
                <span class="nav-link-title">
                Technologies
                </span>
            </a>
        </li>

        <li class="nav-item <?= ($controller === 'posts') ? 'active' : '' ?>">
            <a class="nav-link" href="/admin/posts" >
                <?= $icon_home ?>
                <span class="nav-link-title">
                Posts
                </span>
            </a>
        </li>

        <li class="nav-item <?= ($controller === 'tutoriels') ? 'active' : '' ?>">
            <a class="nav-link" href="/admin/tutoriels" >
                <?= $icon_home ?>
                <span class="nav-link-title">
                Tutoriels
                </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/" >
                <?= $icon_home ?>
                <span class="nav-link-title">
                Voir le site
                </span>
            </a>
        </li>
    </ul>
    </div>
</div>
</aside>
