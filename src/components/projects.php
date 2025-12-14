<?php
$projects = [
  [
    'title' => 'Modern Residential Home',
    'category' => 'Residential',
    'image' => '[Project Image]'
  ],
  [
    'title' => 'Luxury Custom Build',
    'category' => 'Residential',
    'image' => '[Project Image]'
  ],
  [
    'title' => 'Family Home Renovation',
    'category' => 'Renovation',
    'image' => '[Project Image]'
  ],
  [
    'title' => 'Contemporary Design Build',
    'category' => 'Residential',
    'image' => '[Project Image]'
  ],
  [
    'title' => 'Home Extension Project',
    'category' => 'Renovation',
    'image' => '[Project Image]'
  ],
  [
    'title' => 'Dream Home Construction',
    'category' => 'Residential',
    'image' => '[Project Image]'
  ]
];
?>

<section id="projects" class="py-5 bg-light border-bottom" style="border-color: #e5e7eb; border-width: 1px; background-color: #f9fafb; min-height: 600px;">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-5" style="animation: fadeIn 0.8s ease-in-out;">
      <h2 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin-bottom: 16px; border-bottom: 3px solid #BF1B2C; display: inline-block; padding-bottom: 12px;">Our Projects</h2>
      <div class="mt-4" style="max-width: 600px; margin: 0 auto;">
        <p style="color: #545150; font-size: 1rem; line-height: 1.6; margin: 0;">Explore our portfolio of completed residential projects and custom home builds. Each project showcases our commitment to quality design and construction excellence.</p>
      </div>
    </div>

    <!-- Projects Grid -->
    <div class="row g-4 mb-5">
      <?php foreach ($projects as $project): ?>
        <div class="col-md-6 col-lg-4" style="animation: fadeIn 0.8s ease-in-out;">
          <div class="border overflow-hidden h-100" style="border: 1px solid #e5e7eb; border-radius: 8px; transition: all 250ms ease-in-out; box-shadow: 0 2px 8px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 24px rgba(191, 27, 44, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)';">
            <!-- Project Image -->
            <div style="aspect-ratio: 4/3; background: linear-gradient(135deg, #e5e7eb, #d1d5db); border-bottom: 1px solid #e5e7eb; display: flex; align-items: center; justify-content: center; color: #9ca3af; overflow: hidden;">
              <?php echo $project['image']; ?>
            </div>
            
            <!-- Project Info -->
            <div class="p-4 bg-white">
              <span class="badge" style="background: linear-gradient(135deg, #BF1B2C, #9f1620); color: white; font-size: 0.75rem; padding: 0.375rem 0.75rem; margin-bottom: 8px; display: inline-block; border-radius: 4px; font-weight: 600;">
                <?php echo $project['category']; ?>
              </span>
              <h5 style="color: #1f2937; font-weight: 600; line-height: 1.5; margin: 0; font-size: 1.125rem;">
                <?php echo $project['title']; ?>
              </h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- CTA -->
    <div class="text-center" style="animation: fadeIn 0.8s ease-in-out 0.4s both;">
      <a href="#contact" class="d-inline-block px-5 py-2 text-white text-decoration-none" style="background-color: #BF1B2C; border: 2px solid #BF1B2C; border-radius: 6px; cursor: pointer; transition: all 250ms ease-in-out; font-weight: 600; box-shadow: 0 2px 8px rgba(191, 27, 44, 0.2);" onmouseover="this.style.backgroundColor='#9f1620'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(191, 27, 44, 0.3)';" onmouseout="this.style.backgroundColor='#BF1B2C'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(191, 27, 44, 0.2)';">
        Start Your Project
      </a>
    </div>
  </div>
</section>
