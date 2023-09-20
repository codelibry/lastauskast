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


header();
stikyHeader();

//animations
appearence();

//acf-blocks
videoBlock();

// Parts
initPopups();
basicSliders();
mutliplySlider();
textFastSlider();
toggleReadMore();
copyGoogleSource();