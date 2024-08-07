document.getElementById('Home-btn').addEventListener('click', () => loadContent('Home'));
document.getElementById('Category-btn').addEventListener('click', () => loadContent('Category', true));
document.getElementById('Advertistment-btn').addEventListener('click', () => loadContent('Advertistment', true));
document.getElementById('Contact-btn').addEventListener('click', () => loadContent('Contact', true));

function loadContent(type, check_js = false) {
    fetch(`HTML/Components/${type}.html`)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Network response was not ok. Status: ${response.status}`);
            }
            return response.text();
        })
        .then(html => {
            document.getElementById('content-area').innerHTML = html;
            loadCSS(`CSS/Components/${type}.css`);

            if (check_js) {
                loadJS([`JS/Components/${type}.js`]);
            }
        })
        .catch(err => console.error(`Failed to load ${type}: `, err));
}
loadContent('Home');

function loadCSS(href) {
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = href;
    document.head.appendChild(link);
}

function loadJS(scripts) {
    if (!Array.isArray(scripts)) {
        scripts = [scripts];
    }

    scripts.forEach(src => {
        const script = document.createElement('script');
        script.src = src;
        script.defer = true;
        document.body.appendChild(script);
    });
}
