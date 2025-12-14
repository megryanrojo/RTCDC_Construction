<?php
$services = [
  [
    'icon' => 'building',
    'title' => 'Commercial Construction',
    'description' => 'Large-scale commercial projects including office buildings, retail spaces, and industrial facilities.'
  ],
  [
    'icon' => 'home',
    'title' => 'Residential Construction',
    'description' => 'Custom home building and residential developments with attention to detail and quality.'
  ],
  [
    'icon' => 'wrench',
    'title' => 'Renovations & Remodeling',
    'description' => 'Transform your existing space with our expert renovation and remodeling services.'
  ],
  [
    'icon' => 'hammer',
    'title' => 'General Contracting',
    'description' => 'Comprehensive project management from planning to completion for all construction needs.'
  ],
  [
    'icon' => 'paint',
    'title' => 'Interior Finishing',
    'description' => 'Professional interior finishing services including painting, flooring, and custom details.'
  ],
  [
    'icon' => 'ruler',
    'title' => 'Design & Planning',
    'description' => 'Expert design consultation and project planning to bring your vision to life.'
  ]
];
?>

<section id="services" class="py-5 bg-white border-bottom" style="border-color: #e5e7eb; border-width: 1px; min-height: 600px;">
  <div class="container">
    <div class="text-center mb-5 scroll-animate scroll-animate-fade">
      <div class="mb-3">
        <h2 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin: 0; border-bottom: 3px solid #BF1B2C; display: inline-block; padding-bottom: 12px;">Our Services</h2>
      </div>
      <div class="mt-4" style="max-width: 600px; margin: 0 auto;">
        <p style="color: #545150; font-size: 1rem; line-height: 1.6; margin: 0;">We provide a full range of construction services — design & build, financing support, construction, renovations, and finishing works to deliver your dream home or commercial space.</p>
      </div>
    </div>

    <div class="row g-4">
      <?php foreach ($services as $index => $s): ?>
        <div class="col-12 col-md-6 col-lg-4 scroll-animate scroll-animate-fade" style="animation-delay: <?php echo $index * 0.1; ?>s;">
          <div class="bg-white p-4 border h-100" style="border: 1px solid #d1d5db; border-radius: 8px; transition: all 250ms ease-in-out; box-shadow: 0 1px 2px rgba(0,0,0,0.05);" data-hover="card">
            <div style="margin-bottom: 16px;">
              <?php
              $iconMap = [
                'building' => 'bi-buildings',
                'home' => 'bi-house-door',
                'wrench' => 'bi-wrench-adjustable',
                'hammer' => 'bi-hammer',
                'paint' => 'bi-brush',
                'ruler' => 'bi-rulers',
              ];
              $bi = $iconMap[$s['icon']] ?? 'bi-star';
              echo "<i class='bi $bi' style='font-size: 2.5rem; color: #BF1B2C;'></i>";
              ?>
            </div>
            <h5 style="font-weight: 700; color: #1f2937; margin-bottom: 12px;"><?php echo $s['title']; ?></h5>
            <p style="font-size: 0.95rem; color: #545150; margin: 0; line-height: 1.6;"><?php echo $s['description']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
