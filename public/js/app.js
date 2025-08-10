import './bootstrap';

import Lenis from '@studio-freight/lenis'

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const lenis = new Lenis({
  duration: 1.2,
  smooth: true
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
