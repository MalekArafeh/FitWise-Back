@extends('userLayout.master')

@section('title')
  Health
@endsection

@section('css')
  <style>
  
  </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@endsection

    <!--page content-->
    @section('content')

  {{-- weight --}}
   <!-- Modal for Adding Weight -->
       <div class="container mt-5">
    <h2 class="text-center">Weight Tracker</h2>

    <!-- Table for Weight Tracker -->
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Date</th>
                <th>Weight (kg)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="weightTableBody">
            <!-- Rows will be dynamically added here -->
        </tbody>
    </table>

    <!-- Button to add new weight -->
    <div class="d-flex justify-content-center mt-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addWeightModal">
            Add Weight
        </button>
    </div>
</div>

<!-- Modal for Adding Weight -->
<div class="modal fade" id="addWeightModal" tabindex="-1" aria-labelledby="addWeightModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addWeightModalLabel">Add New Weight</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addWeightForm">
                    <div class="mb-3">
                        <label for="weightInput" class="form-label">Enter Weight (kg)</label>
                        <input type="number" class="form-control" id="weightInput" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveWeightButton">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="col-md-5 col-10 center-block"><h2 class="mt-5">Weight Tracker for 30 Days</h2>
<canvas id="weightChart" width="400" height="200"></canvas></div>
    <!--Tabs-->

    <!--menu-->
    <div class="row margin-bottom">
      <div class="col-md-2 center-menu">
        <div class="calculators-menu">
          <p class="blk-text headings">Choose Calculator</p>
          <a
            id="defaultOption"
            onclick="showCalc(event, 'calsCalc')"
            class="text no-link option"
            >Calories Calculator <span class="icon mg"></span></a
          >
          <a onclick="showCalc(event, 'prtnCalc')" class="text no-link option"
            >Protein Calculator <span class="icon mg"></span></a
          >
        </div>
       
      </div>
      <div class="hide-on-lg">
        <div class="tabs">
          <button
            id="defaultTab"
            onclick="showCalc(event, 'calsCalc')"
            class="btn text option"
          >
            Calories
          </button>
          <button onclick="showCalc(event, 'prtnCalc')" class="btn text option">
            Protein
          </button>
        </div>
      </div>
      <!--first calc-->
      <div id="prtnCalc" class="col-md-5 col-10 center-block calc">
        <div class="blk-text content">
        <h3>Fuel Your Fitness Journey with Protein</h3>
        <p>
          Calculate how much protein you need to fuel your workouts, boost
          recovery, and build strength. Scroll down to find out your ideal daily
          intake!
          <h4> Protein Content per Serving Examples: </h4>
                    🥚 Egg - 6g protein per egg
                    🐔 Chicken Breast - 31g per 3.5 ounces
                    🌱 Lentils - 18g per cup
                    🥛 Greek Yogurt - 10g per 100g
        </p>
      </div>
        <div class="linear calculator">
          <p class="headings blk-text vertical-margin">Protein Calculator</p>
          <form>
            <input type="number" id='pro_weight' placeholder="Weight" />
            {{-- <input type="number" placeholder="Height" /> --}}
            {{-- <input type="number" placeholder="Age" /> --}}
            {{-- <select name="Gender" id="gender">
              <option value="">Gender</option>
              <option value="female">Female</option>
              <option value="male">Male</option> --}}
            </select>
            <select name="Goal" id="pro_goal">
              <option value="">Goal</option>
              <option value="0.3">Weight loss and building muscles</option>
              <option value="0.7">Muscle amplification</option>
              <option value="0.001">Maintaining</option>
            </select>
            <select name="Activity level" id="pro_activity">
              <option value="">Activity level</option>
              <option value="1.8">Moderatly active</option>
              <option value="1.0">Not active</option>
              <option value="1.4">Lightly active</option>
              <option value="2.2">Very active</option>
            </select>
          </form>
          <button id="proteinCalc" onclick=protein_calculator() class="btn btn-warning text vertical-margin">
            Calculate
          </button>
        </div>
      </div>
      <div id="protein" class="col-md-2 col-10 center-menu">
        <div class="gradient-border">
        <span
          >Your Daily Protein Needs Are Set! 💪 <br>
           Aim for <h5 id="protine"></h5>grams of protein each day. Protein is key to fueling your energy and recovery, so let’s keep you powered up and on track!!</span
        >
      </div>
    </div>
  

      <!--Second calculator-->
      <div id="calsCalc" class="col-md-5 col-10 center-block calc">
        <div class="blk-text content">
        
          <h3>Find Your Optimal Calorie Intake</h3>
          <p>
            Calories are the fuel that powers everything you do, from thinking and walking to building muscle. Balancing your intake is key to maintaining energy and reaching your goals.
            Use our calculator to set your daily calorie goal and achieve a healthy balance. Ready to find out?
            <h4> Visual Guide to Calorie-Burning Activities: </h4>
            Calorie Burn per 30 minutes:
            🏃 Running - Approx. 300 calories
            🚴 Cycling - Approx. 200 calories
            🧹 House Cleaning - Approx. 100 calories
          </p>
        </div>
        <div class="hide-on-lg">
    </div>
        <div class="radial calculator">
          <p class="headings blk-text vertical-margin">Calories Calculator</p>
          <form>
            <input type="number" id='cal_weight' placeholder="Weight" />
            <input type="number" id='cal_height' placeholder="Height" />
            <input type="number" id='cal_age' placeholder="Age" />
            <select name="Gender" id="cal_gender">
              <option value="">Gender</option>
              <option value="female">Female</option>
              <option value="male">Male</option>
            </select>
            <select name="Goal" id="cal_goal">
              <option value="">Goal</option>
              <option value="loss">Weight loss</option>
              <option value="gain">Weight gain</option>
              <option value="maintain">Maintain weight</option>
            </select>
            <select name="Activity level" id="cal_activity">
              <option value="">Activity level</option>
              <option value="1.55">Moderatly active</option>
              <option value="1.2">Not active</option>
              <option value="1.375">Lightly active</option>
              <option value="1.75">Very active</option>
            </select>
          </form>
          <button id="caloriesCalc" onclick=calorie_calculator()  class="btn btn-warning text vertical-margin">
            Calculate
          </button>
        </div>
        {{-- <h2 class="mt-5">Weight Tracker for 30 Days</h2>
    <canvas id="weightChart" width="400" height="200"></canvas> --}}
      </div>
      
      <div id="calories"  class="col-md-2 col-10 center-menu">
        <div class="gradient-border">
          <span
            >Here’s Your Daily Calorie Target! 🌟 <br>
            To support your gaol and reach balanced energy levels, aim for<h5 id="result"></h5>
 calories each day. Tracking your intake can help you stay on course and see steady progress. Let’s keep the momentum going!</span
          >
        </div>
      </div>
      
    </div>


    
    <!--end page content-->
  @endsection

    @section('scripts')
      <script src="{{asset('user/js/script.js')}}"></script>  

<script>
 let chartInstance = null; // Global variable for Chart.js instance

// Retrieve existing weights from localStorage
const weights1 = JSON.parse(localStorage.getItem('weights1')) || [];

// Function to prepare chart data
function prepareChartData(weightsData) {
    const dates = weightsData.map(entry => entry.date); // Extract dates
    const weights = weightsData.map(entry => parseFloat(entry.weight1)); // Extract weights
    return { dates, weights };
}

// Function to render or update the chart
function renderChart() {
    const chartData = prepareChartData(weights1);

    if (chartInstance) {
        // Update the chart data dynamically
        chartInstance.data.labels = chartData.dates; // Update labels (dates)
        chartInstance.data.datasets[0].data = chartData.weights; // Update data (weights)
        chartInstance.update(); // Refresh the chart
    } else {
        // Create the chart for the first time
        const ctx = document.getElementById('weightChart').getContext('2d');
        chartInstance = new Chart(ctx, {
            type: 'line',
            data: {
                labels: chartData.dates, // Use dates as labels
                datasets: [{
                    label: 'Weight (kg)',
                    data: chartData.weights, // Use weights as data points
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false, // Adjust as per your data
                        title: {
                            display: true,
                            text: 'Weight (kg)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    }
                }
            }
        });
    }
}

// Function to render the weight table
function renderWeightTable() {
    const tableBody = document.getElementById('weightTableBody');
    tableBody.innerHTML = ''; // Clear the table

    weights1.forEach((entry, index) => {
        const row = `
            <tr>
                <td>${entry.date}</td>
                <td>${entry.weight1} kg</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="deleteWeight(${index})">Delete</button>
                </td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', row);
    });
}

// Function to add a new weight
document.getElementById('saveWeightButton').addEventListener('click', () => {
    const weightInput = document.getElementById('weightInput');
    const weight1 = weightInput.value;

    if (weight1) {
        const newEntry = {
            date: new Date().toLocaleDateString(),
            weight1: weight1
        };

        weights1.push(newEntry);
        localStorage.setItem('weights1', JSON.stringify(weights1)); // Save to localStorage
        renderWeightTable();
        renderChart(); // Update chart dynamically
        weightInput.value = ''; // Clear input
        bootstrap.Modal.getInstance(document.getElementById('addWeightModal')).hide(); // Close modal
    }
});

// Function to delete a weight entry
function deleteWeight(index) {
    weights1.splice(index, 1);
    localStorage.setItem('weights1', JSON.stringify(weights1)); // Update localStorage
    renderWeightTable();
    renderChart(); // Update chart dynamically
}

// Render the table and chart on page load
renderWeightTable();
renderChart();


</script>

  @endsection

  
