// Theme Initialization (Prevent Flash)
(function () {
    const savedTheme = localStorage.getItem('theme');
    const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    document.documentElement.setAttribute('data-bs-theme', savedTheme || systemTheme);
})();

// Theme Switcher Logic
document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const htmlElement = document.documentElement;

    if (!themeToggle || !themeIcon) return;

    function updateIcon(theme) {
        if (theme === 'dark') {
            themeIcon.classList.replace('bi-sun-fill', 'bi-moon-stars-fill');
        } else {
            themeIcon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
        }
    }

    // Initialize icon
    updateIcon(htmlElement.getAttribute('data-bs-theme'));

    themeToggle.addEventListener('click', () => {
        const currentTheme = htmlElement.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

        htmlElement.setAttribute('data-bs-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateIcon(newTheme);
    });

    // Sync with system changes if no manual preference is set
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (!localStorage.getItem('theme')) {
            const newTheme = e.matches ? 'dark' : 'light';
            htmlElement.setAttribute('data-bs-theme', newTheme);
            updateIcon(newTheme);
        }
    });
});
