<header class="flex items-center justify-between py-5">
  <div>
    <a href="/" aria-label="Header title">
      <div class="flex items-center justify-between">
        <div class="mr-3">
          <?= $this->html->image('codeart.png') ?>
        </div>
      </div>
    </a>
  </div>
  <div class="flex items-center space-x-4 leading-5 sm:space-x-6">
    <a href="/blog" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
      Articles
    </a>
    <a href="/tutoriels" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
      Turoriels
    </a>
    <a href="/contact" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
      Contact
    </a>
    <?php if (!$this->Identity->isLoggedIn()) : ?>
      <a href="/auth/login" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
        Connexion
      </a>
      <a href="/auth/inscription" class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block">
        Inscription
      </a>
    <?php else : ?>

      <button id="dropdownDelayButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
        <span class="sr-only">Open user menu</span>
        <?php if ($this->Identity->get('avatar')) : ?>
          <?php echo $this->Html->image('users/' . $this->Identity->get('avatar'), ['class' => 'w-9 h-9 rounded-full']) ?>
        <?php else : ?>
          <?php echo $this->Html->image('profil.jpg', ['class' => 'w-9 h-9 rounded-full']) ?>
        <?php endif; ?>
      </button>

      <!-- Dropdown menu -->
      <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 toggle">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
          <li>
            <a href="/auth/profil" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
          </li>
          <?php if ($this->Identity->get('role') === 'admin'): ?>
          <li>
            <a href="/admin" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-turbolinks="false">Administration</a>
          </li>
          <?php endif; ?>
          <li>
            <a href="/auth/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Deconnexion</a>
          </li>
        </ul>
      </div>
    <?php endif; ?>
    </button>

    <div id="toggle-theme"></div>
    <button aria-label="Toggle Menu" class="sm:hidden" id="show-sidebar-mobile">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-8 w-8 text-gray-900 dark:text-gray-100">
        <path fillrule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" cliprule="evenodd"></path>
      </svg>
    </button>

    <div class="fixed left-0 top-0 z-10 h-full w-full transform bg-white opacity-95 duration-300 ease-in-out dark:bg-gray-950 dark:opacity-[0.98] translate-x-0 hidden">
      <div class="flex justify-end">
        <button class="mr-8 mt-11 h-8 w-8" aria-label="Toggle Menu" id="hide-menu-mobile">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-900 dark:text-gray-100">
            <path fillrule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" cliprule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav class="fixed mt-8 h-full">
        <div class="px-12 py-4">
          <a href="/blog" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" @click="showMenu = false">
            Articles
          </a>
        </div>
        <div class="px-12 py-4">
          <a href="/tutoriels" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" @click="showMenu = false">
            Tutoriels
          </a>
        </div>
        <div class="px-12 py-4">
          <a href="/contact" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" @click="showMenu = false">
            Contact
          </a>
        </div>
        <?php if (!$this->Identity->isLoggedIn()) : ?>
          <div class="px-12 py-4">
            <a href="/auth/login" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" @click="showMenu = false">
              Connexion
            </a>
          </div>
          <div class="px-12 py-4">
            <a href="/auth/inscription" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" @click="showMenu = false">
              Inscription
            </a>
          </div>
        <?php else : ?>
          <div class="px-12 py-4">
            <a href="/auth/profil" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" @click="showMenu = false">
              Profile
            </a>
          </div>
          <div class="px-12 py-4">
            <a href="/auth/logout" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" @click="showMenu = false">
              Deconnexion
            </a>
          </div>
        <?php endif; ?>
      </nav>
    </div>

  </div>
</header>