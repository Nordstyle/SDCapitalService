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
    parallax: true
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

//Smooth scroll
const scroll = new SmoothScroll('a[href*="#"]', {
  speed: 1000,
  speedAsDuration: true
});


/* Шаблон страницы политики конф. */
const politic = `<div style="font-size: 1.6rem; line-height: 2.4rem;">
  <h2>Политика конфиденциальности</h2>
  <p>Настоящий документ «Политика конфиденциальности» представляет собой правила использования персональной информации Пользователя.</p>
  <p>Предоставляя свои персональные данные Пользователь даёт согласие на обработку, хранение и использование своих персональных данных на основании ФЗ № 152-ФЗ «О персональных данных» от 27.07.2006 г. в следующих целях:</p>
  <ul>
    <li>Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся использования Сайта, оказания услуг, обработку запросов и заявок от Пользователя.</li>
    <li>Осуществление клиентской поддержки</li>
    <li>Получения Пользователем информации о маркетинговых событиях</li>
    <li>Проведения аудита и прочих внутренних исследований с целью повышения качества предоставляемых услуг</li>
  </ul>
  <h3>Персональная информация</h3>
  <p>Под персональными данными подразумевается любая информация, предоставляемая пользователем самостоятельно, включая персональные данные пользователя, такие как:</p>
  <ul>
  <li>Фамилия, Имя, Отчество</li>
  <li>Контактный телефон</li>
  <li>Адрес электронной почты</li>
  </ul>
  А также данные, которые передаются в автоматическом режиме.
  <p>Персональные данные Пользователей хранятся исключительно на электронных носителях и обрабатываются с использованием автоматизированных систем, за исключением случаев, когда неавтоматизированная обработка персональных данных необходима в связи с исполнением требований законодательства.</p>
  <p>Компания обязуется не передавать полученные персональные данные третьим лицам, за исключением следующего случая:</p>
  <ul>
  <li>По запросам уполномоченных органов государственной власти РФ только по основаниям и в порядке, установленным законодательством РФ.</li>
  </ul>
  <p> Компания оставляет за собой право вносить изменения в одностороннем порядке в настоящие правила, при условии, что изменения не противоречат действующему законодательству РФ. Изменения условий настоящих правил вступают в силу после их публикации на Сайте.
  </p></div>
`;

const politicModal = new tingle.modal({
  stickyFooter: false,
  closeMethods: ['overlay', 'button', 'escape'],
  closeLabel: "Close",
  cssClass: ['politic_wrapper', 'custom-class-2']
});

const showPolitics = function(){
  politicModal.setContent(politic);
  politicModal.open();
};

const politicHandlers = () => {
  if (!document.querySelector('.politic__open')) return null;
  const links = [...document.querySelectorAll('.politic__open')];

  links.forEach(item => {
    item.onclick = function() {
      showPolitics();
    };
  });
};
politicHandlers();
