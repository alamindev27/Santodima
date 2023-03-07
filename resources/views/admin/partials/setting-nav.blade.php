<ul class="nav nav-tabs mb-5">
    <li class="nav-item">
      <a class="nav-link {{ Request::url() == route('admin.setting.index') ? 'active' : '' }}" href="{{ route('admin.setting.index') }}">General Setting</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::url() == route('admin.security.setting') ? 'active' : '' }}" href="{{ route('admin.security.setting') }}">Security</a>
    </li>
  </ul>
