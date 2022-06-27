let mobile_icon = document.querySelector('.mobile-icon');
let menu = document.querySelector('.menu');
let close = document.querySelector('.close');

mobile_icon.onclick = function(){
    menu.style.width = '100%';
}
close.onclick = function(){
    menu.style.width = '0%';
}