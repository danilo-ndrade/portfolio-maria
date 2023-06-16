document.addEventListener('DOMContentLoaded', function(){


    let sideBarToggle = document.querySelector('.toggle-sidebar');
    let sidebar = document.querySelector('.sidebar');
    let toggleIcon = document.querySelector('.gg-math-plus');
    
    sideBarToggle.addEventListener('click', function () {
        sidebar.classList.toggle('show-sidebar');
        toggleIcon.classList.toggle('toggle-icon');
    });
    
    
    });