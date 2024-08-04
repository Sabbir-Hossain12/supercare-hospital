<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        @if ( !empty($basicInfo->logo) )
            <img src="{{ asset($basicInfo->logo) }}" alt="">
          @else
            <img src="{{ asset('public/frontend/img/logo.png') }}" alt="">
          @endif
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{ route('dashboards') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Layouts -->

      <!--  Banner Section  -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-message-square-dots"></i>
          <div data-i18n="Layouts">Banner</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.banner.index') }}" class="menu-link">
              <div data-i18n="Without menu">Manage Banner</div>
            </a>
          </li>
        </ul>
      </li>


        <!--  About Section  -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-pin"></i>
                <div data-i18n="Layouts">About</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                <a href="{{ route('admin.about.index') }}" class="menu-link">
                    <div data-i18n="Without menu">Manage About</div>
                </a>
                </li>
            </ul>
        </li>


      <!--  Contact Section  -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-phone-call"></i>
          <div data-i18n="Layouts">Contact</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('admin.contact.index') }}" class="menu-link">
              <div data-i18n="Without menu">Manage Contact</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-header small text-uppercase"><span class="menu-header-text">Options</span></li>

        <!--  Settings  -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-cog"></i>
                <div data-i18n="Layouts">Settings</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.basic-info.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Basic Settings</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
  </aside>
