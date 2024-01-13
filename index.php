<?php
    $pagetitle = 'Home';
    include 'src/includes/header.php';
?>
    <main>
        <h1 class="centertext">Over Mij</h1>
        <div class="flex">
            <div class="card">
                <i class="icon fa-regular fa-circle-user"></i>
                <h2 class="cardh1">Wie ik ben</h2>
                <p class="cardp">Ik ben Robin van Spijker en ik ben <span id="age">N/A</span> jaar.</p>
            </div>
            <div class="card">
                <i class="icon fa-solid fa-gamepad"></i>
                <h2 class="cardh1">Hobby's</h2>
                <p class="cardp">In mijn vrije tijd hou ik van gamen, programmeren en mountainbiken.</p>
            </div>
            <div class="card">
                <i class="icon fa-solid fa-laptop"></i>
                <h2 class="cardh1">Programmeren</h2>
                <p class="cardp">Ik doe de opleiding software developer op het <a class="href" href="https://www.alfa-college.nl/groningen/boumaboulevard-573">Alfa-college</a>.</p>
            </div>
        </div>
    </main>
	<script lang="js">
		function calculateAge(date) {
		  var formattedDate = date.split("/");
		  var day = parseInt(formattedDate[0], 10);
		  var month = parseInt(formattedDate[1], 10) - 1; // Month is 0-indexed
		  var year = parseInt(formattedDate[2], 10);

		  var birthdateTimeStamp = new Date(year, month, day).getTime();
		  var currentDate = new Date().getTime();
		  var difference = currentDate - birthdateTimeStamp;

		  var millisecondsInYear = 1000 * 60 * 60 * 24 * 365.25; // considering leap years
		  var currentAge = Math.floor(difference / millisecondsInYear);

		  return currentAge;
		}

		var age = calculateAge('23/06/2006');
		document.getElementById("age").innerHTML = age;
	</script>
</body>
</html>