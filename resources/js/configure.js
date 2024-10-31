document.addEventListener('DOMContentLoaded', function () {
    const colorSelect = document.getElementById('color');

    const updateSelectColor = () => {
        colorSelect.style.color = colorSelect.value;
    };

    updateSelectColor();

    colorSelect.addEventListener('change', updateSelectColor);
});
