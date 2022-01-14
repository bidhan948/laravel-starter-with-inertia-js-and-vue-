<template>
  <main class="main" id="top">
    <div class="container-fluid" data-layout="container">
      <!-- start of nav bar  -->
      <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
        <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">
            <button
              class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
              data-bs-toggle="tooltip"
              data-bs-placement="left"
              title="Toggle Navigation"
            >
              <span class="navbar-toggle-icon"
                ><span class="toggle-line"></span
              ></span>
            </button>
          </div>
          <Link class="navbar-brand" href="/">
            <div class="d-flex align-items-center py-3">
              <img
                class="me-2"
                src="assets/img/icons/spot-illustrations/falcon.png"
                alt=""
                width="40"
              /><span class="font-sans-serif">falcon</span>
            </div>
          </Link>
        </div>
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
              <li class="nav-item">
                <!-- label-->
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                  <div class="col-auto navbar-vertical-label">App</div>
                  <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                  </div>
                </div>

                <!-- parent pages--><Link
                  class="nav-link"
                  href="/user"
                  role="button"
                  aria-expanded="false"
                >
                  <div class="d-flex align-items-center">
                    <span class="nav-link-icon"
                      ><span class="fas fa-calendar-alt"></span></span
                    ><span class="nav-link-text ps-1">User</span>
                  </div>
                </Link>
                <!-- parent pages--><Link
                  class="nav-link"
                  href="/product"
                  role="button"
                  aria-expanded="false"
                >
                  <div class="d-flex align-items-center">
                    <span class="nav-link-icon"
                      ><span class="fab fa-product-hunt"></span></span
                    ><span class="nav-link-text ps-1">Product</span>
                  </div>
                </Link>
                <!-- parent pages--><Link
                  class="nav-link dropdown-indicator"
                  href="#events"
                  role="button"
                  data-bs-toggle="collapse"
                  aria-expanded="false"
                  aria-controls="events"
                >
                  <div class="d-flex align-items-center">
                    <span class="nav-link-icon"
                      ><span class="fas fa-calendar-day"></span></span
                    ><span class="nav-link-text ps-1">Events</span>
                  </div>
                </Link>
                <ul class="nav collapse false" id="events">
                  <li class="nav-item">
                    <Link
                      class="nav-link"
                      href="app/events/create-an-event.html"
                      aria-expanded="false"
                    >
                      <div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1">Create an event</span>
                      </div>
                    </Link>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--end of nav bar  -->

      <div class="content">
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
          <ul
            class="
              navbar-nav navbar-nav-icons
              ms-auto
              flex-row
              align-items-center
            "
          >
            <li class="nav-item dropdown">
              <Link
                class="nav-link pe-0"
                id="navbarDropdownUser"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <div class="avatar avatar-xl">
                  <i class="far fa-user-circle fa-2x"></i>
                </div>
              </Link>
              <div
                class="dropdown-menu dropdown-menu-end py-0"
                aria-labelledby="navbarDropdownUser"
              >
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <Link
                    class="dropdown-item fw-bold text-warning"
                    href="logout"
                    method="POST"
                    ><span class="fas fa-sign-out-alt"></span
                    ><span class="px-1">Log out</span></Link
                  >
                </div>
              </div>
            </li>
          </ul>
        </nav>

        <!-- main content starts from here -->

        <div class="row g-0 mt-4">
          <div class="card">
            <h3 class="text-center font-weight-bold">
              <slot />
            </h3>
          </div>
        </div>
        <footer class="footer">
          <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">
                <span class="d-none d-sm-inline-block">| </span
                ><br class="d-sm-none" />
                2021 &copy; <Link href="https://themewagon.com">PDMT</Link>
              </p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">v3.4.0</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </main>
</template>
<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
