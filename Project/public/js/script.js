const x = document.querySelector('#user-menu-button');
const y = document.querySelector('#menu');
const mb = document.querySelector('#mobile-menu');
const b = document.querySelector('#list');
x.addEventListener('click', function(){
    y.classList.toggle('hidden');
});
b.addEventListener('click', function(){
    b.classList.toggle('menu-active');
    mb.classList.toggle('hidden');
})
