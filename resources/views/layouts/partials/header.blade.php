<header class="header">
    <nav>
        <ul>
            <li><h1> @yield('page_title') </h1></li>
        </ul>

        <ul>
            <li>
                <details class="dropdown user-dropdown">
                    <summary class="user-wrap">
                        <div class="user-img">{{ Auth::user()->initials }}</div>
                        {{ Auth::user()->name }}
                    </summary>
                    <ul dir="rtl">

                      <li dir="ltr">
                        <livewire:theme-switch />
                      </li>

                      <li class="seperator"><hr></li>
                      <li><a>Log ud</a></li>
                    </ul>
                  </details>
            </li>
        </ul>
        
    </nav>
</header>