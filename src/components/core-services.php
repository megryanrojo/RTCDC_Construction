<?php
$coreServices = [
  [
    'icon' => 'tool',
    'title' => 'General Contracting',
    'description' => 'Our experienced team manages every aspect of the construction process, ensuring seamless project delivery from concept to completion.'
  ],
  [
    'icon' => 'design',
    'title' => 'Design-Build',
    'description' => 'Combining design and construction expertise, we offer a streamlined approach to deliver cost-effective and efficient projects.'
  ],
  [
    'icon' => 'renovation',
    'title' => 'Renovation and Remodeling',
    'description' => 'Transforming spaces with precision and creativity, we breathe new life into existing structures, exceeding client expectations.'
  ],
  [
    'icon' => 'building',
    'title' => 'Commercial and Residential',
    'description' => 'Specializing in both commercial and residential projects, we tailor our services to meet the unique needs of each client.'
  ]
];
?>

<section class="py-5 bg-light border-bottom" style="border-color: #e5e7eb; border-width: 1px; background-color: #f9fafb; min-height: 600px;">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-5 scroll-animate scroll-animate-fade">
      <h2 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin-bottom: 16px; border-bottom: 3px solid #BF1B2C; display: inline-block; padding-bottom: 12px;">
        Core Services
      </h2>
      <p style="font-size: 1rem; color: #545150; max-width: 600px; margin: 16px auto 0; line-height: 1.6;">
        Comprehensive construction solutions tailored to your project needs
      </p>
    </div>

    <!-- Services Grid -->
    <div class="row g-4">
      <?php foreach ($coreServices as $index => $service): ?>
        <div class="col-12 col-md-6 scroll-animate scroll-animate-fade" style="animation-delay: <?php echo $index * 0.12; ?>s;">
          <div class="bg-white p-5 border h-100" style="border: 1px solid #d1d5db; border-radius: 8px; transition: all 250ms ease-in-out; box-shadow: 0 1px 2px rgba(0,0,0,0.05);" data-hover="card">
            <div class="mb-4">
              <?php
              $iconMap = [
                'tool' => 'bi-wrench',
                'design' => 'bi-easel',
                'renovation' => 'bi-bricks',
                'building' => 'bi-buildings',
              ];
              $bi = $iconMap[$service['icon']] ?? 'bi-star';
              echo "<i class='bi $bi' style='font-size: 2.5rem; color: #BF1B2C;'></i>";
              ?>
            </div>
            <h4 style="font-weight: 700; color: #1f2937; margin-bottom: 12px;"><?php echo $service['title']; ?></h4>
            <p style="font-size: 0.95rem; color: #545150; margin: 0; line-height: 1.6;"><?php echo $service['description']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
