<?php 

require "connection.php";

if(isset($_POST["submit"])){

  $make = $_POST["make"];
  $model = $_POST["model"];
  $type = $_POST["type"];
  $year = $_POST["year"];
  $symptom = $_POST["symptom"];

  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Diagnostic Form</title>
  <link rel="stylesheet" href="report_style.css">
</head>
<body>

 <a href="Dashboard.php"><button id="Dashboard">Dashboard</button></a>

  <h1>Vehicle Diagnostic Form</h1>
  <form action="", method="post">
    <label for="make">Make:</label>
    <select id="make" name="make">
      <option value="">Select Make</option>
      <option value="Ford">Ford</option>
      <option value="Honda">Honda</option>
      <option value="Toyota">Toyota</option>
      <option value="other">Other (please specify)</option>
</select>

	<br>
	<br>
	<br>
	
    <label for="model">Model:</label>
    <select id="model" name="model">

       <option value="other">Other (please specify)</option>
      </select>
<input type="text" id="other_vehicle" name="other_vehicle" placeholder="Enter Other Vehicle Type" hidden>


	  <script>
  const makeSelect = document.getElementById('make');
  const modelSelect = document.getElementById('model');

  // Define model data as an object (replace with your actual data)
  const carModels = {
    "Ford": ["F-150", "	Mondeo/ Taurus", "Explorer", "Focus ST", "Focus", "New Ranger XL Single Cab", "Transit Courier"],
    "Honda": ["Civic", "Accord", "CR-V", "Amaze", "Fit", "Shuttle", "Zest-Spark"],
    "Toyota": ["Camry", "Corolla", "D4D-Hilux", "Avensis", "Blade", "Land-Cruizer"]
  };

  function updateModelOptions() {
    const selectedMake = makeSelect.value;
    modelSelect.innerHTML = ""; // Clear existing options

    if (selectedMake) {
      const availableModels = carModels[selectedMake];
      if (availableModels) {
        availableModels.forEach(model => {
          const option = document.createElement('option');
          option.value = model;
          option.text = model;
          modelSelect.appendChild(option);
        });
      } else {
        // Handle case where no models available for selected make (optional)
        const option = document.createElement('option');
        option.value = "";
        option.text = "No models available";
        modelSelect.appendChild(option);
      }
    }
  }

  // Call updateModelOptions on page load and whenever make selection changes
  updateModelOptions();
  makeSelect.addEventListener('change', updateModelOptions);
</script>

    <br>
	<br>
	<br>
	
    <label for="type">Type:</label>
    <select id="type" name="type">
  <option value="Sedan">Sedan</option>
  <option value="Hatchback">Hatchback</option>
  <option value="Pick Up Van">Pick Up Van</option>
  <option value="Heavy Duty Hauler">Heavy Duty Hauler</option>
  <option value="Combi">Combi</option>
  <option value="Motorcycle">Motorcycle</option>
      </select>
    <br>
	<br>
	<br>
	
    <label for="year">Year:</label>
 <select id="year" name="year">
  <option value="">Select Year</option>
</select>

<script>
  const yearSelect = document.getElementById('year');
  for (let year = 2024; year >= 1985; year--) {
    const option = document.createElement('option');
    option.value = year;
    option.text = year;
    yearSelect.appendChild(option);
  }
</script>
      <br>
	  <br>
	  <br>
    <br>
	
	<label for="symptom">Symptom:</label>
  <input type="text" id="symptom" name="symptom" rows="4" cols="50" placeholder="Describe the car issue in detail">

  <script>
  const carFaultData = {
  // This object will store fault data for different makes and models.
  // Example structure:
  Ford: {
    F150: {
      "car won't start": ["Dead battery", "Faulty starter motor"]
    },
    // ... other models and symptoms
  },
  Honda: {
    Civic: {
      "car won't start": ["Dead battery", "Faulty spark plugs"],
      // ... other symptoms
    },
    // ... other models and symptoms
  },
  // ... other makes
};

const makeSelect = document.getElementById('make');
const modelSelect = document.getElementById('model');
const symptomInput = document.getElementById('symptom');
const faultResultsDiv = document.getElementById('fault_results');
const form = document.getElementById('car_fault_form');

// Update model options based on selected make (similar to previous example)
function updateModelOptions() {
  // ... (implementation omitted for brevity)
}

// Display potential faults based on user input
function displayPotentialFaults(event) {
  event.preventDefault(); // Prevent default form submission behavior

  const selectedMake = makeSelect.value;
  const selectedModel = modelSelect.value;
  const userInputSymptom = symptomInput.value.toLowerCase(); // Make search case-insensitive

  faultResultsDiv.innerHTML = ""; // Clear previous results

  if (selectedMake && selectedModel && userInputSymptom) {
    const potentialFaults = carFaultData[selectedMake]?.[selectedModel]?.[userInputSymptom];
    if (potentialFaults) {
      faultResultsDiv.innerHTML = `<h3>Potential Faults for "${userInputSymptom}":</h3><ul>`;
      potentialFaults.forEach(fault => {
        const listItem = document.createElement('li');
        listItem.textContent = fault;
        faultResultsDiv.appendChild(listItem);
      });
      faultResultsDiv.innerHTML += `</ul>`;
    } else {
      faultResultsDiv.textContent = "No fault information found for this combination.";
    }
  } else {
    faultResultsDiv.textContent = "Please select Make, Model, and enter Symptom.";
  }
}

// Event listeners
makeSelect.addEventListener('change', updateModelOptions);
form.addEventListener('submit', displayPotentialFaults);
</script>

  <button type="submit" name="submit">Find Potential Faults</button>
  <div id="fault_results"></div>
	<br>
	<br>
	
  </form>
  
  <div class="watermark">
	<img src="piston-engine-illu.png" alt="piston-engine-illu" width = 750 height = 750 />
   </div>
   <footer>
    <p>&copy; 2024 Engine-Dig. All rights reserved.</p>
  </footer>
</body>
</html>
