<div>
   <!--  dark mode -->
   <div class="text-end" x-data="{
    darkMode: localStorage.getItem('darkMode') === 'true',
    turnOnDarkMode() {
        this.darkMode = true;
        document.querySelector('body').classList.add('dark');
        document.querySelectorAll('.bg-white, .bg-light').forEach(el => {

        });
    },
    turnOffDarkMode() {
        this.darkMode = false;
        document.querySelector('body').classList.remove('dark');
        document.querySelectorAll('.bg-dark').forEach(el => {
            el.classList.remove('bg-dark');

        });
    }
}" x-init="darkMode ? turnOnDarkMode() : turnOffDarkMode()">
    <label class="toggle2">
        <input type="checkbox" x-bind:checked="darkMode"
            x-on:click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode); darkMode ? turnOnDarkMode() : turnOffDarkMode()"
            class="toggle2-checkbox">
        <div class="toggle2-switch"></div>
        <span class="toggle2-label" x-text="darkMode ? '🤍' : '🖤'"></span>
    </label>
</div>
<!-- ... -->
</div>
