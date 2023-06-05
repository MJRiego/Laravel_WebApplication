<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MYSITE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" aria-current="page"  href="<?php echo e(route('home')); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact Us</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->is('organizations') ? 'active' : ''); ?>" href="<?php echo e(route('organizations.index')); ?>">Organization List</a>
            </li>
            
        </ul>
      </div>
    </div>
  </nav><?php /**PATH C:\Users\Mark\webapp\resources\views/layouts/nav.blade.php ENDPATH**/ ?>