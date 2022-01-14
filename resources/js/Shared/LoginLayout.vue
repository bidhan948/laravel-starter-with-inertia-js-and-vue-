<template>
  <Head title="LOGIN" />
  <main class="main" id="top">
    <div class="container-fluid">
      <div class="row min-vh-100 flex-center g-0">
        <div class="col-lg-8 col-xxl-5 py-3 position-relative">
          <img
            class="bg-auth-circle-shape"
            src="../../../public/assets/img/icons/spot-illustrations/bg-shape.png"
            alt=""
            width="250"
          /><img
            class="bg-auth-circle-shape-2"
            src="../../../public/assets/img/icons/spot-illustrations/shape-1.png"
            alt=""
            width="150"
          />
          <div class="card overflow-hidden z-index-1">
            <div class="card-body p-0">
              <div class="row g-0 h-100">
                <div class="col-md-12 d-flex flex-center">
                  <div class="p-4 p-md-5 flex-grow-1">
                    <div class="row flex-between-center">
                      <div class="col-auto">
                        <h3>Account Login</h3>
                      </div>
                    </div>
                    <slot />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

