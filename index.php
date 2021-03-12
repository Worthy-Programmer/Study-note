<?php 
  require_once 'includes/view/header.php';
  print_header('index');
  ?>

  <div class="container pb-5 my-3">
    <div class="row justify-content-between mb-5 align-items-center">
      <div class="col-sm-6 col-md-4">
        <h2 class="pb-4">Organize notes</h2>
        <p class=" pb-4 text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nobis est
          voluptatum, sequi voluptas eaque ab voluptatem error obcaecati, illo laudantium, odio iusto cum veritatis!
          Consequatur praesentium incidunt libero doloribus.</p>
        <button class="btn btn-primary px-4">Signup</button>
      </div>
      <img src="./img/notes.svg" class="pt-4 col-sm-4 col-md-6">
    </div>


    <section id="ability">
      <h3 class="text-center py-5">What you can do</h3>
      <div class="row justify-content-between">
        <div class="col-sm-3">
        <img src="./node_modules/bootstrap-icons/icons/list.svg" alt="List Navbar" class="d-block mx-auto py-3">

          <h4 class="text-center">Take Notes</h4>
        </div>
        <div class="col-sm-3">
        <img src="./node_modules/bootstrap-icons/icons/list.svg" alt="List Navbar" class="d-block mx-auto py-3">
          <h4 class="text-center">Take Notes</h4>
        </div>
        <div class="col-sm-3">
        <img src="./node_modules/bootstrap-icons/icons/list.svg" alt="List Navbar" class="d-block mx-auto py-3">
          <h4 class="text-center">Take Notes</h4>
        </div>
      </div>
    </section>
  </div>

  <footer class="container-fluid bg-primary text-light">
    <div class="py-5">
      <h2 class="text-center pb-4">Join us</h2>
      <div class="">
        <button class="d-block mx-auto btn btn-light text-primary py-2 px-5"> Signup </button></div>
    </div>
    <div class="container fw-lighter pb-4">
      <div class="row justify-content-between">
        <ul class="list-group pt-3  col-sm-1 nav">
          <li class="nav-item py-1"> <a href="" class="text-reset"> Facebook</a></li>
          <li class="nav-item py-1"><a href="" class="text-reset"> Facebook</a></li>
          <li class="nav-item py-1"><a href="" class="text-reset"> Facebook</a></li>
        </ul>

        <ul class="list-group pt-3 col-sm-1 nav p">
          <li class="nav-item py-1"><a href="" class="text-reset"> Facebook</a></li>
          <li class="nav-item py-1"><a href="" class="text-reset"> Facebook</a></li>
          <li class="nav-item py-1"><a href="" class="text-reset"> Facebook</a></li>
        </ul>


        <ul class="list-group pt-3 col-sm-1 nav">
          <li class="nav-item py-1"><a href="" class="text-reset"> Facebook</a></li>
          <li class="nav-item py-1"><a href="" class="text-reset"> Facebook</a></li>
          <li class="nav-item py-1"><a href="" class="text-reset"> Facebook</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>