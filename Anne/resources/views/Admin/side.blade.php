
<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #B3B0A9 ;">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"  style="background-color: #B3B0A9">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="/images/logo.png" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="/images/IMG-20230517-WA0008-removebg-preview (2).png" alt="logo"  /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="/images/3324336-200.png" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h2 class="mt-2 font-weight-bold">{{ Auth::user()->name }}
            </h2>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/admindashboard')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer" style="color: #8D7B68"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('view_category')}}">
          <span class="menu-icon">
            <i class="mdi mdi-tag-heart" style="color: #618264"></i>
          </span>
          <span class="menu-title">categories</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link"  href="{{url('product')}}" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-basket"></i>

          </span>
          <span class="menu-title">products</span>
        </a>

      </li>

      <li class="nav-item menu-items">
        <a class="nav-link"  href="{{url('orders')}}">
          <span class="menu-icon" >
            <i class="mdi mdi-package-variant"style="color: #F1DEC9"></i>

        </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('users')}}">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>
 
    </ul>
  </nav>
