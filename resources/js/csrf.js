// Set up CSRF token for AJAX requests
document.addEventListener('DOMContentLoaded', function() {
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    // Add the CSRF token to all AJAX requests
    const originalFetch = window.fetch;
    window.fetch = function(url, options = {}) {
        if (!options.headers) {
            options.headers = {};
        }
        
        if (!(options.headers instanceof Headers)) {
            options.headers = new Headers(options.headers);
        }
        
        options.headers.set('X-CSRF-TOKEN', token);
        return originalFetch(url, options);
    };
});