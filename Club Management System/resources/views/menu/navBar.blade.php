<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand text-white" href="/">CMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse pr-5" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto text-center nav-ul">
          <li class="nav-item text-center">
              <a class="nav-link text-white" href="/"><i class="bi bi-house-fill nav-icon-size"></i><br>Home <span
                      class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="/notification"><i
                      class="bi bi-bell-fill nav-icon-size"></i><br>Notification</a>
          </li>

          @if(auth()->check())
          <li class="nav-item dropdown">
              <a class="nav-link text-white" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-person-fill nav-icon-size"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="/my-profile">{{ auth()->user()->user_name }}</a>
                  <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
              </div>
          </li>
          @else
          <li class="nav-item">
              <a class="nav-link text-white" href="/login"><i
                      class="bi bi-box-arrow-right nav-icon-size"></i> Sign in</a>
          </li>
          @endif
      </ul>
  </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
