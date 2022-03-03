import { getWindow } from 'ssr-window';
export default function Resize(_ref) {
  var swiper = _ref.swiper,
      on = _ref.on,
      emit = _ref.emit;
  var window = getWindow();
  var observer = null;

  var resizeHandler = function resizeHandler() {
    if (!swiper || swiper.destroyed || !swiper.initialized) return;
    emit('beforeResize');
    emit('resize');
  };

  var createObserver = function createObserver() {
    if (!swiper || swiper.destroyed || !swiper.initialized) return;
    observer = new ResizeObserver(function (entries) {
      var width = swiper.width,
          height = swiper.height;
      var newWidth = width;
      var newHeight = height;
      entries.forEach(function (_ref2) {
        var contentBoxSize = _ref2.contentBoxSize,
            contentRect = _ref2.contentRect,
            target = _ref2.target;
        if (target && target !== swiper.el) return;
        newWidth = contentRect ? contentRect.width : (contentBoxSize[0] || contentBoxSize).inlineSize;
        newHeight = contentRect ? contentRect.height : (contentBoxSize[0] || contentBoxSize).blockSize;
      });

      if (newWidth !== width || newHeight !== height) {
        resizeHandler();
      }
    });
    observer.observe(swiper.el);
  };

  var removeObserver = function removeObserver() {
    if (observer && observer.unobserve && swiper.el) {
      observer.unobserve(swiper.el);
      observer = null;
    }
  };

  var orientationChangeHandler = function orientationChangeHandler() {
    if (!swiper || swiper.destroyed || !swiper.initialized) return;
    emit('orientationchange');
  };

  on('init', function () {
    if (swiper.params.resizeObserver && typeof window.ResizeObserver !== 'undefined') {
      createObserver();
      return;
    }

    window.addEventListener('resize', resizeHandler);
    window.addEventListener('orientationchange', orientationChangeHandler);
  });
  on('destroy', function () {
    removeObserver();
    window.removeEventListener('resize', resizeHandler);
    window.removeEventListener('orientationchange', orientationChangeHandler);
  });
}