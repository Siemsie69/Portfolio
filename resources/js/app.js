// Dark / Light Mode and Icons
document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    const themeIconMobile = document.getElementById('theme-icon-mobile');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenuButton = document.getElementById('close-menu-button');
    const darkOverlay = document.getElementById('dark-overlay');

    // Initialize dark mode
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'light') {
        document.documentElement.classList.remove('dark');
        themeIcon.classList.replace('fa-moon', 'fa-sun');
        themeIconMobile.classList.replace('fa-moon', 'fa-sun');
    } else {
        document.documentElement.classList.add('dark');
        themeIcon.classList.replace('fa-sun', 'fa-moon');
        themeIconMobile.classList.replace('fa-sun', 'fa-moon');
    }

    // Function to update particle colors based on theme
    function updateParticleColor(particle) {
        const isDarkMode = document.documentElement.classList.contains('dark');
        particle.style.backgroundColor = isDarkMode ? '#ffffff' : '#000000';
    }

    // Toggle dark mode
    const toggleTheme = () => {
        const isDarkMode = document.documentElement.classList.contains('dark');
        if (isDarkMode) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            themeIcon.classList.replace('fa-moon', 'fa-sun');
            themeIconMobile.classList.replace('fa-moon', 'fa-sun');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            themeIcon.classList.replace('fa-sun', 'fa-moon');
            themeIconMobile.classList.replace('fa-sun', 'fa-moon');
        }
        themeIcon.style.color = isDarkMode ? 'black' : 'white';
        themeIconMobile.style.color = isDarkMode ? 'black' : 'white';

        // Update particle colors
        particles.forEach(updateParticleColor);
    };

    themeToggle.addEventListener('click', toggleTheme);
    themeToggleMobile.addEventListener('click', toggleTheme);

    // -------------------------------------------------------------------------------------- //

    // Responsive Mobile View
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('translate-x-full');
        darkOverlay.style.display = mobileMenu.classList.contains('translate-x-full') ? 'none' : 'block'; // Show/hide overlay
    });

    // Close mobile menu
    closeMenuButton.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
        darkOverlay.style.display = 'none'; // Hide overlay
    });

    // -------------------------------------------------------------------------------------- //

    // Initialize particles container
    const particlesContainer = document.createElement('div');
    particlesContainer.id = 'particles-container';
    particlesContainer.style.position = 'fixed';
    particlesContainer.style.top = '0';
    particlesContainer.style.left = '0';
    particlesContainer.style.width = '100vw';
    particlesContainer.style.height = '100vh';
    particlesContainer.style.zIndex = '-1';
    particlesContainer.style.pointerEvents = 'none';
    document.body.prepend(particlesContainer);

    const particles = [];
    const quantity = 240;

    function createParticle() {
        const particle = document.createElement('div');
        particle.className = 'particle';
        const size = Math.random() > 0.5 ? '5px' : '2px'; // 50% chance of being small (2px) or large (5px)
        particle.style.width = size;
        particle.style.height = size;
        particle.style.height = size;
        particle.style.borderRadius = '50%';
        particle.style.position = 'absolute';
        particle.style.top = `${Math.random() * 100}vh`;
        particle.style.left = `${Math.random() * 100}vw`;
        particle.style.transition = 'transform 0.1s ease-out';
        updateParticleColor(particle);
        particlesContainer.appendChild(particle);
        particles.push(particle);

        // Debugging
        console.log('Particle created:', particle);
    }

    function initializeParticles() {
        console.log('Initializing particles...');
        for (let i = 0; i < quantity; i++) {
            createParticle();
        }
        console.log(`${quantity} particles created.`);
    }

    initializeParticles();

    // Mouse move event to make particles follow the cursor
    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        particles.forEach((particle, index) => {
            const offsetX = (mouseX - particle.offsetLeft) * 0.05;
            const offsetY = (mouseY - particle.offsetTop) * 0.05;
            particle.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
        });
    });
});

// -------------------------------------------------------------------------------------- //

document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab-button');  // All tabs (Work, Education, Achievements)
    const panels = document.querySelectorAll('.tab-panel');  // All panels (Work, Education, Achievements)

    // Function to toggle active state of tabs and panels
    const toggleTab = (index) => {
        tabs.forEach((tab, i) => {
            if (i === index) {
                // Add active styles to the clicked tab and show the corresponding panel
                tab.classList.add('bg-blue-600', 'text-white', 'border-2', 'border-blue-600', 'shadow-lg');
                tab.classList.remove('bg-white', 'text-blue-600');
                panels[i].classList.remove('hidden');
            } else {
                // Remove active styles from the other tabs and hide their panels
                tab.classList.remove('bg-blue-600', 'text-white', 'border-2', 'border-blue-600', 'shadow-lg');
                tab.classList.add('bg-white', 'text-blue-600');
                panels[i].classList.add('hidden');
            }
        });
    };

    // Handle click event on tabs
    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            toggleTab(index);
        });
    });

    // Handle scroll to section based on hash
    window.addEventListener('hashchange', () => {
        const hash = window.location.hash;
        if (hash === '#work-tab') {
            toggleTab(0);  // Work tab
        } else if (hash === '#education-tab') {
            toggleTab(1);  // Education tab
        } else if (hash === '#achievements-tab') {
            toggleTab(2);  // Achievements tab
        }
    });

    // Check initial hash on page load to set the active tab
    const initialHash = window.location.hash;
    if (initialHash === '#work-tab') {
        toggleTab(0);  // Work tab
    } else if (initialHash === '#education-tab') {
        toggleTab(1);  // Education tab
    } else if (initialHash === '#achievements-tab') {
        toggleTab(2);  // Achievements tab
    } else {
        // Default to Work tab if no hash is present
        toggleTab(0);  // Work tab
    }
});
