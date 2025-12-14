<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="assets/colors.css" rel="stylesheet">
    <link href="assets/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>About</title>
</head>
<body>
    <?php include 'components/navbar.php'?>
    <?php include 'components/hero.php'?>
    <?php include 'components/company-profile.php'?>
    <?php include 'components/about.php'?>
    <?php include 'components/vision-mission.php'?>
    <?php include 'components/services.php'?>
    <?php include 'components/core-services.php'?>
    <?php include 'components/differentiators.php'?>
    <?php include 'components/projects.php'?>
    <?php include 'components/contact.php'?>
    <?php include 'components/company-info.php'?>
    <?php include 'components/footer.php'?>
    
    <script>
        // Intersection Observer for scroll-triggered animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Determine animation type based on class
                    if (entry.target.classList.contains('scroll-animate-fade')) {
                        entry.target.classList.add('in-view-fade');
                    } else if (entry.target.classList.contains('scroll-animate-left')) {
                        entry.target.classList.add('in-view-left');
                    } else if (entry.target.classList.contains('scroll-animate-right')) {
                        entry.target.classList.add('in-view-right');
                    } else if (entry.target.classList.contains('scroll-animate-down')) {
                        entry.target.classList.add('in-view-down');
                    } else {
                        // Default animation
                        entry.target.classList.add('in-view');
                    }
                    
                    // Trigger counter animations
                    if (entry.target.classList.contains('counter')) {
                        animateCounter(entry.target);
                    }
                    
                    // Stop observing after animation triggers
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Counter animation function
        function animateCounter(element) {
            const target = parseInt(element.dataset.target, 10);
            const duration = 2000; // 2 seconds
            const start = Date.now();
            
            function updateCounter() {
                const elapsed = Date.now() - start;
                const progress = Math.min(elapsed / duration, 1);
                const current = Math.floor(target * progress);
                element.textContent = current + '+';
                
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                }
            }
            
            updateCounter();
        }

        // Observe all elements with scroll-animate class
        document.addEventListener('DOMContentLoaded', () => {
            const scrollAnimateElements = document.querySelectorAll('.scroll-animate');
            scrollAnimateElements.forEach(element => {
                observer.observe(element);
            });
            
            // Also observe counter elements
            const counterElements = document.querySelectorAll('.counter');
            counterElements.forEach(element => {
                observer.observe(element);
            });
        });

        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Enhanced card hover effects
        document.querySelectorAll('[data-hover="card"]').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
                this.style.boxShadow = '0 12px 24px rgba(191, 27, 44, 0.15)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
            });
        });

        // SCROLLSPY: Highlight nav item whose anchor section is in view
        function activateNavLink(sectionId) {
          document.querySelectorAll('.navbar-link').forEach(link => {
            link.classList.remove('active');
          });
          const main = document.getElementById('nav-' + sectionId);
          if (main) main.classList.add('active');
          const mobile = document.getElementById('mnav-' + sectionId);
          if (mobile) mobile.classList.add('active');
        }

        function getVisibleSection() {
          const sectionIds = ['home', 'company-profile', 'about', 'vision', 'services', 'projects', 'contact'];
          let bestSection = sectionIds[0];
          let bestDistance = Infinity;
          
          // Get current scroll position (center of viewport)
          const viewportCenter = window.innerHeight / 2;
          
          for (const id of sectionIds) {
            const el = document.getElementById(id);
            if (el) {
              const rect = el.getBoundingClientRect();
              const sectionCenter = rect.top + rect.height / 2;
              const distance = Math.abs(sectionCenter - viewportCenter);
              
              // Find section closest to viewport center
              if (distance < bestDistance) {
                bestDistance = distance;
                bestSection = id;
              }
            }
          }
          return bestSection;
        }
        
        // Debounced scroll handler
        let scrollTimeout;
        function onScroll() {
          clearTimeout(scrollTimeout);
          scrollTimeout = setTimeout(() => {
            const visible = getVisibleSection();
            activateNavLink(visible);
          }, 50);
        }
        
        window.addEventListener('scroll', onScroll, { passive: true });
        
        document.addEventListener('DOMContentLoaded', () => {
          let hash = window.location.hash.replace('#', '');
          if (!hash) hash = getVisibleSection();
          activateNavLink(hash);
          
          document.querySelectorAll('.navbar-link').forEach(link => {
            link.addEventListener('click', function(e) {
              e.preventDefault();
              const sectionId = this.getAttribute('data-section');
              activateNavLink(sectionId);
              const target = document.getElementById(sectionId);
              if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
              }
            });
          });
        });
    </script>
</body>
</html> 