<!DOCTYPE html>
<html>
<head>
	<title>PhyCalc | Displacement</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="displacement.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
		include_once "navSearch.php";
	?>

	<!-- <nav class="clearfix">
		<div class="nav-logo animated fadeInRight"><a href="phyCalc.php">PhyCalc</a></div>
		<div class="navigation animated fadeInLeft">
			<ul class="horizontal-nav">
				<li><a href="#" id="examples-btn">Examples</a></li>
				<li><a href="#" data-toggle="modal" data-target="#calculator-modal">Calculator</a></li>
				<li><a href="#" id="conversion-btn">Conversions</a></li>
				<li><a href="#" id="horizontal-search-btn"><i class="glyphicon glyphicon-search"></i></a></li>
			</ul>
			<div class="animated fadeInLeft" id="icon">
				<div id="vertical-search-btn"><i class="glyphicon glyphicon-search"></i></div>
				<div id="click-box"></div>
				<span class="hamburger"></span>
				<div id="vertical-nav" class="vertical-nav">
					<ul>
						<li><a data-toggle="modal" data-target="#calculator-modal">Calculator</a></li>
						<li><a href="#" id="vert-conversion-btn">Conversions</a></li>
						<li><a href="#" id="vert-examples-btn">Examples</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div id="search-section">
		<section id="search-form">
			<input type="text" id="search-bar" placeholder="Search"/>
			<div id="search-icon"><i class="glyphicon glyphicon-search"></i></div>
		</section>
		<div id="close-search-btn">
			<span id="close-bar-one"></span>
			<span id="close-bar-two"></span>
		</div>
		<div id="search-case-list">
			<a href="displacement.html">displacement</a>
			<a href="displacement.html">initial position</a>
			<a href="displacement.html">final position</a>
			<a href="displacement.html">position motion</a>
			<a href="displacement.html">negative motion</a>
			<a href="displacement.html">distance and displacement</a>
			<a href="displacement.html">position and time</a>
			<a href="displacement.html">net displacement</a>
			<a href="vectorDisplacement.html">vectors</a>
			<a href="vectorDisplacement.html">vector displacement</a>
			<a href="vectorDisplacement.html">multi-dimensional displacement</a>
			<a href="vectorDisplacement.html">vector identity</a>
			<a href="vectorDisplacement.html">angled displacement</a>
			<a href="vectorDisplacement.html">angled travel</a>
			<a href="vectorDisplacement.html">displacement trigonometry</a>
			<a href="vectorDisplacement.html">inverse trigonometry</a>
			<a href="vectorDisplacement.html">pythagorean theorem</a>
			<a href="vectorDisplacement.html">vector addition</a>
			<a href="velocity.html">solving velocity</a>
			<a href="velocity.html">velocity and displacement</a>
			<a href="velocity.html">velocity and time interval</a>
			<a href="velocity.html">displacement and time interval</a>
			<a href="velocity.html">speed and velocity</a>
			<a href="acceleration.html">acceleration</a>
			<a href="acceleration.html">changing velocity</a>
			<a href="acceleration.html">time and acceleration</a>
			<a href="acceleration.html">negative acceleration</a>
			<a href="acceleration.html">positive acceleration</a>
			<a href="acceleration.html">velocity and acceleration</a>
			<a href="acceleration.html">time and acceleration</a>
			<a href="kinematics.html">kinematics</a>
			<a href="kinematics.html">big five</a>
			<a href="kinematics.html">initial velocity kinematics</a>
			<a href="kinematics.html">final velocity kinematics</a>
			<a href="kinematics.html">initial position kinematics</a>
			<a href="kinematics.html">final position kinematics</a>
			<a href="kinematics.html">acceleration kinematics</a>
			<a href="kinematics.html">constant acceleration</a>
			<a href="kinematics.html">constant velocity</a>
			<a href="kinematics.html">velocity and acceleration kinematics</a>
			<a href="circularMotion.html">angular velocity</a>
			<a href="circularMotion.html">period circular motion</a>
			<a href="circularMotion.html">radius circular motion</a>
			<a href="circularMotion.html">uniform circular motion</a>
			<a href="circularMotion.html">frequency circular motion</a>
			<a href="forces.html">solving net force</a>
			<a href="forces.html">one dimensional forces</a>
			<a href="forces.html">mass and acceleration</a>
			<a href="forces.html">newton's laws</a>
			<a href="forces.html">normal forces</a>
			<a href="gravitationalForces.html">gravitational forces</a>
			<a href="gravitationalForces.html">newton's gravitational laws</a>
			<a href="gravitationalForces.html">inverse square law</a>
			<a href="gravitationalForces.html">action reaction pairs</a>
			<a href="gravitationalForces.html">gravity and acceleration</a>
			<a href="gravitationalForces.html">gravitational constant</a>
		</div>
	</div> -->

	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="animated bounceInDown section-heading">Displacement</h2>
					<div class="pages-nav animated bounceInDown" id="top-next">
						<ul class="pager">
							<li><a href="vectorDisplacement.html" class="next-page">Next: Vector Displacement<span class="glyphicon glyphicon-chevron-right"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row animated fadeInRight">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div class="solve-selection">
									<form>
										<span><span class="badge">1</span><b> Solve:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-displacement-radio-btn">
										    <span class="checkmark">Displacement</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btns" name="radio-one" id="solve-final-p-radio-btn">
										    <span class="checkmark">Final Position</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btns" name="radio-one" id="solve-initial-p-radio-btn">
										    <span class="checkmark">Initial Position</span>
										</label>
									</form>
								</div>
								<div class="unit-selection">
									<form>
										<span class="badge">2</span>
										<span><b>Unit:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="first-units" name="radio-two" units="m" id="meter-btn"/>
										    <span class="checkmark">Meters</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="first-units" name="radio-two" units="mi" id="mile-btn"/>
										    <span class="checkmark">Miles</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="first-units" name="radio-two" units="ft" id="feet-btn"/>
										    <span class="checkmark">Feet</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="first-units" name="radio-two" units="km" id="kilometer-btn"/>
										    <span class="checkmark">Kilometers</span>
										</label>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-body" id="main-panel">
							<div class="row">
								<div class="col-md-4">
									<h4 class="text-center"><span class="badge">3</span>&nbsp;<strong>Values</strong></h4>
									<form class="form-group">
										<input class="form-control num-input-field" type="number" id="displacement-field" placeholder="Displacement">
										<input class="form-control num-input-field" type="number" id="final-p-field" placeholder="Final Position">
										<input class="form-control num-input-field" type="number" id="initial-p-field" placeholder="Initial Position">
										<input class="form-control num-input-field" type="number" id="sig-figs-field" placeholder="# of sig-figs (optional)">
										<div class="form-divider"></div>
										<div class="calc-and-clear">
											<button type="button" id="calculate-btn">Calculate</button>
											<button type="button" id="clear-btn"><b>Clear</b></button>
										</div>
									</form>
								</div>
								<div class="col-md-8 text-center">
									<h4 id="equation-heading"><strong>Equation</strong></h4>
									<div id="slide-arrow-container">
										<div class="slide-arrow-btn" id="prev-slide-btn"><span class="glyphicon glyphicon-chevron-left"></span></div>
										<div class="slide-arrow-btn" id="next-slide-btn"><span class="glyphicon glyphicon-chevron-right"></span></div>
									</div>
									<div id="outer-image-container">
										<div id="inner-image-container">
											<img src="../img/basic-displacement.png" class="img-responsive slide" alt="Displacement Equation">
											<img src="../img/basic-final-position.png" class="img-responsive slide" alt="Final Position Equation">
											<img src="../img/basic-initial-position.png" class="img-responsive slide" alt="Initial Position Equation">
										</div>
										<div id="slide-bar-indicators">
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
										</div>
									</div>
									<div id="solo-image">
										<img src="../img/newVelocityFrames.png" class="img-responsive" alt="Velocity Frames"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title text-center"><h4 id="background-heading"><b>Background:</b></h4></div>
						</div>
						<div class="panel-body module-section">
							<div class="module-box">
								<div class="module">
									<div class="module-front" id="first-front">Displacement</div>
									<div class="module-back" id="first-back">
										Net distance between final position and initial position
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Positive Motion</div>
									<div class="module-back">
										Conventionally upwards and / or to the right of the origin
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Negative Motion</div>
									<div class="module-back">
										Conventionally downwards and / or to the left of the origin
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module bottom-corners-rounded">
									<div class="module-front" id="last-front">Distance</div>
									<div class="module-back" id="last-back">
										Total distance travelled in any direction for given period of time
									</div>
								</div>
							</div>
							<div class="module-img">
								<img src="../img/positionVTimeGraph.png" class="img-responsive" alt="Position v. Time Graph">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default" id="third-panel">
				<div class="panel-body" id="third-panel-body">
					<div class="row animated fadeInLeft" id="third-pics-row">
						<div class="col-sm-4 third-page-pics">
							<img src="../img/footballField.jpg" alt="Football Field" class="img-responsive">
							<div class="img-caption">
								<p>NFL player Jim Marshall ran a fumble 66 yards to his own endzone. As in the NFL, direction matters in dislpacement.</p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../img/curvedRoad.jpg" alt="Track and Field" class="img-responsive">
							<div class="img-caption">
								<p>If the distance from end to end in this loop is 200 meters, the net displacement might only be 30 meters</p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../img/raceStart.jpg" alt="Race Start" class="img-responsive">
							<div class="img-caption">
								<p>800 meter track runners may start at different points along the track, but the total distance ran is always 800 meters.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="line-divider"></div>

			<div class="row text-center" id="practice-btns-outer">
				<div class="text-center" id="practice-btns-container">
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-one">Example 1</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-two">Example 2</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-three">Example 3</button>
				</div>
			</div>

			<div class="modal fade example-modal" id="my-modal-one" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Displacement</h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<p>
								James is taking a drive to the supermarket 10 miles east of his home to buy some groceries. On his way back home he will stop at a gas station 2.4 miles west of the supermarket. What will his net displacement be during that time period?
								</p>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<b>Supermarket</b> = 10 miles west<br/>
									<b>Gas station</b> = 2.4 miles east of the supermarket<br/>
									<b>Displacement</b> = net distance traveled<br/>
								</p>
							</div>
							<button class="accordion"><strong>Illustrations</strong></button>
							<div class="modal-panel text-center">
								<p>
								<img src="../img/displacement-accordion-picture-one.png" alt="Displacement Illustrations" class="img-responsive">
								</p>
							</div>
							<button class="accordion last-accordion"><strong>Solution</strong></button>
							<div class="modal-panel">
								<p>
									<ol>
										<li><b>Positive Displacement</b> = west</li>
										<li><b>Negative Displacement</b> = east</li>
										<li><b>First vector</b> = 10 miles west <b>(positive)</b></li>
										<li><b>Second vector</b> = 2.4 miles east <b>(negative)</b></li>
										<li><b>Net displacement</b> = 10 - 2.4 = 7.6 miles (west) <b>(positive)</b></li>
									</ol>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade example-modal" id="my-modal-two" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Final Position</h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<p>
								A golf ball is placed 145 meters south of a tree line and is then hit with enough force to travel 300 meters north. What will be the golf ball’s final position?
								</p>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Equation</b> = X<sub>f</sub> = &Delta;x + X<sub>i</sub></li>
										<li><b>Initial Position</b> = X<sub>i</sub> is 145 meters south of the treeline</li>
										<li><b>Distance Traveled</b> = 300 meters</li>
									</ul>
								</p>
							</div>
							<button class="accordion"><strong>Illustrations</strong></button>
							<div class="modal-panel text-center">
								<img src="../img/displacement-accordion-picture-two.png" alt="Displacement Illustrations" class="img-responsive">
							</div>
							<button class="accordion last-accordion"><strong>Solution</strong></button>
							<div class="modal-panel">
								<p>
									<ol>
										<li><b>Equation</b> : X<sub>f</sub> = &Delta;x + X<sub>i</sub></li>
										<li><b>Initial Position</b> : 0 meters (distance from treeline does not matter)</li>
										<li><b>Displacement</b> : 300 meters (only vector of travel)</li>
										<li><b>Final Position</b> : 300 - 0 = 300 meters</li>
									</ol>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade example-modal" id="my-modal-three" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Initial Position</h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<p>
									Tom is practicing for his 200 meter race by running up a hill. Suppose he ran 150 meters and stopped to take a break. His displacement was  120 meters. What was in starting position in meters?
								</p>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Equation</b> : X<sub>i</sub> = X<sub>f</sub> - &Delta;x</li>
										<li><b>Hill Height</b> : 200 meters</li>
										<li><b>Final Position</b> : 150 meters up hill</li>
										<li><b>Displacement</b> : 120 meters up hill</li>
									</ul>
								</p>
							</div>
							<button class="accordion"><strong>Illustrations</strong></button>
							<div class="modal-panel text-center">
								<img src="../img/displacement-accordion-picture-three.png" alt="Displacement Illustrations" class="img-responsive">
							</div>
							<button class="accordion last-accordion"><strong>Solution</strong></button>
							<div class="modal-panel">
								<p>
									<ol>
										<li><b>Equation</b> : X<sub>i</sub> = X<sub>f</sub> - &Delta;x</li>
										<li><b>Equation With Values</b> : (150 m) - (120 m)</li>
										<li><b>Initial Position</b> : (150 m) - (120 m) = 30 m</li>
									</ol>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="conversion-outer">
			<div id="conversion-container">
				<div id="conversion-heading">Unit Conversions</div>
				<div class="input-option-input">
					<input type="number" id="unit-input-field" max="999" placeholder="(input)"/>
					<select name="unitConversions" id="unit-converter">
						<option value="mmToM" id="millimetersToCentimeters" selected>mm to cm</option>
						<option value="mToMm" id="centimetersToMillimeters">cm to mm</option>
						<option value="cmToM" id="centimetersToMeters">cm to m</option>
						<option value="mtoCm" id="metersToCentimeters">m to cm</option>
						<option value="mToKm" id="metersTokilometers">m to km</option>
						<option value="kmToM" id="kilometersToMeters">km to m</option>
						<option value="mToMi" id="metersToMiles">m to mi</option>
						<option value="miToM" id="milesToMeters">mi to m</option>
						<option value="mToMi" id="metersToMiles">m to mi</option>
						<option value="kmToMi" id="kilometersToMiles">km to mi</option>
						<option value="miToKm" id="milesToKilometers">mi to km</option>
						<option value="ftToYds" id="feetToYards">ft to yds</option>
						<option value="ydsToFt" id="yardsToFeet">yds to ft</option>
						<option value="ftToM" id="feetToMeters">ft to m</option>
						<option value="mToFt" id="metersToFeet">m to ft</option>
						<option value="inToCm" id="inchesToCentimeters">in to cm</option>
						<option value="cmToIn" id="centimetersToInches">cm to in</option>
						<option value="mgToG" id="milligramsToGrams">mg to g</option>
						<option value="gToMg" id="gramsToMilligrams">g to mg</option>
						<option value="gToKg" id="gramsToKilograms">g to kg</option>
						<option value="kgToG" id="kilogramsToGrams">kg to g</option>
						<option value="lbsToKg" id="poundsToKilograms">lbs to kg</option>
						<option value="kgToLbs" id="kilogramsToPounds">kg to lbs</option>
						<option value="km2Tom2" id="kilometerSquaredToSquareMeters">km² to m²</option>
						<option value="m2ToKm2" id="squareMetersToKilometersSquared">m² to km²</option>-->
					</select>
					<input type="text" id="unit-output-field" placeholder="(output)" disabled="disabled">
				</div>
			</div>
		</div>



		<div class="container">
			<ul class="pager">
  				<li><a href="vectorDisplacement.html" class="next-page">Next: Vector Displacement<span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>
		</div>

	</section>

	<!-- Calculator Modal -->
			<div class="modal fade" id="calculator-modal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Calculator</h4>
						</div>
							<div class="modal-body">
								<div class="calculator-whole">
					        <input type="text" id="input-field">
					        <div class="row">
					            <div class="col-half">
					                <div id="radians-container">
					                    <button type="button" id="radians-btn">Radians</button>
					                    <span id="radians-indicator"></span>
					                </div>
					            </div>
					            <div class="col-half">
					                <div id="degrees-container">
					                    <button type="button" id="degrees-btn">Degrees</button>
					                    <span id="degrees-indicator"></span>
					                </div>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">sin</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">cos</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">tan</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button pi-btn" class="reg-btn">&pi;</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">sin<sup>-1</sup></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">cos<sup>-1</sup></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">tan<sup>-1</sup></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">/</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">7</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">8</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">9</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn"><b>*</b></button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">4</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">5</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">6</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">-</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">1</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">2</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">3</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">+</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">0</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn"><b>.</b></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="square-btn">x<sup>2</sup></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="nth-power">x<sup>n</sup></button>
					            </div>
					        </div>
					         <div class="row">
					            <div class="col-fourth">
					                <button type="button" id="square-root-btn">&radic;</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">(</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">)</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="ten-power">EE</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" id="calculator-calculate-btn">=</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="calculator-clear-btn">Clear</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="delete-btn">Del</button>
					            </div>
					            <div class="col-fourth">
					                <input type="number" id="sig-fig-field" placeholder="SD#"/>
					            </div>
					        </div>
					    </div>
									<div id="calculator-tooltip"></div>
							</div>
						<div class="modal-footer text-center"  id="calc-modal-footer">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
				<div class="close-modal-btn">
					<span class="btn glyphicon glyphicon-remove"></span>
				</div>
			</div>

			<!-- Back to Top Btn -->
			<div id="go-up-container">
				<button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
			</div>

  <script type="text/javascript" src="jsCalculator.js"></script>
	<script type="text/JavaScript" src="displacement.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





</body>
</html>
