<!-- Game canvas -->
<canvas id="c"></canvas>
<title>MiniGames</title>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Gameplay HUD -->
<div class="hud">
	<div class="hud__score">
		<div class="score-lbl"></div>
		<div class="cube-count-lbl"></div>
	</div>
	<div class="pause-btn"><div></div></div>
	<div class="slowmo">
		<div class="slowmo__bar"></div>
	</div>
</div>

<!-- Menu System -->
<div class="menus">
	<div class="menu menu--main">
		<h1>Games</h1>
		<button type="button" class="play-normal-btn">Mulai Permainan</button>
		<button type="button" class="play-casual-btn">Mode Santai</button>
		<div class="credits">game by <a href="https://aryasuryana.netlify.app/">Arya Suryana</a></div>
	</div>
	<div class="menu menu--pause">
		<h1>Paused</h1>
		<button type="button" class="resume-btn">Lanjtukan Permainan</button>
		<button type="button" class="menu-btn--pause">Menu Utama</button>
	</div>
	<div class="menu menu--score">
		<h1>Game Over</h1>
		<h2>Score Kamu:</h2>
		<div class="final-score-lbl"></div>
		<div class="high-score-lbl"></div>
		<button type="button" class="play-again-btn">Main Lagi</button>
		<button type="button" class="menu-btn--score">Menu Utama</button>
	</div>
</div>

<script type="text/javascript" src="my.js"></script>