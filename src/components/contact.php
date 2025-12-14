<?php
$contactInfo = [
  [
    'icon' => 'phone',
    'title' => 'Phone',
    'details' => ['(034)467-2191', '0995-842-1313']
  ],
  [
    'icon' => 'mail',
    'title' => 'Email',
    'details' => ['redtigerconstruction.adm@gmail.com', 'rtcdc.hrd@gmail.com']
  ],
  [
    'icon' => 'map',
    'title' => 'Address',
    'details' => ['209 Vecino Blvd., Lacson St.', 'Brgy. 40, Bacolod City, 6100']
  ],
  [
    'icon' => 'clock',
    'title' => 'Business Hours',
    'details' => ['Mon - Sat: 8:00 AM - 6:00 PM', 'Sunday: Closed']
  ]
];
?>

<section id="contact" class="py-5" style="background-color: #fff; border-bottom: 1px solid #e5e7eb; min-height: 600px;">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-5 scroll-animate scroll-animate-fade">
      <h2 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin-bottom: 16px; border-bottom: 3px solid #BF1B2C; display: inline-block; padding-bottom: 12px;">Get In Touch</h2>
      <div class="mt-4" style="max-width: 600px; margin: 0 auto;">
        <p style="color: #545150; font-size: 1rem; line-height: 1.6; margin: 0;">We'd love to hear from you! Send us a message and we'll respond as soon as possible. Let's bring your dream project to life.</p>
      </div>
    </div>

    <div class="row g-5">
      <!-- Contact Form -->
      <div class="col-lg-6">
        <div class="bg-white p-5 border" style="border: 1px solid #e5e7eb; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
          <h4 style="font-size: 1.25rem; font-weight: 700; color: #1f2937; margin-bottom: 24px;">Send us a Message</h4>
          
          <form style="display: flex; flex-direction: column; gap: 16px;">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" style="color: #545150; font-weight: 600; margin-bottom: 8px; display: block;">Name</label>
                <input type="text" class="form-control" placeholder="Your name" required style="border: 1px solid #d1d5db; border-radius: 6px; padding: 10px 12px; transition: all 250ms ease-in-out; font-size: 1rem; width: 100%;" onmouseover="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onmouseout="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';" onfocus="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';">
              </div>
              <div class="col-md-6">
                <label class="form-label" style="color: #545150; font-weight: 600; margin-bottom: 8px; display: block;">Email</label>
                <input type="email" class="form-control" placeholder="Your email" required style="border: 1px solid #d1d5db; border-radius: 6px; padding: 10px 12px; transition: all 250ms ease-in-out; font-size: 1rem; width: 100%;" onmouseover="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onmouseout="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';" onfocus="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';">
              </div>
            </div>
            
            <div style="display: flex; flex-direction: column;">
              <label class="form-label" style="color: #545150; font-weight: 600; margin-bottom: 8px; display: block;">Phone</label>
              <input type="tel" class="form-control" placeholder="Your phone number" required style="border: 1px solid #d1d5db; border-radius: 6px; padding: 10px 12px; transition: all 250ms ease-in-out; font-size: 1rem; width: 100%;" onmouseover="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onmouseout="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';" onfocus="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';">
            </div>
            
            <div style="display: flex; flex-direction: column;">
              <label class="form-label" style="color: #545150; font-weight: 600; margin-bottom: 8px; display: block;">Subject</label>
              <input type="text" class="form-control" placeholder="Project subject" required style="border: 1px solid #d1d5db; border-radius: 6px; padding: 10px 12px; transition: all 250ms ease-in-out; font-size: 1rem; width: 100%;" onmouseover="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onmouseout="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';" onfocus="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';">
            </div>
            
            <div style="display: flex; flex-direction: column;">
              <label class="form-label" style="color: #545150; font-weight: 600; margin-bottom: 8px; display: block;">Project Type</label>
              <select class="form-control" required style="border: 1px solid #d1d5db; border-radius: 6px; padding: 10px 12px; transition: all 250ms ease-in-out; font-size: 1rem; width: 100%;" onfocus="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';">
                <option value="">Select a project type</option>
                <option value="residential">Residential</option>
                <option value="commercial">Commercial</option>
                <option value="industrial">Industrial</option>
              </select>
            </div>
            
            <div style="display: flex; flex-direction: column;">
              <label class="form-label" style="color: #545150; font-weight: 600; margin-bottom: 8px; display: block;">Message</label>
              <textarea class="form-control" rows="5" placeholder="Tell us about your project" required style="border: 1px solid #d1d5db; border-radius: 6px; padding: 10px 12px; transition: all 250ms ease-in-out; font-size: 1rem; resize: vertical; width: 100%; font-family: inherit;" onfocus="this.style.borderColor='#BF1B2C'; this.style.boxShadow='0 0 0 3px rgba(191, 27, 44, 0.1)';" onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"></textarea>
            </div>
            
            <button type="submit" style="background-color: #BF1B2C; border: 2px solid #BF1B2C; border-radius: 6px; cursor: pointer; font-weight: 600; color: white; padding: 12px 24px; transition: all 250ms ease-in-out; box-shadow: 0 2px 8px rgba(191, 27, 44, 0.2); font-size: 1rem;" onmouseover="this.style.backgroundColor='#9f1620'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(191, 27, 44, 0.3)';" onmouseout="this.style.backgroundColor='#BF1B2C'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(191, 27, 44, 0.2)';">
              Send Message
            </button>
          </form>
        </div>
      </div>

      <!-- Contact Information -->
      <div class="col-lg-6">
        <h4 style="font-size: 1.25rem; font-weight: 700; color: #1f2937; margin-bottom: 24px;">Contact Information</h4>
        
        <!-- Info Cards -->
        <div class="row g-3 mb-5">
          <?php foreach ($contactInfo as $index => $info): ?>
            <div class="col-12">
              <div class="d-flex gap-3 p-4 bg-light border" style="border: 1px solid #e5e7eb; border-radius: 8px; background-color: #f9fafb; transition: all 250ms ease-in-out;" onmouseover="this.style.transform='translateX(4px)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)';" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='none';">
                <!-- Icon -->
                <div class="flex-shrink-0" style="width: 48px; height: 48px; background: linear-gradient(135deg, #BF1B2C, #9f1620); border-radius: 6px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                  <?php
                    $icons = [
                      'phone' => '<svg class="bi" width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M11 1H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM5 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H5z"/><path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>',
                      'mail' => '<svg class="bi" width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2V8.5a.5.5 0 0 1-1 0V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v5.5a.5.5 0 0 1-1 0V4z"/><path d="m0 6.713 6.713 3.357L15.429 6m-6.023 5.27-6.5-3.25A.5.5 0 0 0 0 7.5v6a.5.5 0 0 0 .756.429l6.023-3.27 5.894 3.375A.5.5 0 0 0 14 13.5V7.5a.5.5 0 0 0-.75-.429l-5.23 2.642z"/></svg>',
                      'map' => '<svg class="bi" width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91z"/></svg>',
                      'clock' => '<svg class="bi" width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/></svg>',
                    ];
                    echo $icons[$info['icon']] ?? '';
                  ?>
                </div>
                <div>
                  <h5 style="font-weight: 600; color: #1f2937; margin-bottom: 6px; margin-top: 0;"><?php echo $info['title']; ?></h5>
                  <?php foreach ($info['details'] as $detail): ?>
                    <div style="color: #545150; font-size: 0.95rem; line-height: 1.5;"><?php echo $detail; ?></div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      
    </div>
  </div>
</section>
