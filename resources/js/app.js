import './bootstrap';

import Precognition from 'laravel-precognition-alpine';

import {toggleDropdowns} from './modules/toggleDropdowns.js';
import {toggleTheme} from './modules/toggleTheme.js';

window.Alpine = Alpine;

Alpine.plugin(Precognition);

toggleDropdowns();
toggleTheme();

document.addEventListener('click', event => {
    console.log('Click event listener');

    let eventTarget = event.target;

    if (!eventTarget.closest('.global-navigation-menu')) {
        console.log('Clicked outside!');
    }
}, false);

document.addEventListener('livewire:init', () => {
    Livewire.on('onkeydown', (event) => {
        if (event.key === 'Escape') {
            Livewire.dispatch('escape-key-clicked', false);
        }
    });
});

/*

    <script>
        document.onkeydown = function(event) {
            if (event.key === 'Escape') {
                window.livewire.emit('cancelReplying');
            }
        };
    </script>

document.addEventListener('click', function (event) {
    if (!event.target.closest('.some-selector')) {
        // Clicked outside the element...
    }
}, false);
      click on dropdown toggle
      add id of dropdown to list of open dropdowns
      add event listener to document
        if click is outside of dropdown
          remove id of dropdown from list of open dropdowns



    let globalNavigationExpanded = getExpanded(globalNavigationToggle);
    let utilityNavigationExpanded = false;

    if (utilityNavigationToggle !== null) {
        utilityNavigationExpanded = getExpanded(utilityNavigationToggle);
    }
    if (eventTarget === darkModeToggle) {
        toggleDarkMode(eventTarget);
    }

    do {
        if (eventTarget === globalNavigationToggle || eventTarget === utilityNavigationToggle) {
            console.log('Clicked inside!');
            toggleDropdown(eventTarget);
        }

        eventTarget = eventTarget.parentNode;
    } while (eventTarget);

    if (globalNavigationExpanded) {
        toggleDropdown(globalNavigationToggle);
    }

    if (utilityNavigationExpanded) {
        toggleDropdown(utilityNavigationToggle);
    }
*/

//    console.log('Clicked outside!');
