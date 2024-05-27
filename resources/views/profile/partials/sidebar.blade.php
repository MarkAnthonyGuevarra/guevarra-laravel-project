<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('/') }}">
        <i class="bi bi-house"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link @if (request()->routeIs('profile.edit')) active @endif" href="{{ route('profile.edit') }}">
        <i class="bi bi-person"></i>
        <span>Edit Profile</span>
      </a>
    </li>

    <!-- Add more sidebar items here if needed -->

  </ul>
</aside>
