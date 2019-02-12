/* Main js */

/**
 * Закрепленное к верху меню навигации
 */
const fixedNavigationMenu = () => {
  const navigation = document.querySelector('.navigation');
  window.onscroll = () => {
    if(window.pageYOffset > 96) {
      navigation.style.position = 'fixed';
      navigation.style.backgroundColor = 'rgba(255,255,255,0.9)';
      navigation.style.top = '0';
    } else if (window.pageYOffset < 30) {
      navigation.style.backgroundColor = '';
      navigation.style.position = 'relative';
    }
  }
};
fixedNavigationMenu();