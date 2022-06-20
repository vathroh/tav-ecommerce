

<template>
  <section>
    <div class="relative md:flex md:justify-end md:items-center" style="margin-top: -41px;">
      <div class="w-screen relative h-[300px] sm:h-[400px] md:h-full md:absolute bg-blue-900">
        <div class="absolute w-full h-full">
          <img class="h-full w-full object-cover" src="images\sell-hero-1.png" alt="" />
        </div>
        <div class="absolute w-full md:h-full md:w-1/2 md:flex md:items-center md:-translate-y-16">
          <div class="p-10 text-center w-full lg:p-16 xl:p-20">
            <h1
              class="text-white text-2xl text-center font-bold mt-4 mb-2 capitalize sm:text-4xl md:text-left md:text-3xl xl:text-5xl">
              Mau jual mobil dengan <br />
              harga Terbaik ?
            </h1>
            <h2
              class="text-center font-bold text-3xl text-blue-300 sm:text-3xl md:text-left md:text-6xl md:mt-8 lg:text-7xl xl:text-8xl">
              TAV Mobil<br />
              <span class="text-blue-300 text-center text-xl md:text-4xl lg:text-5xl xl:text-6xl">
                Solusinya</span>
            </h2>
          </div>
        </div>
      </div>

      <div class="relative md:top-1 m-10 md:right-2 md:bg-white md:rounded md:w-[38%] md:p-10 xl:p-16">
        <div class="text-2xl text-blue-900 text-center font-semibold m-auto md:text-xl md:mt-5 xl:text-2xl">
          Silahkan masukkan data di bawah ini untuk kami hubungi
        </div>
        <div class="md:text-sm xl:text-md">
          <div class="my-4">
            <label for="merk" class="text-md">Merk</label>
            <select name="merk" id="merk" class="text-md w-full px-2 py-2 border-2 rounded mt-1" placeholder="Pilih Merk Mobil Anda">
              <option selected>Pilih Merk</option>
              <option :value="merks.id" v-for="merks in merk">{{merks.name}}</option>
            </select>
          </div>
          <div class="my-3">
            <label for="model" class="text-md">Model</label>
            <select name="model" id="model" class="text-md w-full px-2 py-2 border-2 rounded mt-1">
              <option selected>Pilih Model</option>
              <option :value="models.id" v-for="models in model">{{models.nama_kategori}}</option>
            </select>
          </div>
          <div class="my-3">
            <label for="Tahun" class="text-md">Tahun</label>
            <select name="Tahun" id="Tahun" class="text-md w-full px-2 py-2 border-2 rounded mt-1">
              <option selected>Pilih Tahun</option>
            </select>
          </div>
          <div class="my-3">
            <label for="Kota" class="text-sm">No. Handphone/WhatsApp</label>
            <input class="text-md w-full px-2 py-2 border-2 rounded mt-1" type="text" />
          </div>
          <button type="submit"
            class="w-full text-white bg-blue-900 rounded-md font-semibold h-12 tracking-widest my-3 hover:bg-blue-700">
            Mulai
          </button>
        </div>
      </div>
    </div>
    <div class="bg-[#f0f0f0] p-20">
      <h3 class="sell-car-section-heading text-blue-900">
        Semakin Mudah Menjual Mobil di TAV
      </h3>
      <div class="sm:grid sm:grid-cols-2 sm:gap-4 lg:grid-cols-4 mt-10">
        <div class="w-full bg-white rounded-md shadow-2xl p-10 h-56 relative overflow-hidden my-4 sm:my-0">
          <div
            class="w-28 h-28 bg-blue-900 flex justify-center items-center rounded-full absolute top-[-40px] left-[-40px] text-2xl font-bold">
            <h2 class="translate-x-3 translate-y-3 text-white">1</h2>
          </div>
          <div class="w-full h-full">
            <div class="w-full h-[65%]">
              <img src="/images/illustration/Coding _Outline.svg" class="object-contain w-full h-full"
                alt="input-data" />
            </div>
            <h2 class="text-blue-900 text-xl text-center font-semibold text-shadow-sm">
              Input data mobil Anda
            </h2>
          </div>
        </div>

        <div class="w-full bg-white rounded-md shadow-2xl p-10 h-56 relative overflow-hidden my-4 sm:my-0">
          <div
            class="w-28 h-28 bg-blue-900 flex justify-center items-center rounded-full absolute top-[-40px] left-[-40px] text-2xl font-bold">
            <h2 class="translate-x-3 translate-y-3 text-white">2</h2>
          </div>
          <div class="w-full h-full">
            <div class="w-full h-[65%]">
              <img src="/images/illustration/Mobile Phone_Outline.svg" class="object-contain w-full h-full"
                alt="input-data" />
            </div>
            <h2 class="text-blue-900 text-xl text-center font-semibold text-shadow-sm">
              TAV menghubungi Anda
            </h2>
          </div>
        </div>

        <div class="w-full bg-white rounded-md shadow-2xl p-10 h-56 relative overflow-hidden my-4 sm:my-0">
          <div
            class="w-28 h-28 bg-blue-900 flex justify-center items-center rounded-full absolute top-[-40px] left-[-40px] text-2xl font-bold">
            <h2 class="translate-x-3 translate-y-3 text-white">3</h2>
          </div>
          <div class="w-full h-full">
            <div class="w-full h-[65%]">
              <img src="/images/illustration/Car_Two Color.svg" class="object-contain w-full h-full" alt="input-data" />
            </div>
            <h2 class="text-blue-900 text-xl text-center font-semibold text-shadow-sm">
              Inspeksi mobil Anda
            </h2>
          </div>
        </div>
        <div class="w-full bg-white rounded-md shadow-2xl p-10 h-56 relative overflow-hidden my-4 sm:my-0">
          <div
            class="w-28 h-28 bg-blue-900 flex justify-center items-center rounded-full absolute top-[-40px] left-[-40px] text-2xl font-bold">
            <h2 class="translate-x-3 translate-y-3 text-white">4</h2>
          </div>
          <div class="w-full h-full">
            <div class="w-full h-[65%]">
              <img src="/images/illustration/Bank note_Isometric.svg" class="h-full w-full object-contain"
                alt="input-data" />
            </div>
            <h2 class="text-blue-900 text-center font-semibold text-shadow-sm text-lg">
              Dapatkan harga terbaik dan pembayaran dalam waktu singkat
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="my-7 mx-auto w-[90%] lg:my-12">
      <div class="sell-car-section-heading">
        <h2 class="sell-car-section-heading-h2">Kenapa Jual Mobil di TAV?</h2>
      </div>

      <div class="sell-car-section-why-sell-content">
        <div class="grid-why-sell">
          <div class="why-sell-content-icon">
            <img src="images/illustration/Handshake_Outline.svg" width="140px" alt="" />
          </div>
          <div class="why-sell-content-text">
            <h2 class="why-sell-content-text-heading">Aman dan Terpercaya</h2>
            <p class="why-sell-content-text-p">
              Inspektor profesional kami melakukan pemeriksaan mobil secara
              menyeluruh untuk mengetahui harga yang sesuai dengan kondisi
              mobil Anda.
            </p>
          </div>
        </div>
        <div class="grid-why-sell">
          <div class="why-sell-content-icon">
            <img src="images/illustration/Handshake_Two Color.svg" width="140px" alt="" />
          </div>
          <div class="why-sell-content-text">
            <h2 class="why-sell-content-text-heading">Penawaran Terbaik</h2>
            <p class="why-sell-content-text-p">
              Kami memberikan harga yang sesuai dan kami pastikan memberikan
              penawaran terbaik untuk Anda.
            </p>
          </div>
        </div>
        <div class="grid-why-sell mt-4">
          <div class="flex items-center">
            <img src="images/illustration/Entrepreneurs_Isometric.svg" width="140px" alt="trustworthy" />
          </div>
          <div class="why-sell-content-text">
            <h2 class="why-sell-content-text-heading">Proses Mudah</h2>
            <p class="why-sell-content-text-p">
              Dapatkan pengalaman yang mudah & nyaman mulai dari proses
              inspeksi mobil hingga proses kepengurusan semua dokumen Anda.
            </p>
          </div>
        </div>
        <div class="grid-why-sell mt-4">
          <div class="flex items-center">
            <img src="images/illustration/Rocket Boy_Flatline.svg" width="140px" alt="trustworthy" />
          </div>
          <div class="why-sell-content-text">
            <h2 class="why-sell-content-text-heading">Pembayaran Cepat</h2>
            <p class="why-sell-content-text-p">
              Kami tidak main-main. Setelah kesepakatan dibuat, kami membayar
              mobil Anda secepatnya.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-[#f0f0f0] p-10">
      <div class="my-16 m-auto flex items-center justify-center p-5">
        <img class="mb-20" src="images/icons/icons8-why-quest-96.png" alt="" />
        <div class="p-5">
          <h1
            class="text-md text-slate-700 font-bold text-shadow-md text-center md:text-3xl ">
            Punya pertanyaan lebih lanjut ?
          </h1>
          <div class="text-slate-700 w-full flex justify-center md:mt-2 lg:mt-3 xl:mt-4">
            <h1 class="text-md font-semibold text-shadow-md sm:text-xl md:text-2xl">
              Hubungi Kami
              <a href="#"><i class="fa fa-whatsapp"></i></a>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>


<script>
export default {
  data(){
    return{
      merk: [],
      model: []
    }
  },

  created(){
    fetch('/api/brand')
      .then(response => response.json())
      .then(data => {
        this.merk = data
        console.log(this.merk)
      }),

      fetch('/api/model')
      .then(response => response.json())
      .then(data => {
        this.model = data
        console.log(this.model)
      })
  }
}
</script>

<style scoped>
/*
! tailwindcss v3.0.24 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
*/

html {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */

}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {

  /* 1 */
  font-size: 1em;
  /* 2 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/*
Ensure the default browser behavior of the `hidden` attribute.
*/

[hidden] {
  display: none;
}

*, ::before, ::after {
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.top-\[-40px\] {
  top: -40px;
}

.left-\[-40px\] {
  left: -40px;
}

.m-10 {
  margin: 2.5rem;
}

.m-auto {
  margin: auto;
}

.my-4 {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.my-3 {
  margin-top: 0.75rem;
  margin-bottom: 0.75rem;
}

.my-7 {
  margin-top: 1.75rem;
  margin-bottom: 1.75rem;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.my-16 {
  margin-top: 4rem;
  margin-bottom: 4rem;
}

.mt-4 {
  margin-top: 1rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.mt-1 {
  margin-top: 0.25rem;
}

.mt-10 {
  margin-top: -1.5rem;
}

.mb-20 {
  margin-bottom: 5rem;
}

.flex {
  display: flex;
}

.h-\[300px\] {
  height: 300px;
}

.h-full {
  height: 100%;
}

.h-12 {
  height: 3rem;
}

.h-56 {
  height: 14rem;
}

.h-28 {
  height: 7rem;
}

.h-\[65\%\] {
  height: 65%;
}

.w-screen {
  width: 100vw;
}

.w-full {
  width: 100%;
}

.w-28 {
  width: 7rem;
}

.w-\[90\%\] {
  width: 90%;
}

.translate-x-3 {
  --tw-translate-x: 0.75rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-y-3 {
  --tw-translate-y: 0.75rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.items-center {
  align-items: center;
}

.justify-center {
  justify-content: center;
}

.overflow-hidden {
  overflow: hidden;
}

.rounded {
  border-radius: 0.25rem;
}

.rounded-md {
  border-radius: 0.375rem;
}

.rounded-full {
  border-radius: 9999px;
}

.border-2 {
  border-width: 2px;
}

.bg-blue-900 {
  --tw-bg-opacity: 1;
  background-color: rgb(30 58 138 / var(--tw-bg-opacity));
}

.bg-\[\#f0f0f0\] {
  --tw-bg-opacity: 1;
  background-color: rgb(226 232 240 / var(--tw-bg-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.object-contain {
  -o-object-fit: contain;
     object-fit: contain;
}

.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}

.p-10 {
  padding-top: 0.5rem;
  padding-bottom: 2.5rem;
}

.p-20 {
  padding-top: 3rem;
  padding-bottom: 3rem;
  padding-left: 4rem;
  padding-right: 4rem;
}
.p-5 {
  padding: 1.25rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.text-center {
  text-align: center;
}

.font-sans {
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.font-bold {
  font-weight: 700;
}

.font-semibold {
  font-weight: 600;
}

.capitalize {
  text-transform: capitalize;
}

.tracking-widest {
  letter-spacing: 0.1em;
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-blue-300 {
  --tw-text-opacity: 1;
  color: rgb(147 197 253 / var(--tw-text-opacity));
}

.text-blue-900 {
  --tw-text-opacity: 1;
  color: rgb(0 0 0  / var(--tw-text-opacity));
}

.text-slate-700 {
  --tw-text-opacity: 1;
  color: rgb(51 65 85 / var(--tw-text-opacity));
}

.shadow-2xl {
  --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
  --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.text-shadow-sm {
  text-shadow: 1px 1px 3px rgb(36 37 47 / 25%);
}

.text-shadow-md {
  text-shadow: 0px 1px 2px rgb(30 29 39 / 19%), 1px 2px 4px rgb(54 64 147 / 18%);
}

section {
  margin-top: 80px
}

.sell-car-section-heading {
  /* @apply mb-10 text-blue-900 text-center text-2xl font-bold sm:mt-10 md:mt-12 md:text-[32px] lg:my-14; */
  margin-bottom: 40px;
  text-align: center;
  font-size: 24px;
  font-weight: 700;
}

.grid-why-sell {
  display: grid;
  grid-template-columns: 1fr 3fr;
  margin-top: 16px;
}

.why-sell-content-icon {
  display: flex;
  align-items: center;
}

.why-sell-content-text {
  /* @aply ml-1 flex flex-col justify-center; */
  margin-left: 4px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.why-sell-content-text-heading {
  font-weight: 600;
  font-size: 18px;
  /* color: #2e2e2e; */
}

.sell-car-section-heading-h2{
  color: #000;
}

.why-sell-content-text-p {
  --tw-text-opacity: 1;
  color: rgb(100 116 139 / var(--tw-text-opacity));
}

@media (min-width: 640px) {
  .why-sell-content-text-p {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .p-20 {
  padding-top: 1.5rem;
  padding-bottom: 6rem;
  padding-left: 4rem;
  padding-right: 4rem;
  }
}

@media (min-width: 768px) {
  .why-sell-content-text-p {
    margin-top: 0.5rem;
  }
  .p-20 {
  padding-top: 1.5rem;
  padding-bottom: 6rem;
  padding-left: 4rem;
  padding-right: 4rem;
  }
}

@media (min-width: 1024px) {
  .why-sell-content-text-p {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .p-20 {
  padding-top: 1.5rem;
  padding-bottom: 6rem;
  padding-left: 4rem;
  padding-right: 4rem;
  }
}

@media (min-width: 640px) {
  .sell-car-section-heading {
    /* sm:mt-10 md:mt-12 md:text-[32px] lg:my-14; */
    margin-top: 40px;
  }

  .p-20 {
  padding-top: 1.5rem;
  padding-bottom: 6rem;
  padding-left: 4rem;
  padding-right: 4rem;
  }
}

@media (min-width: 768px) {
  .sell-car-section-heading {
    font-size: 32px;
  }

  .why-sell-content-text-heading {
    font-size: 20px;
  }

  .p-20 {
  padding-top: 1.5rem;
  padding-bottom: 6rem;
  padding-left: 4rem;
  padding-right: 4rem;
  }
}

@media (min-width: 1024px) {
  .sell-car-section-heading {
    margin: 64px 0;
  }

  .sell-car-section-why-sell-content {
    display: grid;
    grid-gap: 16px;
    grid-template-columns: auto auto;
  }

  .p-20 {
  padding-top: 1.5rem;
  padding-bottom: 6rem;
  padding-left: 4rem;
  padding-right: 4rem;
  }
}

/*  */

.hover\:bg-blue-700:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(29 78 216 / var(--tw-bg-opacity));
}

@media (min-width: 640px) {
  .sm\:my-0 {
    margin-top: 0px;
    margin-bottom: 0px;
  }

  .sm\:grid {
    display: grid;
  }

  .sm\:h-\[400px\] {
    height: 400px;
  }

  .sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .sm\:gap-4 {
    gap: 1rem;
  }

  .sm\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .sm\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .sm\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .sm\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }

  .p-20 {
  padding-top: 1.5rem;
  padding-bottom: 6rem;
  padding-left: 4rem;
  padding-right: 4rem;
  }
}

@media (min-width: 768px) {
  .md\:absolute {
    position: absolute;
  }

  .md\:top-1 {
    top: 0.25rem;
  }

  .md\:right-2 {
    right: 0.5rem;
  }

  .md\:mt-8 {
    margin-top: 2rem;
  }

  .md\:mt-5 {
    margin-top: 1.25rem;
  }

  .md\:mt-2 {
    margin-top: 0.5rem;
  }

  .md\:flex {
    display: flex;
  }

  .md\:h-full {
    height: 100%;
  }

  .md\:w-1\/2 {
    width: 50%;
  }

  .md\:w-\[38\%\] {
    width: 38%;
  }

  .md\:-translate-y-16 {
    --tw-translate-y: -4rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .md\:items-center {
    align-items: center;
  }

  .md\:justify-end {
    justify-content: flex-end;
  }

  .md\:rounded {
    border-radius: 0.25rem;
  }

  .md\:bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  }

  .md\:p-10 {
    padding: 2.5rem;
  }

  .md\:text-left {
    text-align: left;
  }

  .md\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .md\:text-6xl {
    font-size: 3.75rem;
    line-height: 1;
  }

  .md\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .md\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }

  .md\:text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .md\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .p-20 {
  padding-top: 1.5rem;
  padding-bottom: 6rem;
  padding-left: 4rem;
  padding-right: 4rem;
  }
}

@media (min-width: 1024px) {
  .lg\:my-12 {
    margin-top: 3rem;
    margin-bottom: 8.5rem;
  }

  .lg\:mt-3 {
    margin-top: 0.75rem;
  }

  .lg\:grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .lg\:p-16 {
    padding: 4rem;
  }

  .lg\:text-7xl {
    font-size: 4.5rem;
    line-height: 1;
  }

  .lg\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .lg\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .lg\:text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }
}

@media (min-width: 1280px) {
  .xl\:mt-4 {
    margin-top: 1rem;
  }

  .xl\:p-20 {
    padding: 5rem;
  }

  .xl\:p-16 {
    padding: 4rem;
  }

  .xl\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .xl\:text-8xl {
    font-size: 6rem;
    line-height: 1;
  }

  .xl\:text-6xl {
    font-size: 3.75rem;
    line-height: 1;
  }

  .xl\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .xl\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }
}
</style>