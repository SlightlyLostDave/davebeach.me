import core from './core';

const addEventListeners = () => {
    var $hamburger = document.querySelector('.hamburger'),
        $mainMenu = document.querySelector('.main-menu');

    $hamburger.addEventListener('click', function() {
        $hamburger.classList.toggle('is-active');
        $mainMenu.classList.toggle('is-active');
    });
};

const navInit = () => {
    addEventListeners();
};

core.ready(navInit());
