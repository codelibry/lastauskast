import $ from 'jquery';

// import { lottie } from './lottie';

import {header, stikyHeader} from './parts/header/header';

// Animations
import {appearence} from './animations/appearence';

// Blocks
import {videoBlock} from './parts/blocks/video';

// Parts
import {initPopups} from './parts/popups';
import {basicSliders, mutliplySlider, textFastSlider} from './parts/slider';
import {toggleReadMore} from './parts/read-more';
import {copyGoogleSource} from './parts/google-source';
import {wrapSingleIframe} from './parts/single';
import {setVisitedLinkColor} from './parts/links';
import {checkCookiesAccepted} from './parts/cookie-overlay';


try {
  header();
  stikyHeader();

  //animations
  appearence();

  //acf-blocks
  videoBlock();

  // Parts
  initPopups();
  toggleReadMore();
  copyGoogleSource();
  wrapSingleIframe();
  setVisitedLinkColor();
} catch(err){
  console.log(err)
}


window.addEventListener('load', function() {
  console.log('window loaded');

  basicSliders();
  mutliplySlider();
  textFastSlider();
});
