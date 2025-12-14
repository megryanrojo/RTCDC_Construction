<?php $activeSection = isset($activeSection) ? $activeSection : '#home'; ?>
<header class="bg-white border-bottom sticky-top" style="border-bottom: 2px solid #d1d5db; z-index: 1030; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
  <!-- Top bar -->
  <div class="bg-light text-secondary py-2" style="background-color: #f3f4f6; font-size: 0.875rem;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-auto">
          <div class="d-flex gap-4">
            <div class="d-flex align-items-center gap-2" style="transition: all 250ms ease-in-out;">
              <svg class="bi" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.308 0c-1.04 5.904 4.658 10.652 10.652 11.612.947.164 1.83-.541 1.83-1.532a.678.678 0 0 0-.668-.667c-4.227-.843-8.022-4.638-8.865-8.865a.67.67 0 0 0-.667-.668z"/>
              </svg>
              <span>(034)467-2191 / 0995-842-1313</span>
            </div>
            <div class="d-flex align-items-center gap-2" style="transition: all 250ms ease-in-out;">
              <svg class="bi" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
              </svg>
              <span>redtigerconstruction.adm@gmail.com</span>
            </div>
          </div>
        </div>
        <div class="col-md d-none d-md-block text-end">
          <span style="font-size: 0.875rem;">Mon - Fri: 8:00 AM - 6:00 PM</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Main navigation -->
  <div class="container">
    <div class="d-flex justify-content-between align-items-center py-3">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="#home" class="text-decoration-none" style="display: inline-block; transition: transform 250ms ease-in-out;">
          <img src="assets/images/RTCDCLOGO.png" alt="RTCDC Logo" style="height: 45px; width: auto; display: block;">
        </a>
      </div>

      <!-- Desktop navigation -->
      <nav class="d-none d-md-flex gap-5 flex-grow-1 justify-content-center" id="navbarScrollspy">
        <?php
        $navLinks = [
          'Home' => '#home',
          'Services' => '#services',
          'Projects' => '#projects',
          'About' => '#about',
          'Contact' => '#contact'
        ];
        foreach ($navLinks as $label => $href):
        ?>
          <a href="<?php echo $href; ?>" class="navbar-link text-decoration-none" data-section="<?php echo ltrim($href, '#'); ?>" id="nav-<?php echo ltrim($href, '#'); ?>"><?php echo $label; ?></a>
        <?php endforeach; ?>
      </nav>

      <!-- Desktop CTA Button -->
      <a href="#contact" class="d-none d-md-block btn-primary" style="padding: 0.5rem 1.5rem; background-color: #BF1B2C; color: white; border: 2px solid #BF1B2C; cursor: pointer; transition: all 250ms ease-in-out;">
        Get a Quote
      </a>

      <!-- Mobile menu button -->
      <button class="d-md-none btn btn-link p-0" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" style="color: #1f2937; transition: all 250ms ease-in-out;">
        <svg class="bi" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
    </div>

    <!-- Mobile navigation -->
    <div class="collapse d-md-none py-4 border-top" id="mobileMenu" style="border-top: 2px solid #d1d5db;">
      <div class="d-flex flex-column gap-3">
        <?php foreach ($navLinks as $label => $href): ?>
          <a href="<?php echo $href; ?>" class="navbar-link text-decoration-none" style="padding: 0.5rem 0;" data-section="<?php echo ltrim($href, '#'); ?>" id="mnav-<?php echo ltrim($href, '#'); ?>" data-bs-toggle="collapse" data-bs-target="#mobileMenu"><?php echo $label; ?></a>
        <?php endforeach; ?>
        <a href="#contact" class="btn-primary" style="padding: 0.5rem 1rem; background-color: #BF1B2C; color: white; border: 2px solid #BF1B2C; text-align: center; cursor: pointer; transition: all 250ms ease-in-out; margin-top: 0.5rem;" data-bs-toggle="collapse" data-bs-target="#mobileMenu">Get a Quote</a>
      </div>
    </div>
  </div>
</header>
