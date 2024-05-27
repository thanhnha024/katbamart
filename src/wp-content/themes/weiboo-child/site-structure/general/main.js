document.addEventListener('DOMContentLoaded', function() {
    function sortWeightList() {
        const ul = document.querySelector('ul[role="radiogroup"]');
        const items = Array.from(ul.querySelectorAll('li'));

        const sortedItems = items.sort((a, b) => {
            const getWeight = (item) => {
                const value = item.getAttribute('data-value').toLowerCase();
                if (value.includes('kg')) {
                    return parseFloat(value) * 1000;
                } else if (value.includes('g')) {
                    return parseFloat(value);
                }
                return 0;
            };

            return getWeight(a) - getWeight(b);
        });

        // Clear existing items
        ul.innerHTML = '';

        // Append the sorted items
        sortedItems.forEach(item => {
            ul.appendChild(item);
        });
    }

    // Run the sort function when the page loads
    sortWeightList();
});
