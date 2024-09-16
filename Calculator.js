const screen = document.getElementById('screen');
let currentInput = '';
let operator = ;
let previousInput = '';

function appendNumber(number) {
  currentInput += number;
  updateScreen();
}

function appendOperator(op) {
  if (currentInput === '') return;
  if (previousInput !== '') {
    calculate();
  }
  operator = op;
  previousInput = currentInput;
  currentInput = '';
}

function clearScreen() {
  currentInput = '';
  previousInput = '';
  operator = null;
  updateScreen();
}

function del() {
  currentInput = currentInput.slice(0, -1);
  updateScreen();
}

function calculate() {
  let result;
  const prev = parseFloat(previousInput);
  const current = parseFloat(currentInput);

  if (isNaN(prev) || isNaN(current)) return;

  switch (operator) {
    case '+':
      result = prev + current;
      break;
    case '-':
      result = prev - current;
      break;
    case '*':
      result = prev * current;
      break;
    case '/':
      result = prev / current;
      break;
    default:
      return;
  }

  currentInput = result;
  operator = null;
  previousInput = '';
  updateScreen();
}

function updateScreen() {
  screen.innerText = currentInput || '0';
}
