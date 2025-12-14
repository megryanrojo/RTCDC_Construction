<?php
$profileTitle = "RTCDC CONSTRUCTION";
$profileSubtitle = "COMPANY PROFILE";
$profileText = "RTCDC is a Bacolod City, Negros Occidental Philippines based construction company committed to delivering high quality and innovative construction solutions. With a strong foundation built on integrity, professionalism, and a customer-centric approach, we have successfully completed a wide range of projects, earning a reputation for excellence in the construction industry.";
?>

<section id="company-profile" class="py-5 bg-light border-bottom" style="border-color: #e5e7eb; border-width: 1px; background-color: #f9fafb; min-height: 600px;">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- Left Column - Text -->
      <div class="col-lg-6" style="animation: slideInLeft 0.8s ease-in-out;">
        <h3 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin-bottom: 8px;">
          <?php echo $profileTitle; ?>
        </h3>
        <h4 style="font-size: 1rem; font-weight: 600; color: #BF1B2C; margin-bottom: 24px; text-transform: uppercase; letter-spacing: 2px;">
          <?php echo $profileSubtitle; ?>
        </h4>
        
        <p style="font-size: 1rem; line-height: 1.625; color: #545150; margin-bottom: 24px;">
          <?php echo $profileText; ?>
        </p>

        <!-- Key Values -->
        <div class="row g-3">
          <div class="col-12">
            <div class="d-flex gap-3 p-4 bg-white border" style="border: 1px solid #e5e7eb; border-left: 4px solid #BF1B2C; border-radius: 6px; transition: all 250ms ease-in-out; box-shadow: 0 1px 2px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(4px)'; this.style.boxShadow='0 8px 16px rgba(191, 27, 44, 0.1)';" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 1px 2px rgba(0,0,0,0.05)';">
              <div style="font-weight: 700; color: #BF1B2C; font-size: 1.5rem; flex-shrink: 0;">✓</div>
              <div>
                <p style="font-weight: 600; color: #1f2937; margin: 0; margin-bottom: 4px;">High Quality & Innovation</p>
                <small style="color: #545150; font-size: 0.9rem;">Committed to delivering excellent construction solutions</small>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="d-flex gap-3 p-4 bg-white border" style="border: 1px solid #e5e7eb; border-left: 4px solid #BF1B2C; border-radius: 6px; transition: all 250ms ease-in-out; box-shadow: 0 1px 2px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(4px)'; this.style.boxShadow='0 8px 16px rgba(191, 27, 44, 0.1)';" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 1px 2px rgba(0,0,0,0.05)';">
              <div style="font-weight: 700; color: #BF1B2C; font-size: 1.5rem; flex-shrink: 0;">✓</div>
              <div>
                <p style="font-weight: 600; color: #1f2937; margin: 0; margin-bottom: 4px;">Integrity & Professionalism</p>
                <small style="color: #545150; font-size: 0.9rem;">Strong foundation built on trust and expertise</small>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="d-flex gap-3 p-4 bg-white border" style="border: 1px solid #e5e7eb; border-left: 4px solid #BF1B2C; border-radius: 6px; transition: all 250ms ease-in-out; box-shadow: 0 1px 2px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(4px)'; this.style.boxShadow='0 8px 16px rgba(191, 27, 44, 0.1)';" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 1px 2px rgba(0,0,0,0.05)';">
              <div style="font-weight: 700; color: #BF1B2C; font-size: 1.5rem; flex-shrink: 0;">✓</div>
              <div>
                <p style="font-weight: 600; color: #1f2937; margin: 0; margin-bottom: 4px;">Customer-Centric Approach</p>
                <small style="color: #545150; font-size: 0.9rem;">Your satisfaction is our top priority</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column - Image -->
      <div class="col-lg-6" style="animation: slideInRight 0.8s ease-in-out;">
        <img src="./assets/images/office_img.png  " alt="RTCDC Construction Office" style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); object-fit: cover;">
      </div>
    </div>
  </div>
</section>
