<?php
   include 'templates/template.php';
   ?>
<!DOCTYPE HTML>
<html lang="de">
   <head>
      <?php
         metadatenundco();
         ?>
      <title>Jan | Cybertruck</title>
      <?php
         datapackcolors();
         ?>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "/Redirect.php";
}
//-->
</script>
<style>
			/* CSS comes here */
			*, *:before, *:after {
	 box-sizing: border-box;
	 position: relative;
	 animation-play-state: var(--play-state, paused) !important;
}

 :root {
	 --color-top: #e7eef6;
	 --color-glass: rgba(0, 0, 0, 0.6);
	 --c-top: #dae0e4;
	 --c-side: #778189;
	 --c-bottom: #444246;
	 --c-bumper: #111;
	 --speed: 2s;
	 --duration: 30s;
}
 label[for="animation"] {
	 position: absolute;
	 height: 2rem;
	 color: white;
	 top: 0;
	 left: calc(1.5rem + 20px);
	 line-height: 2rem;
	 text-transform: uppercase;
	 font-size: 0.8rem;
	 letter-spacing: 1px;
}
 #animation {
	 position: absolute;
	 width: 20px;
	 height: 2rem;
	 top: 0;
	 left: 1rem;
}
 label[for="animation"], #animation {
	 opacity: 0.3;
	 transition: opacity 0.3s;
	 cursor: pointer;
}
 label[for="animation"]:hover, #animation:hover {
	 opacity: 0.9;
}
 #animation:checked ~ * {
	 --play-state: 'running';
}
 #cybertruck {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 --ry: 0deg;
	 width: 340px;
	 height: 930px;
	 transform: rotateX(80deg) rotateZ(calc(var(--rz, 0) * 1turn));
	 animation: cybertruck var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
	 animation-timing-function: linear;
}
 @keyframes cybertruck {
	 from {
		 transform: rotateX(80deg) rotateZ(0turn);
	}
	 to {
		 transform: rotateX(80deg) rotateZ(1turn);
	}
}
 #cybertruck .highlight {
	 border-left: 5px solid green;
	 border-top: 5px solid red;
}
 #cybertruck:before {
	 content: '';
	 position: absolute;
	 top: 10%;
	 left: 50%;
	 width: 0;
	 height: 100%;
	 transform: translateZ(-195px) scale(3, 1.2);
	 box-shadow: 0 0 150px 50px rgba(0, 0, 0, 0.5);
}
 .side {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: 0;
	 width: 140px;
	 height: 930px;
	 left: 0;
	 transform-origin: left top;
	 transform: rotateY(var(--ry)) translateX(-100%) rotateZ(-2deg);
}
 .side.-left {
	 --ry: -90deg;
}
 .side.-left:before {
	 animation: side-left var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes side-left {
	 from, to {
		 background: #8b898d;
		 border-color: #4d5055;
	}
	 50% {
		 background: #a0a5a9;
		 border-color: #5d6369;
	}
	 75% {
		 background: #676e76;
		 border-color: #454244;
	}
}
 .side.-right {
	 --ry: -90deg;
}
 .side.-right:before {
	 animation: side-right var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes side-right {
	 from, to {
		 background: #7c726f;
		 border-color: #73645b;
	}
	 25% {
		 background: #4b5665;
		 border-color: #34373e;
	}
	 50%, 75% {
		 background: #545a61;
		 border-color: #454952;
	}
}
 .side:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background: var(--c-side);
	 border-left: 50px solid;
	 clip-path: polygon(0 0, 100% 0, 100% 100%, 40px 905px, 40px 820px, 90px 785px, 90px 695px, 30px 645px, 0px 635px, 0px 210px, 30px 200px, 115px 155px, 115px 45px, 50px 21px, 100% 0, 0px 0%);
}
 .side.-right {
	 left: 100%;
}
 .side.-right > .bumper {
	 transform: translateZ(-5px);
}
 .side > .bumper {
	 position: absolute;
	 left: 0;
	 bottom: 280px;
	 height: 450px;
	 width: 25px;
	 background-color: var(--c-bumper);
	 transform: translateZ(5px);
	 clip-path: polygon(0 10px, 100% 0, 100% 100%, 0 calc(100% - 10px));
}
 .side.-left .bumper {
	 animation: side-left-bumper var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes side-left-bumper {
	 from, to, 50% {
		 background: #3f4245;
	}
	 75%, 80% {
		 background: #000;
	}
	 90% {
		 background: #2c2c2d;
	}
}
 .side.-right .bumper {
	 animation: side-right-bumper var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes side-right-bumper {
	 from, to {
		 background: #3f3129;
	}
	 25% {
		 background: #000;
	}
	 50% {
		 background: #34343c;
	}
}
 .well {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 height: 100px;
	 position: absolute;
	 width: 20px;
	 --ry: 30deg;
}
 .well.-front {
	 left: 105px;
	 top: 50px;
}
 .well.-back {
	 left: 80px;
	 top: 685px;
}
 .well:before, .well:after, .well .well-plate {
	 background-color: var(--c-bumper);
}
 .well:before, .well:after {
	 content: '';
	 position: absolute;
	 left: 0;
	 width: 100%;
	 height: 100%;
}
 .well:before {
	 bottom: 100%;
	 transform-origin: bottom right;
	 clip-path: polygon(0 calc(100% - 10px), 0 0, 100% 0%, 100% 100%);
}
 .well:after {
	 top: 100%;
	 transform-origin: top right;
	 clip-path: polygon(0 10px, 100% 0, 100% 100%, 0 100%);
}
 .well > .well-plate {
	 transform-origin: right center;
	 transform: rotateY(var(--ry));
	 clip-path: polygon(0 10px, 100% 0, 100% 100%, 0 calc(100% - 10px));
}
 .well.-front:before {
	 transform: rotateZ(-60deg) rotateY(var(--ry));
	 clip-path: polygon(0 calc(100% - 10px), 0 40px, 100% 0%, 100% 100%);
}
 .well.-front:after {
	 height: 140px;
	 transform: rotateZ(60deg) rotateY(var(--ry));
	 clip-path: polygon(0 10px, 100% 0px, 100% 100%, 10px 100%, 0 calc(100% - 40px));
}
 .well.-back:before {
	 height: 110px;
	 transform: rotateZ(-60deg) rotateY(var(--ry));
	 clip-path: polygon(0 calc(100% - 10px), 0 45px, 100% 0%, 100% 100%);
}
 .well.-back:after {
	 height: 100px;
	 transform: rotateZ(60deg) rotateY(var(--ry));
	 clip-path: polygon(100% 100%, 0% calc(100% - 45px), 0% 10px, 100% 0%);
}
 .side.-right .well {
	 --ry: -30deg;
}
 .side.-left .well:after {
	 animation: left-well-back-after var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes left-well-back-after {
	 from, to {
		 background: #373438;
	}
	 25%, 90% {
		 background: #000;
	}
}
 .side.-left .well .well-plate {
	 animation: left-well-plate var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes left-well-plate {
	 from, to, 25% {
		 background: #717476;
	}
	 50% {
		 background: #6d7174;
	}
	 75% {
		 background: #000;
	}
}
 .side.-left .well:before {
	 animation: left-well-back-before var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes left-well-back-before {
	 from, to {
		 background: #000;
	}
	 50% {
		 background: #747c7d;
	}
	 55% {
		 background: #909798;
	}
	 75% {
		 background: #000;
	}
}
 .side.-right .well:after {
	 animation: right-well-back-after var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes right-well-back-after {
	 from, to, 25% {
		 background: #000;
	}
	 30% {
		 background: #3a3f41;
	}
}
 .side.-right .well .well-plate {
	 animation: right-well-plate var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes right-well-plate {
	 from, to {
		 background: #616263;
	}
	 25% {
		 background: #000;
	}
	 50% {
		 background: #42474b;
	}
}
 .side.-right .well:before {
	 animation: right-well-back-before var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes right-well-back-before {
	 from, to {
		 background: #000;
	}
	 20% {
		 background: #202225;
	}
	 30% {
		 background: #000;
	}
	 50% {
		 background: #14161a;
	}
}
 .well-plate {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
}
 .top-side {
	 position: absolute;
	 top: 0;
	 right: 0;
	 height: 100%;
	 width: 105px;
	 transform-origin: right;
	 transform: rotateY(160deg);
	 transform-style: preserve-3d;
}
 .top-side:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 clip-path: polygon(100% 100%, 100% 0%, 0% 410px, 10px 410px, 85px 110px, 85px 590px, 45px 585px, 10px 410px, 0 410px);
	 z-index: 2;
}
 .side.-left > .top-side {
	 transform: rotateY(-160deg);
}
 .side.-left > .top-side:before {
	 animation: top-side-left var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes top-side-left {
	 from, to, 25% {
		 background: #9a9da2;
	}
	 50% {
		 background: #9da3a8;
	}
	 75% {
		 background: white;
	}
}
 .side.-right > .top-side:before {
	 animation: top-side-right var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes top-side-right {
	 from, to {
		 background: #878688;
	}
	 25% {
		 background: #737d86;
	}
	 50%, 75% {
		 background: #676d74;
	}
}
 .ball-bearing, .windows {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
}
 .ball-bearing {
	 z-index: 2;
	 opacity: 0;
}
 .windows {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 transform-origin: left;
	 clip-path: polygon(85px 100px, 10px 410px, 45px 585px, 85px 590px);
	 transform: rotateY(5deg);
	 background: rgba(0, 0, 0, 0.5);
}
 .side.-left .windows {
	 transform: rotateY(-5deg);
}
 .window {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
}
 .window:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background-color: rgba(0, 0, 0, 0.5);
}
 .window.-driver {
	 position: absolute;
	 top: 220px;
	 left: 0;
	 width: 100%;
	 height: 200px;
	 background: linear-gradient(to bottom, #000, #000 20px, transparent 20px, transparent calc(100% - 20px), #000 calc(100% - 20px), #000);
}
 .window.-passenger {
	 position: absolute;
	 top: 420px;
	 left: 0;
	 width: 100%;
	 height: 170px;
	 background: linear-gradient(to bottom, transparent, transparent 20px, transparent calc(100% - 20px), #000 calc(100% - 20px), #000);
}
 .door {
	 position: absolute;
	 height: 200px;
	 width: 100%;
	 border-top: 2px solid rgba(0, 0, 0, 0.1);
	 border-bottom: 2px solid rgba(0, 0, 0, 0.1);
}
 .door.-front {
	 top: 215px;
	 left: 0;
	 border-bottom: none;
}
 .door.-back {
	 top: 415px;
	 left: 0;
	 height: 185px;
	 transform-origin: top right;
	 transform: skewY(5deg);
}
 .front {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: -35px;
	 left: 0;
	 width: 100%;
	 height: 455px;
	 transform-origin: left 35px;
	 transform: rotateX(16deg);
}
 .front > .frunk, .front > .windshield {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 clip-path: polygon(10% 100%, 0 35px, 40px 0, calc(100% - 40px) 0, 100% 35px, 90% 100%);
}
 .windshield:before {
	 border: 20px solid #111;
	 border-width: 25px 40px 20px;
	 content: '';
	 position: absolute;
	 bottom: 0;
	 left: 0;
	 width: 100%;
	 height: 325px;
	 background: rgba(0, 0, 0, 0.5);
}
 .windshield > .light {
	 position: absolute;
	 bottom: 0;
	 left: 0;
	 width: 100%;
	 height: 80px;
	 background: linear-gradient(to top, #000, #000 40%, transparent);
}
 .windshield > .light:before {
	 content: '';
	 position: absolute;
	 bottom: 10px;
	 left: 15%;
	 width: 70%;
	 height: 10px;
	 background: #fff;
	 border-radius: 10px;
	 box-shadow: 0 0 30px 30px rgba(255, 255, 255, 0.2);
}
 .frunk:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 135px;
	 animation: frunk var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes frunk {
	 from, to {
		 background: #abb1b4;
	}
	 25% {
		 background: #abb1b4;
	}
	 40% {
		 background: #bcc4c8;
	}
	 50% {
		 background: #656c72;
	}
	 75% {
		 background: #9ea4a7;
	}
}
 .back {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 height: 580px;
	 width: 100%;
	 top: 100%;
	 position: absolute;
	 transform-origin: top center;
	 transform: rotateX(-27deg);
}
 .back:before {
	 background: rgba(0, 0, 0, 0.8);
	 border: 20px solid black;
	 border-width: 20px 40px;
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 185px;
	 clip-path: polygon(35px 0, calc(100% - 35px) 0, calc(100% - 20px) 100%, 20px 100%);
}
 .trunk {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: 185px;
	 height: 180px;
	 width: calc(100% - 44px);
	 left: 22px;
	 transform-origin: top left;
	 transform: rotateX(-80deg);
}
 .trunk:before, .trunk:after {
	 animation: trunk var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes trunk {
	 from, to {
		 color: #51545f;
	}
	 25%, 50% {
		 color: #434950;
	}
	 75% {
		 color: #23252e;
	}
}
 .trunk:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 80px;
	 background: rgba(0, 0, 0, 0.5);
	 border: 20px solid currentColor;
}
 .trunk:after {
	 content: '';
	 position: absolute;
	 top: 75px;
	 left: 0;
	 width: 100%;
	 height: 40px;
	 background: currentColor;
	 border-top: 5px solid rgba(0, 0, 0, 0.5);
	 transform-origin: top;
	 transform: rotateX(5deg);
}
 .trunk-side {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: 0;
	 width: 320px;
	 height: 160px;
	 transform-origin: top left;
	 transform: skewY(7deg);
}
 .trunk-side:before {
	 content: '';
	 background-color: var(--c-top);
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 transform-origin: top left;
	 clip-path: polygon(0% 0%, 100% 0%, 100% 50%, 0% 100%);
}
 .trunk-side:after {
	 content: '';
	 position: absolute;
	 left: 0;
	 width: 100%;
	 height: 25px;
	 background-color: #fff;
	 bottom: 100%;
	 transform-origin: bottom;
	 clip-path: polygon(0 calc(100% - 2px), 100% 0, 100% 100%, 0 100%);
	 animation: trunk-side-top var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes trunk-side-top {
	 from, to {
		 background: #4e4b4c;
	}
	 25% {
		 background: #969d9e;
	}
	 50% {
		 background: #575b5e;
	}
	 75% {
		 background: #3e4243;
	}
}
 .trunk-side.-left {
	 left: 0;
	 transform: rotateY(-90deg) skewY(7deg);
}
 .trunk-side.-left:after {
	 transform: rotateX(-90deg);
}
 .trunk-side.-left:before {
	 animation: trunk-side-left-before var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes trunk-side-left-before {
	 from, to {
		 background: #3c2e2f;
	}
	 25% {
		 background: #3d4a5a;
	}
	 50%, 75% {
		 background: #292c33;
	}
}
 .trunk-side.-right {
	 left: 100%;
	 transform: rotateY(-90deg) skewY(7deg);
}
 .trunk-side.-right:after {
	 transform: rotateX(90deg);
}
 .trunk-side.-right:before {
	 animation: trunk-side-right-before var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes trunk-side-right-before {
	 from, to, 25% {
		 background: #4c4d53;
	}
	 50% {
		 background: #53595f;
	}
	 75% {
		 background: #555962;
	}
}
 .bed {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: 140px;
	 left: 0;
	 width: 100%;
	 height: 320px;
	 background: #ddd;
	 transform-origin: top center;
	 transform: rotateX(91deg);
}
 .bed:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 transform: translateZ(35px);
	 animation: bed var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes bed {
	 from, to {
		 background: #6e6c71;
	}
	 25% {
		 background: #c5ced1;
	}
	 50% {
		 background: #4e575e;
	}
	 75% {
		 background: #555d65;
	}
}
 .tailgate {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 bottom: 0;
	 left: -20px;
	 width: calc(100% + 40px);
	 height: 95px;
	 background: var(--c-side);
	 transform-origin: bottom center;
	 transform: rotateX(-100deg);
	 animation: tailgate var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes tailgate {
	 from, to {
		 background: #4d535c;
	}
	 25%, 50%, 75% {
		 background: #898d91;
	}
}
 .tailgate:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 20px;
	 background: #fff;
	 transform-origin: top center;
	 transform: rotateX(275deg);
	 animation: trunk-side-top var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 .tailgate > .bumper {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 height: 40px;
	 width: 100%;
	 top: calc(100% + 10px);
}
 .tailgate > .bumper:after {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background: #000;
	 clip-path: polygon(0 0, 100% 0, 100% calc(100% - 10px), calc(100% - 60px) 100%, 60px 100%, 0 calc(100% - 10px));
	 animation: tailgate-bumper var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes tailgate-bumper {
	 from, to, 10% {
		 background: #010103;
	}
	 25% {
		 background: #4c4f53;
	}
	 75% {
		 background: #393d42;
	}
}
 .tailgate .bumper-left, .tailgate .bumper-right {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: 0;
	 width: 90px;
	 height: 100%;
}
 .tailgate .bumper-left:before, .tailgate .bumper-right:before {
	 content: '';
	 position: absolute;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background-color: black;
	 bottom: 100%;
	 transform-origin: bottom center;
	 transform: rotateX(90deg);
}
 .tailgate .bumper-left:after, .tailgate .bumper-right:after {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 clip-path: polygon(0 0, 100% 0, calc(100% - 30px) 100%, 0px calc(100% - 10px));
}
 .tailgate .bumper:before, .tailgate .bumper-left:before, .tailgate .bumper-right:before {
	 content: '';
	 position: absolute;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background-color: black;
	 bottom: 100%;
	 transform-origin: bottom center;
	 transform: rotateX(90deg);
}
 .tailgate .bumper-left {
	 right: 100%;
	 transform-origin: right;
	 transform: rotateY(-90deg) skewY(-12deg);
}
 .tailgate .bumper-left:after {
	 animation: bumper-left var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes bumper-left {
	 from, to, 25% {
		 background: #2a272b;
	}
	 50% {
		 background: #54565a;
	}
	 65% {
		 background: #2d2f32;
	}
	 75%, 90% {
		 background: #000;
	}
}
 .tailgate .bumper-right {
	 left: 100%;
	 transform-origin: left;
	 transform: rotateY(90deg) skewY(12deg);
}
 .tailgate .bumper-right:after {
	 animation: bumper-right var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes bumper-right {
	 from, to {
		 background: #2a2220;
	}
	 25% {
		 background: #050204;
	}
	 30% {
		 background: #000;
	}
	 35% {
		 background: #09090d;
	}
	 50% {
		 background: #25262c;
	}
	 80% {
		 background: #3b3e45;
	}
}
 .tailgate > .light {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 15px;
	 background-color: #000;
	 padding: 5px;
}
 .tailgate > .light:before, .tailgate > .light:after {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
}
 .tailgate > .light:before {
	 --light: #fd004a;
	 border-radius: 5px;
	 background-color: #fd004a;
	 width: calc(100% - 10px);
	 left: 5px;
	 height: calc(100% - 10px);
	 top: 5px;
	 box-shadow: 0 0 2rem 1rem rgba(253, 0, 74, 0.3);
}
 .grill {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: 0;
	 left: 0;
	 height: 90px;
	 width: 100%;
	 transform-origin: top;
	 transform: rotateX(-90deg);
}
 .grill-left, .grill-right {
	 position: absolute;
	 height: 100%;
	 width: 60px;
	 transform-origin: right center;
}
 .grill-left:before, .grill-right:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background: var(--c-side);
	 clip-path: polygon(10px 0, 100% 0, 100% 90px, 10px 100%);
}
 .grill-left > .light, .grill-right > .light {
	 position: absolute;
	 top: 0;
	 right: 0;
	 width: 50px;
	 height: 100%;
	 background: linear-gradient(to bottom, white, white 5px, transparent 5px, transparent calc(100% - 5px), #e2b80e calc(100% - 5px), #e2b80e);
}
 .grill-left > .light:before, .grill-right > .light:before, .grill-left > .light:after, .grill-right > .light:after {
	 content: '';
	 position: absolute;
	 width: 100%;
	 height: 5px;
}
 .grill-left > .light:before, .grill-right > .light:before {
	 box-shadow: 0 0 50px 20px rgba(255, 255, 255, 0.5);
}
 .grill-left > .light:after, .grill-right > .light:after {
	 bottom: 0;
	 background-color: #e2b80e;
}
 .grill-left {
	 left: -20px;
	 transform: rotateY(38deg);
}
 .grill-left:before {
	 animation: grill-left var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes grill-left {
	 from, to {
		 background: #494a4c;
	}
	 25% {
		 background: #494a4c;
	}
	 50% {
		 background: #4e4f54;
	}
	 65%, 75% {
		 background: #60676f;
	}
}
 .grill-right {
	 transform: rotateY(142deg);
	 right: 40px;
}
 .grill-right:before {
	 animation: grill-right var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes grill-right {
	 from, to, 50% {
		 background: #5f5a62;
	}
	 65% {
		 background: #53585f;
	}
	 75% {
		 background: #505153;
	}
	 85% {
		 background: #6a6764;
	}
}
 .grill-front {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: 0;
	 left: 40px;
	 width: calc(100% - 40px * 2);
	 height: 100%;
	 background-color: var(--c-side);
	 animation: grill-front var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes grill-front {
	 from, to {
		 background: #747176;
	}
	 25% {
		 background: #747176;
	}
	 50% {
		 background: #515254;
	}
	 75% {
		 background: #686463;
	}
}
 .grill-front > .light {
	 position: absolute;
	 top: 0;
	 left: 0;
	 height: 5px;
	 width: 100%;
	 background-color: #fff;
	 box-shadow: 0 0 60px 30px rgba(255, 255, 255, 0.5);
}
 .grill-front > .bumper {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 top: calc(100% + 5px);
	 left: 0;
	 width: 100%;
	 height: 30px;
	 background-color: var(--c-bumper);
}
 .grill-front > .bumper > .bumper-left, .grill-front > .bumper > .bumper-right {
	 position: absolute;
	 top: 0;
	 width: 50px;
	 height: 100%;
	 background-color: var(--c-bumper);
}
 .grill-front > .bumper > .bumper-left {
	 transform-origin: left center;
	 transform: rotateY(-35deg);
	 left: 100%;
}
 .grill-front > .bumper > .bumper-right {
	 transform-origin: right center;
	 transform: rotateY(35deg);
	 right: 100%;
}
 .oops {
	 appearance: none;
	 border: none;
	 position: absolute;
	 height: 70px;
	 width: 70px;
	 background: #fff;
	 background: radial-gradient(white, transparent, rgba(255, 255, 255, 0.2), transparent 50%);
	 cursor: pointer;
}
 .oops, .oops:before, .oops:after {
	 opacity: 0;
	 transition: opacity 0.3s;
}
 .oops:focus {
	 outline: none;
}
 .oops:focus, .oops:focus:before, .oops:focus:after {
	 opacity: 1;
}
 .window.-driver .oops {
	 top: 100px;
	 left: 20px;
}
 .oops:before, .oops:after {
	 opacity: 0;
	 --crack: rgba(255, 255, 255, 0.3);
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 border-radius: 50%;
	 background: conic-gradient(var(--crack), var(--crack) 1deg, transparent 1deg, transparent 30deg, var(--crack) 30deg, var(--crack) 31deg, transparent 31deg, transparent 40deg, var(--crack) 35deg, var(--crack) 36deg, transparent 36deg, transparent 70deg, var(--crack) 70deg, var(--crack) 71deg, transparent 71deg, transparent 80deg, var(--crack) 80deg, var(--crack) 81deg, transparent 81deg);
}
 .oops:before {
	 transform: rotate(160deg);
}
/* ---------------------------------- */
 .body {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 animation: suspension-body calc(var(--duration) / 4) cubic-bezier(0.5, 0, 0.5, 1) 0s infinite;
}
 @keyframes suspension-body {
	 from, to, 50%, 75% {
		 transform: none;
	}
	 35%, 65% {
		 transform: translateZ(10px);
	}
}
 .wheels {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 position: absolute;
	 width: 100%;
	 height: 80%;
	 top: 0;
	 left: 0;
	 transform: translateZ(-120px);
	 background-color: #000;
}
 .wheel {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 --radius: 70px;
	 --size: calc(var(--radius) * 2);
	 position: absolute;
	 width: var(--size);
	 height: var(--size);
	 border-radius: 50%;
	 background-color: #202234;
	 background-image: linear-gradient(to bottom, #1f2024, #070809);
	 transform-origin: center;
	 transform: rotateY(90deg);
	 animation: wheel var(--speed) infinite linear;
}
 @keyframes wheel {
	 from {
		 transform: rotateY(90deg) rotateZ(0deg);
	}
	 to {
		 transform: rotateY(90deg) rotateZ(360deg);
	}
}
 .wheel:before, .wheel:after {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 border-radius: inherit;
	 background: inherit;
	 height: 100%;
	 width: 100%;
}
 .wheel:before {
	 transform: translateZ(20px);
	 background: radial-gradient(black, black 25%, #333 50%, #222 50%, black, black);
}
 .wheel:after {
	 transform: translateZ(-20px);
	 background: radial-gradient(black, black 25%, #333 50%, #222 50%, black, black);
}
 .wheel.-front {
	 top: 35px;
}
 .wheel.-back {
	 top: 670px;
}
 .wheel.-left {
	 left: calc(var(--size) / -2);
	 --spoke-z: -25px;
}
 .wheel.-right {
	 left: calc(100% - var(--size) / 2);
	 --spoke-z: 25px;
}
 .spoke {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 --r: 0deg;
	 --ry: -5deg;
	 position: absolute;
	 width: 50%;
	 height: 20px;
	 transform: scale(0.7) rotateZ(var(--r)) translateZ(var(--spoke-z)) rotateY(var(--ry));
	 transform-origin: right center;
	 top: calc(50% - 10px);
}
 .spoke:nth-child(1) {
	 --i: 1;
	 --r: 51.4285714286deg;
}
 .spoke:nth-child(2) {
	 --i: 2;
	 --r: 102.8571428571deg;
}
 .spoke:nth-child(3) {
	 --i: 3;
	 --r: 154.2857142857deg;
}
 .spoke:nth-child(4) {
	 --i: 4;
	 --r: 205.7142857143deg;
}
 .spoke:nth-child(5) {
	 --i: 5;
	 --r: 257.1428571429deg;
}
 .spoke:nth-child(6) {
	 --i: 6;
	 --r: 308.5714285714deg;
}
 .spoke:nth-child(7) {
	 --i: 7;
	 --r: 360deg;
}
 .spoke:before, .spoke:after {
	 content: '';
	 position: absolute;
	 height: 20px;
	 z-index: 1;
	 animation: spoke-after var(--speed) linear infinite;
	 animation-delay: calc(-1 * var(--speed) * var(--rz, 0) - (var(--speed) / 7) * var(--i));
}
 .spoke:before {
	 right: 50px;
	 width: 20px;
	 animation-name: spoke-before;
	 transform-origin: right center;
	 transform: rotateY(calc(-4 * var(--ry)));
}
 @keyframes spoke-before {
	 from, to {
		 background: #43494a;
	}
	 50% {
		 background: #000;
	}
}
 .spoke:after {
	 right: 0;
	 width: 50px;
	 background-color: #000;
	 border-radius: 5px;
	 animation: spoke-after var(--speed) linear infinite;
	 animation-delay: calc(-1 * var(--speed) * var(--rz, 0) - (var(--speed) / 7) * var(--i));
}
 @keyframes spoke-after {
	 from, to {
		 background: #000;
		 border-left-color: #43494a;
	}
	 50% {
		 background: #43494a;
		 border-left-color: #000;
	}
}
 .wheel.-right .spoke {
	 --ry: 5deg;
}
 .wheel > .tread {
	 --size: calc(2 * 3.141592653589 * var(--radius) / 12);
	 position: absolute;
	 width: 40px;
	 height: var(--size);
	 background: linear-gradient(to left, black, #111, black);
	 z-index: 1;
	 top: 0;
	 left: calc(50% + var(--size) / 2);
	 transform-origin: top left;
	 transform: translateZ(-20px) rotateZ(90deg) rotateY(-90deg);
}
 .tread {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 --rx: calc(360deg / 12);
	 width: 100%;
	 height: 100%;
}
 .tread:before, .tread:after {
	 content: '';
	 position: absolute;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background: inherit;
	 transform: rotateX(30deg);
}
 .tread:before {
	 top: 100%;
	 transform-origin: top center;
	 transform: rotateX(calc(var(--rx) * -1));
}
 .tread:after {
	 bottom: 100%;
	 transform-origin: bottom center;
	 transform: rotateX(var(--rx));
}
 .tread > .tread {
	 transform-origin: bottom center;
	 transform: translateY(-100%) rotateX(var(--rx)) translateY(-100%) rotateX(var(--rx)) translateY(-100%) rotateX(var(--rx));
	 background: inherit;
}
 .hubcap {
	 position: absolute;
	 top: calc(50% - 20px);
	 left: calc(50% - 20px);
	 width: 40px;
	 height: 40px;
	 background: linear-gradient(to right, #4f5658, black);
	 background-image: conic-gradient(#505658 0.1428turn, #2e3234 0.1428turn 0.2857turn, #111317 0.2857turn 0.4285turn, black 0.4285turn, #121518 0.7142turn 0.8571turn, #303437 0.8571turn);
	 transform: translateZ(30px);
	 clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%);
}
 .wheel.-left .hubcap {
	 transform: translateZ(-30px);
}
 .stage {
	 transform-style: preserve-3d;
	 backface-visibility: visible;
	 animation: cinematic var(--duration) linear infinite;
	 animation-play-state: paused;
	 animation-delay: calc(-1 * var(--duration) * var(--rz, 0));
}
 @keyframes cinematic {
	 from, to {
		 transform: scale(0.5) translateX(50%);
	}
	 50% {
		 transform: scale(0.7) translateX(0);
	}
}
		</style>
   </head>
   <body>
      <?php
         kopfzeile();
         ?>
      <div style="padding-left: 5%;">
  <input type="checkbox" id="animation" checked>
  Enable Animation? 
<main class="stage">
  
  <div id="cybertruck">

    <div class="body">
      <div class="side -left">
        <div class="top-side">
          <div class="windows">
            <div class="window -driver">
              <button class="oops"></button>
            </div>
            <div class="window -passenger">
              <button class="oops"></button>
            </div>
          </div>
        </div>
        <div class="door -front"></div>
        <div class="door -back"></div>
        <div class="well -front">
          <div class="well-plate"></div>
        </div>
        <div class="well -back">
          <div class="well-plate"></div>
        </div>
        <div class="bumper"></div>
      </div>
      <div class="side -right">
        <div class="top-side">
          <div class="windows">
            <div class="window -driver">
              <button class="oops"></button>
            </div>
            <div class="window -passenger">
              <button class="oops"></button>
            </div>
          </div>
        </div>
        <div class="door -front"></div>
        <div class="door -back"></div>
        <div class="well -front">
          <div class="well-plate"></div>
        </div>
        <div class="well -back">
          <div class="well-plate"></div>
        </div>
        <div class="bumper"></div>
      </div>

      <div class="front">
        <div class="windshield">
          <div class="light"></div>
        </div>
        <div class="frunk"></div>
        <div class="grill">
          <div class="grill-left">
            <div class="light"></div>
          </div>
          <div class="grill-right">
            <div class="light"></div>
          </div>
          <div class="grill-front">
            <div class="light"></div>
            <div class="bumper">
              <div class="bumper-left"></div>
              <div class="bumper-right"></div>
            </div>
          </div>
        </div>
        <div class="back">
          <div class="trunk">
            <div class="trunk-side -left"></div>
            <div class="trunk-side -right"></div>
            <div class="bed">
              <div class="tailgate">
                <div class="light"></div>
                <div class="bumper">
                  <div class="bumper-left"></div>
                  <div class="bumper-right"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="wheels">
      <div class="wheel -front -left">
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="hubcap"></div>
        <div class="tread">
          <div class="tread">
            <div class="tread">
              <div class="tread"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="wheel -front -right">
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="hubcap"></div>
        <div class="tread">
          <div class="tread">
            <div class="tread">
              <div class="tread"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="wheel -back -left">
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="hubcap"></div>
        <div class="tread">
          <div class="tread">
            <div class="tread">
              <div class="tread"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="wheel -back -right">
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="spoke"></div>
        <div class="hubcap"></div>
        <div class="tread">
          <div class="tread">
            <div class="tread">
              <div class="tread"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
Get the Cybertruck's source code <a href="https://jsfiddle.net/evy8m7nx/" class="link2">here.</a>
</div>
      <?php
         fusszeile();
         ?>
      <?php
         cookiescript();
         ?>
   </body>
</html>