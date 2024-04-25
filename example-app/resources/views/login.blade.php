<section class="vh-100">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Nhóm C</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Thông tin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên hệ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form method="POST" action="{{ route('login') }}">
    @csrf
    <!-- Email input -->
    <label class="form-label" for="form3Example3">Email address</label>
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
            placeholder="Enter a valid email address" />
    </div>

    <!-- Password input -->
    <label class="form-label" for="form3Example4">Password</label>
    <div data-mdb-input-init class="form-outline mb-3">
        <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
            placeholder="Enter password" />   
    </div>

    <!-- Checkbox -->
    <div class="form-check mb-0">
        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
        <label class="form-check-label" for="form2Example3">
            Remember me
        </label>
    </div>
    <a href="#!" class="text-body">Forgot password?</a>

    <div class="text-center text-lg-start mt-4 pt-2">
        <!-- Sử dụng type="submit" để gửi dữ liệu khi nhấn nút -->
        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
            class="link-danger">Register</a></p>
    </div>
</form>

      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2024. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>