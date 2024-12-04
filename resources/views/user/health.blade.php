@extends('userLayout.master')

@section('title')
  Health
@endsection

@section('css')
  <style></style>
@endsection

    <!--page content-->
    @section('content')
    <!--Tabs-->
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
      <div id="protein" class="col-md-2 center-menu">
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
      </div>
      <div id="calories"  class="col-md-2 center-menu">
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
    @endsection
