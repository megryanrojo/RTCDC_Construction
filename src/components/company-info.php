<?php
$companyInfo = [
  [
    'icon' => 'map',
    'title' => 'Address',
    'details' => ['209 Vecino Blvd., Lacson St.', 'Brgy. 40, Bacolod City, 6100']
  ],
  [
    'icon' => 'location',
    'title' => 'Service Area',
    'details' => ['Western Visayas', 'Bacolod City, Philippines', 'Iloilo City, Philippines']
  ],
  [
    'icon' => 'phone',
    'title' => 'Mobile',
    'details' => ['(034)467-2191', '0995-842-1313']
  ],
  [
    'icon' => 'mail',
    'title' => 'Email',
    'details' => ['redtigerconstruction.adm@gmail.com', 'rtcdc.hrd@gmail.com']
  ]
];
?>

<section class="bg-light border-bottom" style="border-color: #e5e7eb; background-color: #f9fafb;">
  <div class="container py-5">
    <div class="row g-4">
      <?php foreach ($companyInfo as $info): ?>
        <div class="col-md-6 col-lg-3" style="animation: fadeIn 0.8s ease-in-out;">
          <div class="text-center h-100">
            <div class="mb-3" style="display: flex; justify-content: center;">
              <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #BF1B2C, #9f1620); display: flex; align-items: center; justify-content: center; border-radius: 8px; box-shadow: 0 4px 12px rgba(191, 27, 44, 0.2);">
                <?php
                  $icons = [
                    'map' => '<svg class="bi" width="32" height="32" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91z"/></svg>',
                    'location' => '<svg class="bi" width="32" height="32" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>',
                    'phone' => '<svg class="bi" width="32" height="32" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M11 1H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM5 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H5z"/><path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>',
                    'mail' => '<svg class="bi" width="32" height="32" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="m0 6.713 6.713 3.357L15.429 6m-6.023 5.27-6.5-3.25A.5.5 0 0 0 0 7.5v6a.5.5 0 0 0 .756.429l6.023-3.27 5.894 3.375A.5.5 0 0 0 14 13.5V7.5a.5.5 0 0 0-.75-.429l-5.23 2.642z"/></svg>',
                  ];
                  echo $icons[$info['icon']] ?? '';
                ?>
              </div>
            </div>
            <h5 style="font-weight: 600; color: #1f2937; margin-bottom: 8px; margin-top: 0;"><?php echo $info['title']; ?></h5>
            <?php foreach ($info['details'] as $detail): ?>
              <p style="color: #545150; font-size: 0.95rem; margin: 0; line-height: 1.5;"><?php echo $detail; ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
