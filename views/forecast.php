<style>
.weather .icon { float: left; }
.weather .info { float: left; }
.weather .info span { font-weight: bold; }
.weather .description {  font-size: 1.2em; font-weight: bold; font-style: italic; }
#navbar-collapse-meteo li { padding-left: 20px; }
.de #navbar-collapse-meteo li { padding-left: 0px; }
#navbar-collapse-meteo .weather { margin-top: 10px; width: 120px; }
#navbar-collapse-meteo .weather .info { font-size: 0.8em; width: 50%; }
#navbar-collapse-meteo .weather .icon { width: 50%; }
footer .weather .info { padding-left: 20px; }
    </style>
<div class="weather">
	
	<div class="info">
            <div><h2><?= $whether->name?></h2></div>
		<div class="description"><?= $whether->weather[0]->main; ?>
                    <p><?= $whether->weather[0]->description ?></p>
                </div>
		<div class="temp"><span><?= _('Temperature') ?></span> <?= $whether->main->temp ?> °F</div>
		<div class="pressure"><span><?= _('Pressure') ?></span> <?= $whether->main->pressure ?> inHG</div>
		<div class="humidity"><span><?= _('Humidity') ?></span> <?= $whether->main->humidity ?>%</div>
		<div class="wind"><span><?= _('Wind') ?></span>  <?= $whether->wind->speed ?> km/h</div>
	</div>
</div>