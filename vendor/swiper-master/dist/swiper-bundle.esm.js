/**
 * Swiper 7.3.3
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2022 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: January 6, 2022
 */

import Swiper from './core/core.js';
export { default as Swiper, default } from './core/core.js';
import Keyboard from './modules/keyboard/keyboard.js';
import Mousewheel from './modules/mousewheel/mousewheel.js';
import Navigation from './modules/navigation/navigation.js';
import Pagination from './modules/pagination/pagination.js';
import Scrollbar from './modules/scrollbar/scrollbar.js';
import HashNavigation from './modules/hash-navigation/hash-navigation.js';
import Autoplay from './modules/autoplay/autoplay.js';
import Thumbs from './modules/thumbs/thumbs.js';

// Swiper Class
var modules = [Keyboard, Mousewheel, Navigation, Pagination, Scrollbar, HashNavigation, Autoplay, Thumbs];
Swiper.use(modules);
