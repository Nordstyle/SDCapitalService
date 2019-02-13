/* Main js */

/**
 * Закрепленное к верху меню навигации
 */
const fixedNavigationMenu = () => {
  const navigation = document.querySelector('.navigation');
  const navigationFake = document.querySelector('.navigation__fake');
  window.onscroll = () => {
    if(window.pageYOffset > 96) {
      navigation.style.position = 'fixed';
      navigation.style.backgroundColor = 'rgba(255,255,255,0.9)';
      navigation.style.top = '0';
      navigationFake.style.display = 'block';
    } else if (window.pageYOffset < 30) {
      navigation.style.backgroundColor = '';
      navigation.style.position = '';
      navigationFake.style.display = '';
    }
  }
};
fixedNavigationMenu();


/**
 * Слайдер на главной с паралаксом
 */
const parallaxSlider = () => {
  var swiper = new Swiper('.mainSlider .swiper-container', {
    speed: 600,
    parallax: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
};
parallaxSlider();

/**
 * Слайдер сертификатов 
 */

const certificatesSlider = () => {
  var swiper = new Swiper('.sertificates .swiper-container', {
    speed: 600,
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
      nextEl: '.sertificates .swiper-button-next',
      prevEl: '.sertificates .swiper-button-prev',
    },
  });
};
certificatesSlider();

lightGallery(document.querySelector('.sertificates .swiper-wrapper'), {
  thumbnail:true
}); 