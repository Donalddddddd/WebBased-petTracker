<?php

session_start();
include_once("header.php");
include_once("aside.php");



?>
    <section class="content">
        <h1 class="head-txt">Trackings</h1>
        <div class="head-back"><span class="head-front"></span></div>
        <div class="component">
            <div class="box general-info">
                <h2>SURVEY</h2>
                <p>Questions...</p>
    <form id="healthSurveyForm" class="surveyForm">

    <div class="form-group">
        <label for="pet">What pet?</label>
        <select id="pet" name="pet" required>
          <option value="">Select</option>
          <option value="cat">Cat</option>
          <option value="dog">Dog</option>
        </select>
      </div>

    <div class="form-group">
      <label for="symptoms">symptoms:</label>
      <select id="symptoms" name="symptoms" required>
        <option value="">Select</option>
        <option value="Lack of energy/lethargic">Lack of energy/lethargic</option>
        <option value="Not eating enough food">Not eating enough food</option>
        <option value="Have a fever">Have a fever</option>
        <option value="Abdominal pain">Abdominal pain</option>
        <option value="Vomiting">Vomiting</option>
        <option value="Diarrhea">Diarrhea</option>
        <option value="High heart rat">High heart rate</option>
        <option value="Difficulty in breathing">Difficulty in breathing</option>
      </select>
    </div>

    <button type="submit">Submit</button>
  </form>
            </div>
            <form action="" method="post">
            <div class="box site-control">
                <h2>Suggestions</h2>
                <p>Lorem ipsum dolor sit</p>
                <textarea name="suggestion" placeholder="...." id="result" cols="30" rows="16"></textarea>
                <button type="submit" name="submit">Save</button>
            </div>
            </form>
            <div class="box">
                <h1>Daily Tracking:</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                <div class="even-column">
                    <input type="checkbox" id="draft" value="quick darft" checked>
                    <label for="draft">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="target" value="yearly target" checked>
                    <label for="target">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="state" value="tickets statistics" checked>
                    <label for="state">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="new" value="latest news" checked>
                    <label for="new">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="task" value="latest tasks">
                    <label for="task">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="item" value="top search items" checked>
                    <label for="item">Lorem ipsum dolor sit amet,</label>
                </div>
            </div>
            <div class="box">
                <h1>Weekly Tracking:</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                <div class="even-column">
                    <input type="checkbox" id="draft" value="quick darft" checked>
                    <label for="draft">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="target" value="yearly target" checked>
                    <label for="target">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="state" value="tickets statistics" checked>
                    <label for="state">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="new" value="latest news" checked>
                    <label for="new">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="task" value="latest tasks">
                    <label for="task">Lorem ipsum dolor sit amet,</label>
                </div>
                <div class="even-column">
                    <input type="checkbox" id="item" value="top search items" checked>
                    <label for="item">Lorem ipsum dolor sit amet,</label>
                </div>
            </div>
            <div class="box site-control">
                <h2>Daily Reminders:</h2>
                <p>Lorem ipsum dolor sit</p>
                <textarea name="" placeholder="Reminders.." id="" cols="30" rows="16"></textarea>
            </div>
        </div>
    </section>

    <script>



    </script>

</body>
</html>
