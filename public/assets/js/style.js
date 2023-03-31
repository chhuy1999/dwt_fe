/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro

** Custom JS
----------------------------------------------*/

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    // Preloader
    const preloader = document.querySelector('#loader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove();
        });
    }

    // CHANGE TITLE
    const docTitle = document.title;
    window.addEventListener('blur', () => {
        document.title = 'Hãy tập trung làm việc 🤟';
    });

    window.addEventListener('focus', () => {
        document.title = docTitle;
    });

    // BTN SHOW/HIDE LEFT RIGHT
    const mainWrap = document.getElementById('mainWrap');
    const asideLeft = document.getElementById('aside-left');
    const asideRight = document.getElementById('aside-right');
    const btnCloseLeft = document.getElementById('btn-left');
    const btnCloseRight = document.getElementById('btn-right');

    function updateVariables() {
        const root = document.documentElement;
        const width = getComputedStyle(root).getPropertyValue('--width-sidebar').trim();
        asideLeft.style.width = width;
        asideRight.style.width = width;
        // asideRight.style.right = `${width}`;
        // mainWrap.style.marginLeft = width;
        // mainWrap.style.marginRight = '0';
    }

    updateVariables();

    btnCloseLeft.onclick = function () {
        const isClosed = asideLeft.style.left === `-${getComputedStyle(asideLeft).getPropertyValue('width').trim()}`;
        asideLeft.style.left = isClosed ? '0' : `-${getComputedStyle(asideLeft).getPropertyValue('width').trim()}`;
        mainWrap.style.marginLeft = isClosed ? getComputedStyle(asideLeft).getPropertyValue('width').trim() : '0';
    };

    btnCloseRight.onclick = function () {
        const isClosed = asideRight.style.right === `-${getComputedStyle(asideRight).getPropertyValue('width').trim()}`;
        asideRight.style.right = isClosed ? '0' : `-${getComputedStyle(asideRight).getPropertyValue('width').trim()}`;
        mainWrap.style.marginRight = isClosed ? getComputedStyle(asideRight).getPropertyValue('width').trim() : '0';
    };

    window.addEventListener('resize', function () {
        updateVariables();
    });

    function handleChangeIconLeft(icon) {
        if (icon.classList.contains('bi-arrow-bar-left')) {
            icon.classList.remove('bi-arrow-bar-left');
            icon.classList.add('bi-arrow-bar-right');
        } else {
            icon.classList.remove('bi-arrow-bar-right');
            icon.classList.add('bi-arrow-bar-left');
        }
    }
    function handleChangeIconRight(icon) {
        if (icon.classList.contains('bi-arrow-bar-right')) {
            icon.classList.remove('bi-arrow-bar-right');
            icon.classList.add('bi-arrow-bar-left');
        } else {
            icon.classList.remove('bi-arrow-bar-left');
            icon.classList.add('bi-arrow-bar-right');
        }
    }
    document.getElementById('btn-left').addEventListener('click', function () {
        handleChangeIconLeft(document.querySelector('#btn-left i'));
    });
    document.getElementById('btn-right').addEventListener('click', function () {
        handleChangeIconRight(document.querySelector('#btn-right i'));
    });

    // THIS MONTH
    // const today = new Date();
    // const month = (today.getMonth() + 1).toString().padStart(2, '0');
    // const year = today.getFullYear();
    // const currentDate = `${month}/${year}`;
    // document.getElementById('thismonth').textContent = currentDate;
    
    
});

// Reset form when click outside modal
$('#themThanhVien, #themTrangBi, #themCapNhanSu, #themDSCapToChuc, #themDSThemViTri, #themCoCauToChuc, #themMoiDinhMuc, #themChiSoKey, #giaoViecPhatSinh').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
})