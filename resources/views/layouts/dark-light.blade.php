<script>
    var themeToggle = document.getElementById('theme-toggle');
    var htmlElement = document.documentElement;

    var currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
        htmlElement.classList.add('dark');
    } else if (currentTheme === 'light') {
        htmlElement.classList.remove('dark');
    }


    themeToggle.addEventListener('click', () => {
        if (htmlElement.classList.contains('dark')) {
            htmlElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            htmlElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });
</script>

