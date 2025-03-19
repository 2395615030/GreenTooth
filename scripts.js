// 平滑滚动效果
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// 下拉菜单动画
const dropdown = document.querySelector('.dropdown');
const dropdownContent = document.querySelector('.dropdown-content');

dropdown.addEventListener('mouseenter', () => {
    dropdownContent.style.display = 'block';
});

dropdown.addEventListener('mouseleave', () => {
    dropdownContent.style.display = 'none';
});