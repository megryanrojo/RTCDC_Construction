<?php
$heroHeadline = "Design and Build Your Dream House";
$heroSubtext = "You want to Build Your Dream House? We offer BUILD NOW PAY through Bank Financing and In-House Finance. Let RTCDC Construction turn your vision into reality with professional design and quality construction.";
?>

<section id="home" class="relative py-5" style="height: 600px; display: flex; align-items: center; background-color: #f9fafb; border-bottom: 2px solid #e5e7eb;">
  <!-- Wireframe pattern overlay -->
  <div class="position-absolute w-100 h-100" style="
    opacity: 0.08;
    background-image: 
      repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 20px),
      repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 20px);
    top: 0;
    left: 0;
  "></div>

  <!-- Content -->
  <div class="container position-relative" style="z-index: 1;">
    <div style="max-width: 600px; animation: fadeIn 0.8s ease-in-out;">
      <!-- Hero Headline -->
      <div class="border p-4 mb-4 d-flex align-items-center gap-2 bg-white animate__animated animate__fadeInDown">
        <h1 class="mb-0" style="font-size: 2.25rem; font-weight: 700; color: #1f2937; line-height: 1.2;">
          <i class="bi bi-house-door animate__animated animate__pulse animate__infinite" style="margin-right: 10px;"></i> <?php echo $heroHeadline; ?>
        </h1>
      </div>

      <!-- Supporting Text -->
      <div class="border p-4 mb-5" style="border: 1px solid #d1d5db; border-radius: 8px; background-color: #fff; transition: all 250ms ease-in-out; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
        <p class="mb-0 text-secondary" style="font-size: 1rem; line-height: 1.6;">
          <?php echo $heroSubtext; ?>
        </p>
      </div>

      <!-- CTAs -->
      <div class="d-flex gap-3 flex-wrap">
        <!-- Primary CTA -->
        <a href="#contact" class="text-white px-5 py-2 text-decoration-none d-inline-flex align-items-center gap-2" style="background-color: #BF1B2C; border: 2px solid #BF1B2C; border-radius: 6px; cursor: pointer; transition: all 250ms ease-in-out; font-weight: 600; box-shadow: 0 2px 8px rgba(191, 27, 44, 0.2);" onmouseover="this.style.backgroundColor='#9f1620'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(191, 27, 44, 0.3)';" onmouseout="this.style.backgroundColor='#BF1B2C'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(191, 27, 44, 0.2)';">
          Get Started
          <svg class="bi" width="20" height="20" fill="white" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
          </svg>
        </a>

        <!-- Secondary CTA -->
        <a href="#about" class="text-dark px-5 py-2 text-decoration-none d-inline-flex align-items-center" style="background-color: #fff; border: 2px solid #1f2937; border-radius: 6px; cursor: pointer; transition: all 250ms ease-in-out; font-weight: 600; box-shadow: 0 1px 3px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#f3f4f6'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.15)';" onmouseout="this.style.backgroundColor='#fff'; this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.1)';">
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>
