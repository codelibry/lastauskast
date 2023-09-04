import $ from 'jquery';

// import { lottie } from './lottie';

import {header, stikyHeader} from './parts/header/header';

// Animations
import {appearence} from './animations/appearence';

// Blocks
import {videoBlock} from './parts/blocks/video';

// Parts
import {initPopups} from './parts/popups';
import {basicSliders} from './parts/slider';
import {readMore} from './parts/read-more';


header();
stikyHeader();

//animations
appearence();

//acf-blocks
videoBlock();

// Parts
initPopups();
basicSliders();
readMore();