const containers = document.querySelectorAll('.container');

containers.forEach(container => {
  container.querySelector('.slider').addEventListener('input', (e) => {
    container.style.setProperty('--position',   `${e.target.value}%`);
  })
})