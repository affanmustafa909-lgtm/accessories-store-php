const dots = document.querySelectorAll('.colors .c');

const musicTag = document.getElementById('musicTag');
const viewBtn = document.getElementById('viewProductsBtn');
const arrowBtn1 = document.getElementById('arrowBtn1');
const arrowBtn2 = document.getElementById('arrowBtn2');
const arrowBtn3 = document.getElementById('arrowBtn3');
const popularBadge = document.getElementById('popularBadge');

dots.forEach(dot => {
  dot.addEventListener('click', () => {

    const color = getComputedStyle(dot).backgroundColor;

    musicTag.style.backgroundColor = color;
    musicTag.style.color = '#fff';

    viewBtn.style.backgroundColor = color;
    viewBtn.style.borderColor = color;

    arrowBtn1.style.backgroundColor = color;
    arrowBtn1.style.color = '#fff';

    arrowBtn2.style.backgroundColor = color;
    arrowBtn2.style.color = '#fff';

    arrowBtn3.style.backgroundColor = color;
    arrowBtn3.style.color = '#fff';

    popularBadge.style.backgroundColor = color;
    popularBadge.style.color = '#fff';
  });
});
