@include('navbar')
<section class="vh-100">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form method="POST" action="{{ route('change-password.post') }}">
    @csrf
    <!-- Mật khẩu cũ -->
    <label for="current_password" class="form-label">Mật khẩu cũ</label>
    <input type="password" id="current_password" name="current_password" class="form-control mb-3" required>

    <!-- Mật khẩu mới -->
    <label for="new_password" class="form-label">Mật khẩu mới</label>
    <input type="password" id="new_password" name="new_password" class="form-control mb-3" required>

    <!-- Xác nhận mật khẩu mới -->
    <label for="confirm_password" class="form-label">Xác nhận mật khẩu mới</label>
    <input type="password" id="confirm_password" name="confirm_password" class="form-control mb-4" required>

    <!-- Nút Đổi mật khẩu -->
    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
</form>
