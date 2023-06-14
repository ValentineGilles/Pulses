import './bootstrap';
require('./bootstrap');
require('./hello.jsx')
require('./src/index.js')

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
