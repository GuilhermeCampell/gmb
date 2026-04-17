document.addEventListener('DOMContentLoaded', () => {
    
    /**
     * VANILLA UI LOGIC
     * All GSAP animations have been disabled per user request.
     * Core functionality (tabs, menus) is maintained via vanilla high-performance JS.
     */

    // 1. Tab Switching Logic for Service Explorer
    const tabBtns = document.querySelectorAll('.tp-tab-btn');
    const expCards = document.querySelectorAll('.tp-exp-card');

    if (tabBtns.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // UI feedback: Remove active class from all buttons
                tabBtns.forEach(b => b.classList.remove('active'));
                
                // Set current button to active
                btn.classList.add('active');

                // Destination update logic
                const destination = btn.getAttribute('data-target');
                console.log('User selected destination: ' + destination);
                
                // Implementation Note: In a production environment with dynamic content, 
                // this is where we would trigger an AJAX call or filter the items.
                // For now, it provides visual feedback and button state management.
            });
        });
    }

    // 2. Ensuring Visibility (Redundancy check)
    // Though classes were removed from HTML, we explicitly ensure no stray JS-added styles linger.
    const reveals = document.querySelectorAll('[class*="gsap-"]');
    reveals.forEach(el => {
        el.style.opacity = '1';
        el.style.visibility = 'visible';
        el.style.transform = 'none';
    });
});
