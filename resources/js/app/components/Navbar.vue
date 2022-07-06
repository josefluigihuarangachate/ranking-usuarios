<template >
  <nav
    class="
      header-navbar
      navbar navbar-expand-lg
      align-items-center
      floating-nav
      navbar-dark navbar-shadow
      container-xxl
    "
  >
    <div class="navbar-container d-flex content">
      <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav d-xl-none">
          <li class="nav-item">
            <a class="nav-link menu-toggle" href="#"
              ><i class="ficon" data-feather="menu"></i
            ></a>
          </li>
        </ul>
      </div>
      <ul class="nav navbar-nav align-items-center ms-auto">
        <li class="nav-item dropdown dropdown-notification me-25">
          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
            <li class="scrollable-container media-list">
              <a class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                  <div class="me-1">
                    <div class="avatar">
                      <img
                        src="https://cdn-icons-png.flaticon.com/512/2646/2646662.png"
                        alt="avatar"
                        width="32"
                        height="32"
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                  <div class="me-1">
                    <div class="avatar">
                      <img
                        src="https://cdn-icons-png.flaticon.com/512/2646/2646662.png"
                        alt="avatar"
                        width="32"
                        height="32"
                      />
                    </div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-user">
          <a
            class="nav-link dropdown-toggle dropdown-user-link"
            id="dropdown-user"
            href="#"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <!-- user.fullname -->
            <div class="user-nav d-sm-flex d-none">
              <span class="user-name fw-bolder text-capitalize"> </span
              ><span class="user-status"> </span>
            </div>
            <span class="avatar">
              <!-- ../../images/portrait/small/avatar-s-11.jpg -->
              <img
                class="round"
                src="https://cdn-icons-png.flaticon.com/512/2646/2646662.png"
                alt="avatar"
                height="40"
                width="40" />

              <span class="avatar-status-online"></span
            ></span>
          </a>
          <div
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="dropdown-user"
          >
            <router-link class="dropdown-item" to="/perfil">
                Perfil
            </router-link>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"
              >
              Logout</a
            >
          </div>
        </li>
      </ul>
    </div>
  </nav>
</template>


<script>
export default {
  name: "Navbar",
};
</script>
