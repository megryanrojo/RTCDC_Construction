<?php
$stats = [
  [
    'icon' => 'award',
    'value' => '25+',
    'label' => 'Years Experience',
  ],
  [
    'icon' => 'users',
    'value' => '500+',
    'label' => 'Projects Completed',
  ],
  [
    'icon' => 'clock',
    'value' => '98%',
    'label' => 'On-Time Delivery',
  ],
  [
    'icon' => 'target',
    'value' => '100%',
    'label' => 'Client Satisfaction',
  ],
];
?>

<section id="about" class="py-5 bg-white border-bottom" style="border-color: #e5e7eb; border-width: 1px; min-height: 600px;">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- Image -->
      <div class="col-lg-6 position-relative">
        <div class="bg-light border" style="border: 1px solid #d1d5db; height: 500px; display: flex; align-items: center; justify-content: center; color: #9ca3af; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
          [About Image / Team Photo]
        </div>
      </div>

      <!-- Content -->
      <div class="col-lg-6">
        <!-- Section Heading -->
        <div class="border-bottom mb-4" style="border-color: #BF1B2C; border-width: 3px; padding-bottom: 12px;">
          <h2 style="font-size: 1.875rem; font-weight: 700; color: #1f2937; margin: 0;">About RTCDC Construction</h2>
        </div>

        <!-- Paragraph 1 -->
        <div class="mb-4">
          <p style="color: #545150; font-size: 1rem; line-height: 1.6;">RTCDC Construction specializes in design and build services for your dream home. We understand that building a house is a significant investment, which is why we offer flexible financing options including bank financing and in-house finance programs to make your dream home more accessible.</p>
        </div>

        <!-- Paragraph 2 -->
        <div class="mb-5">
          <p style="color: #545150; font-size: 1rem; line-height: 1.6;">With our BUILD NOW PAY program, you can start construction immediately and manage payments according to your financial convenience. Our team of experienced professionals is committed to delivering quality construction with excellent craftsmanship and attention to detail.</p>
        </div>

        <!-- Stats -->
        <div class="row row-cols-2 g-4 mb-5">
          <?php foreach ($stats as $index => $stat): ?>
            <div class="col">
              <div class="d-flex gap-3 p-3 border" style="border: 1px solid #e5e7eb; background-color: #f9fafb; border-radius: 8px; transition: all 250ms ease-in-out; box-shadow: 0 1px 2px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateY(-4px) scale(1.02)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.1)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 1px 2px rgba(0,0,0,0.05)';">
                <!-- Icon -->
                <div class="flex-shrink-0" style="width: 48px; height: 48px; background: linear-gradient(135deg, #BF1B2C, #9f1620); border-radius: 6px; display: flex; align-items: center; justify-content: center; transition: transform 250ms ease-in-out;">
                  <?php
                    $icons = [
                      'award' => '<svg class="bi" width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="m8 0 1.669.864 1.858.325 1.17 1.95.404 1.869 1.298 1.207-.411 1.853A2 2 0 0 0 14 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2h-.5a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5H2a2 2 0 0 0 1.98 1.645l.5 2.5h6l.5-2.5A2 2 0 0 0 12 10h.5a.5.5 0 0 0 .5-.5V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v7a.5.5 0 0 0 .5.5H2zm3.068.822l.986-1.658L8 5.832l1.946-3.668.986 1.658.341 1.449-1.87 1.73.588 1.976-1.591.795-1.591-.795.587-1.976-1.869-1.73.34-1.449z"/></svg>',
                      'users' => '<svg class="bi" width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7 14s1 0 1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.237 6.237 0 0 0 5 10c-1 0-1 1-1 1v3.216z"/><path d="M6.5 8a.5.5 0 0 0-.5.5v3H4.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5z"/></svg>',
                      'clock' => '<svg class="bi" width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/></svg>',
                      'target' => '<svg class="bi" width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/><path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/><circle cx="8" cy="8" r="1"/></svg>',
                    ];
                    echo $icons[$stat['icon']] ?? '';
                  ?>
                </div>
                <div>
                  <div style="font-size: 1.25rem; font-weight: 700; color: #1f2937;" class="counter" data-target="<?php echo preg_replace('/[^0-9]/', '', $stat['value']); ?>">0</div>
                  <div style="font-size: 0.875rem; color: #545150;"><?php echo $stat['label']; ?></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- CTA Button -->
        <a href="#contact" class="d-inline-block px-5 py-2 text-white text-decoration-none" style="background-color: #BF1B2C; border: 2px solid #BF1B2C; border-radius: 6px; cursor: pointer; transition: all 250ms ease-in-out; font-weight: 600; box-shadow: 0 2px 8px rgba(191, 27, 44, 0.2);" onmouseover="this.style.backgroundColor='#9f1620'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(191, 27, 44, 0.3)';" onmouseout="this.style.backgroundColor='#BF1B2C'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(191, 27, 44, 0.2)';">
          Start Your Project
        </a>
      </div>
    </div>
  </div>
</section>
