<?php
$differentiators = [
  [
    'icon' => 'trophy',
    'title' => 'Quality Craftsmanship',
    'description' => 'We take pride in our commitment to delivering construction projects of the highest quality, adhering to industry standards and best practices.'
  ],
  [
    'icon' => 'handshake',
    'title' => 'Client-Centric Approach',
    'description' => 'Our clients are at the heart of everything we do. We prioritize open communication, collaboration, and transparency to ensure their vision becomes a reality.'
  ],
  [
    'icon' => 'leaf',
    'title' => 'Innovation and Sustainability',
    'description' => 'Embracing modern construction techniques and environmentally sustainable practices, we contribute to a greener and more sustainable future.'
  ]
];
?>

<section class="py-5 bg-white border-bottom" style="border-color: #e5e7eb; border-width: 1px; min-height: 600px;">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-5 scroll-animate scroll-animate-fade">
      <h2 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin-bottom: 16px; border-bottom: 3px solid #BF1B2C; display: inline-block; padding-bottom: 12px;">
        Key Differentiators
      </h2>
      <p style="font-size: 1rem; color: #545150; max-width: 700px; margin: 16px auto 0; line-height: 1.6;">
        What sets RTCDC Construction apart in the industry
      </p>
    </div>

    <!-- Differentiators Grid -->
    <div class="row g-4">
      <?php foreach ($differentiators as $index => $item): ?>
        <div class="col-12 col-md-6 col-lg-4 scroll-animate scroll-animate-fade" style="animation-delay: <?php echo $index * 0.15; ?>s;">
          <div class="bg-white p-5 border h-100 text-center" style="border: 1px solid #d1d5db; border-radius: 8px; transition: all 250ms ease-in-out; box-shadow: 0 1px 2px rgba(0,0,0,0.05);" data-hover="card">
            <!-- Icon -->
            <div style="margin-bottom: 16px;">
              <?php
              $iconMap = [
                'trophy' => 'bi-trophy',
                'handshake' => 'bi-hand-thumbs-up',
                'leaf' => 'bi-flower2',
              ];
              $bi = $iconMap[$item['icon']] ?? 'bi-star';
              echo "<i class='bi $bi' style='font-size: 2.5rem; color: #BF1B2C;'></i>";
              ?>
            </div>
            <h4 style="font-weight: 700; color: #1f2937; margin-bottom: 12px;">
              <?php echo $item['title']; ?>
            </h4>
            <p style="font-size: 0.95rem; color: #545150; margin: 0; line-height: 1.6;"><?php echo $item['description']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom CTA Section -->
    <div class="text-center mt-5 scroll-animate scroll-animate-fade">
      <p style="font-size: 1rem; color: #545150; margin-bottom: 24px; line-height: 1.6;">
        Experience the RTCDC difference in your next construction project
      </p>
      <a href="#contact" class="d-inline-block px-5 py-2 text-white text-decoration-none scroll-animate scroll-animate-fade" style="background-color: #BF1B2C; border: 2px solid #BF1B2C; border-radius: 6px; cursor: pointer; transition: all 250ms ease-in-out; font-weight: 600; box-shadow: 0 2px 8px rgba(191, 27, 44, 0.2);" onmouseover="this.style.backgroundColor='#9f1620'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(191, 27, 44, 0.3)';" onmouseout="this.style.backgroundColor='#BF1B2C'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(191, 27, 44, 0.2)';">
        Get Started Today
      </a>
    </div>
  </div>
</section>
