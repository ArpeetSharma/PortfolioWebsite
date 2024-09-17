const screen = document.getElementById('screen');
let screenValue = '';

document.querySelectorAll('.button').forEach(button => {
    button.addEventListener('click', () => {
        const value = button.getAttribute('data-value');

        if (value === 'C') {
            screenValue = '';
        } else if (value === '=') {
            try {
                screenValue = eval(screenValue);
            } catch {
                screenValue = 'Error';
                document.querySelector('.calculator').classList.add('shake');
                setTimeout(() => {
                    document.querySelector('.calculator').classList.remove('shake');
                }, 500);
            }
        } else {
            screenValue += value;
        }

        screen.innerText = screenValue || '0';
    });
});

