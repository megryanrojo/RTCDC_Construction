<?php
$vision = "To be the leading construction company, renowned for our commitment to quality, innovation, and customer satisfaction. We aim to shape the future of the industry through sustainable practices, excellence in project execution, and fostering long-term relationships with our clients.";

$mission = "Our mission is to deliver exceptional construction services by combining technical expertise with a passion for craftsmanship. We strive to exceed client expectations through effective communication, attention to detail, and timely project completion. Our team is dedicated to maintaining the highest standards of safety, professionalism, and integrity in all aspects of our work.";
?>

<section id="vision" class="py-5 bg-white border-bottom" style="border-color: #e5e7eb; border-width: 1px; min-height: 600px;">
  <div class="container">
    <div class="row g-5">
      <!-- Vision -->
      <div class="col-lg-6" style="animation: slideInLeft 0.8s ease-in-out;">
        <div class="h-100 p-5 bg-light border" style="border: 1px solid #e5e7eb; border-radius: 8px; background-color: #f9fafb; transition: all 250ms ease-in-out; box-shadow: 0 2px 8px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(191, 27, 44, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)';">
          <div style="width: 60px; height: 60px; background-color: #BF1B2C; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 4px 12px rgba(191, 27, 44, 0.2);">
            <svg width="32" height="32" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5 8-5.5 8-5.5zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
          </div>

          <h3 style="font-size: 1.5rem; font-weight: 700; color: #1f2937; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 2px;">
            Vision
          </h3>

          <p style="font-size: 1rem; line-height: 1.625; color: #545150; margin-bottom: 0;">
            <?php echo $vision; ?>
          </p>
        </div>
      </div>

      <!-- Mission -->
      <div class="col-lg-6" style="animation: slideInRight 0.8s ease-in-out;">
        <div class="h-100 p-5 bg-light border" style="border: 1px solid #e5e7eb; border-radius: 8px; background-color: #f9fafb; transition: all 250ms ease-in-out; box-shadow: 0 2px 8px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(191, 27, 44, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)';">
          <div style="width: 60px; height: 60px; background-color: #545150; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 4px 12px rgba(84, 81, 80, 0.2);">
            <svg width="32" height="32" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.5 1.5H1.5a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-11a1 1 0 0 0-1-1zM2 3h12v2H2V3zm0 3h12v5H2V6zm0 6h12v1H2v-1z"/>
            </svg>
          </div>

          <h3 style="font-size: 1.5rem; font-weight: 700; color: #1f2937; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 2px;">
            Mission
          </h3>

          <p style="font-size: 1rem; line-height: 1.625; color: #545150; margin-bottom: 0;">
            <?php echo $mission; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
