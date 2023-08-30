import $  from 'jquery';

// import { lottie } from './lottie';

import { header } from './parts/header/header';

// Animations
import { appearence } from './animations/appearence';

// Blocks
import { videoBlock } from './parts/blocks/video';

// Parts
import { initPopups } from './parts/popups';
import { basicSliders } from './parts/slider';
import { readMore } from './parts/read-more';


header();

//animations
appearence();

//acf-blocks
videoBlock();

// Parts
initPopups();
basicSliders();
readMore();