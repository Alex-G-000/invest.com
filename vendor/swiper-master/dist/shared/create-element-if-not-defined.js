import { getDocument } from 'ssr-window';
export default function createElementIfNotDefined(swiper, originalParams, params, checkProps) {
  var document = getDocument();

  if (swiper.params.createElements) {
    Object.keys(checkProps).forEach(function (key) {
      if (!params[key] && params.auto === true) {
        var element = swiper.$el.children("." + checkProps[key])[0];

        if (!element) {
          element = document.createElement('div');
          element.className = checkProps[key];
          swiper.$el.append(element);
        }

        params[key] = element;
        originalParams[key] = element;
      }
    });
  }

  return params;
}