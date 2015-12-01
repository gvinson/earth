 aside, nav, section{ display: block; }
html{ font-size: 100%; }
html{ font-family: sans-serif; }
body{ margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; }
h1{ font-size: 2em; margin-top: 0.67em; margin-right: 0px; margin-bottom: 0.67em; margin-left: 0px; }
h2{ font-size: 1.5em; margin-top: 0.83em; margin-right: 0px; margin-bottom: 0.83em; margin-left: 0px; }
hr{ box-sizing: content-box; height: 0px; }
p{ margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; }
 ul{ margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; }
 ul{ padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 40px; }
nav ul{ list-style-type: none; list-style-position: initial; list-style-image: none; }
img{ border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; }
@media print{
*{ background-image: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; background-color: transparent !important; color: rgb(0, 0, 0) !important; box-shadow: none !important; text-shadow: none !important; background-position: initial initial !important; background-repeat: initial initial !important; }
a{ text-decoration: underline; }
a[href]::after{ content: ' (', attr(href), ')'; }
 a[href^="#"]::after{ content: ''; }
 img{ page-break-inside: avoid; }
img{ max-width: 100% !important; }
p, h2{ orphans: 3; widows: 3; }
h2{ page-break-after: avoid; }
}
*{ max-width: 100%; outline-style: none !important; outline-width: initial !important; outline-color: initial !important; box-sizing: border-box; }
html, body{ min-height: 100%; min-width: 100%; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; }
@media screen and (min-width: 768px){
html, body{ height: 100%; width: 100%; }
}
body{ font-size: 14px; background-image: url(../img/bg.jpg); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(188, 217, 196); background-position: 165px 0px; background-repeat: repeat repeat; }
@media screen and (min-width: 993px){
body{ font-size: 16px; }
}
a{ text-decoration: none; }
p{ color: rgb(71, 79, 79); font: italic normal bold 0.875em/normal proxima-nova, Helvetica, sans-serif; line-height: 2; }
hr{ border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-top-width: 1px; border-top-style: solid; border-top-color: black; height: 1px; width: 100%; }
.body-wrapper{ min-height: 100%; min-width: 100%; overflow-x: hidden; }
@media screen and (min-width: 768px){
.body-wrapper{ display: table; height: 100%; width: 100%; }
}
.primary-content{ padding-bottom: 5em; }
@media screen and (min-width: 768px){
.primary-content{ display: table-cell; }
}
#rwd-wrapper{ padding-top: 0px; padding-right: 1em; padding-bottom: 0px; padding-left: 1em; max-width: none; }
@media screen and (min-width: 799px){
#rwd-wrapper{ max-width: 800px; margin-left: 7%; }
}
.mobile-only{ display: initial; }
@media screen and (min-width: 768px){
.mobile-only{ display: none; }
}
h1, h2{ font-family: populairemedium, Helvetica, sans-serif; font-weight: normal; }
h1{ font-size: 6.4375em; color: rgb(57, 181, 74); text-align: center; margin-bottom: 0px; position: relative; line-height: 1; }
@media screen and (max-width: 600px){
h1{ font-size: 5em; }
}
h2{ font-size: 3.4375em; }
@media screen and (max-width: 600px){
h2{ font-size: 2.4375em; }
}
.underline{ width: 300px; margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto; display: block; }
.grid{ position: relative; overflow-x: hidden; overflow-y: hidden; }
.grid [class*="col-"]{ float: left; padding-top: 0.25em; padding-right: 5%; padding-bottom: 0px; padding-left: 0px; width: 100%; min-height: 1px; position: relative; }
.grid .col-8{ width: 100%; }
@media screen and (min-width: 768px){
.grid .col-8{ width: 50%; }
}
@media screen and (min-width: 993px){
.grid .col-8{ width: 50%; }
}
.main-sidebar{ display: none; }
@media screen and (min-width: 768px){
.main-sidebar{ display: table-cell; vertical-align: top; width: 165px; padding-top: 0px; padding-right: 0.5em; padding-bottom: 0px; padding-left: 1em; background-color: rgb(255, 255, 255); }
}
@media screen and (max-width: 767px){
.main-sidebar{ position: relative; overflow-y: scroll; }
}
@media screen and (min-width: 768px){
.main-sidebar .fixed{ position: fixed; height: 100%; }
}
.logo{ text-align: center; display: block; margin-top: 1.5em; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; }
.logo p{ margin-top: 0.5em; margin-right: 0px; margin-bottom: 0.5em; margin-left: 0px; font: normal normal normal 2.8125em/normal populairemedium, Helvetica, sans-serif; color: rgb(71, 79, 79); text-transform: uppercase; line-height: 0.9; }
.logo span{ font-size: 0.8888em; }
.main-nav a{ font-family: populairemedium, Helvetica, sans-serif; }
.main-nav ul{ padding-top: 0.25em; padding-right: 1em; padding-bottom: 1.25em; padding-left: 2.1em; }
.main-nav ul a{ display: inline-block; vertical-align: middle; position: relative; padding-top: 0.225em; padding-right: 0px; padding-bottom: 0.225em; padding-left: 0px; font-size: 1.75em; color: rgb(71, 79, 79); letter-spacing: 1px; -webkit-transition-property: color; -webkit-transition-duration: 0.125s; -webkit-transition-timing-function: ease-in-out; -webkit-transition-delay: initial; }
.main-nav ul a::after{ display: table; -webkit-transition-property: opacity; -webkit-transition-duration: 0.25s; -webkit-transition-timing-function: ease-in-out; -webkit-transition-delay: initial; opacity: 0; font-family: icomoon; speak: none; font-style: normal; font-weight: 400; font-variant: normal; text-transform: none; line-height: 1; -webkit-font-smoothing: antialiased; content: ; color: rgb(57, 181, 74); margin-left: 0.5em; position: absolute; right: -1.25em; top: 0.65em; font-size: 0.75em; }
 .main-nav ul a.active{ color: rgb(57, 181, 74); }
 .main-nav ul a.active::after{ opacity: 1; }
.social-discover a{ color: rgb(57, 181, 74); font-size: 1.15em; letter-spacing: 0.5px; }
.social-discover [class*="icon"]{ display: inline-block; vertical-align: middle; margin-right: 0.2em; height: 1.25em; width: 1.25em; line-height: 1.15em; background-color: rgb(57, 181, 74); border-top-left-radius: 50% 50%; border-top-right-radius: 50% 50%; border-bottom-right-radius: 50% 50%; border-bottom-left-radius: 50% 50%; color: white; }
.social-discover [class*="icon"]::before{ margin-left: 1px; }
.contact-info{ margin-top: 2.5em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; }
@media screen and (min-height: 850px){
.contact-info{ position: absolute; bottom: 3%; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; }
}
.contact-info p{ margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0.375em; padding-right: 0px; padding-bottom: 0.375em; padding-left: 0px; font: normal normal normal 0.8em/normal proxima-nova, Helvetica, sans-serif; color: rgb(119, 119, 119); line-height: 1.75; letter-spacing: 0.5px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204); }
.contact-info p:last-child{ border-bottom-width: 0px; border-bottom-style: initial; border-bottom-color: initial; }
#hamburger{ position: fixed; right: 0px; top: 0.5em; height: 2em; width: 2em; padding-top: 0.5em; padding-right: 0.25em; padding-bottom: 0.5em; padding-left: 0.25em; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); z-index: 10001; background-position: initial initial; background-repeat: initial initial; }
#hamburger div{ background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(71, 79, 79); width: 1.5em; height: 3px; -webkit-transition-property: all; -webkit-transition-duration: 0.25s; -webkit-transition-timing-function: ease-in-out; -webkit-transition-delay: initial; background-position: initial initial; background-repeat: initial initial; }
#hamburger div + div{ margin-top: 3px; }
#mobile-nav-wrapper{ position: absolute; top: -110%; left: 0px; right: 0px; width: 100%; min-height: 100%; height: auto; background-image: url(../img/bg.jpg); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(208, 229, 210); -webkit-background-size: cover; background-size: cover; z-index: 1000; -webkit-transition-property: all; -webkit-transition-duration: 0.25s; -webkit-transition-timing-function: ease-in-out; -webkit-transition-delay: initial; -webkit-transform: translateY(-110%); background-position: 165px 0px; background-repeat: repeat repeat; }
@media screen and (min-width: 768px){
#mobile-nav-wrapper{ display: none; }
}
.menu-title{ text-align: center; }
.menu-title img{ vertical-align: middle; padding-right: 0.25em; max-width: 25%; }
.menu-dishes{ list-style-type: none; list-style-position: initial; list-style-image: initial; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; width: 100%; }
.menu-dishes li{ line-height: 1.7; margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; }
.menu-dishes .dish{ color: inherit; font: normal normal bold 0.875em/normal proxima-nova, Helvetica, sans-serif; padding-right: 2%; text-transform: uppercase; display: inline-block; vertical-align: top; }
.menu-dishes .dish-details{ color: rgb(71, 79, 79); font: italic normal bold 0.875em/normal proxima-nova, Helvetica, sans-serif; display: inline-block; vertical-align: top; }
.menu-dishes .long-dish{ font: normal normal bold 0.875em/normal proxima-nova, Helvetica, sans-serif; text-transform: uppercase; vertical-align: top; }
.menu-dishes .long-dish-details{ color: rgb(71, 79, 79); font: italic normal bold 0.875em/normal proxima-nova, Helvetica, sans-serif; display: block; vertical-align: top; }
hr{ width: 95%; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; }
.column-title{ font-size: 1.15em; color: rgb(71, 79, 79); text-align: left; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; }
@media screen and (min-width: 768px){
.menu-dishes{ float: left; }
}
.subtitle{ width: 550px; margin-top: 0px; margin-right: auto; margin-bottom: 1em; margin-left: auto; text-align: center; }
.breakfast{ color: rgb(159, 31, 99); }
.quiche{ color: rgb(241, 89, 42); }