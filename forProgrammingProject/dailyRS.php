<?php

session_start();
include_once("header.php");
include_once("aside.php");

?>
    <section class="content">
        <h1 class="head-txt">Daily Routine Summary</h1>
        <div class="head-back"><span class="head-front"></span></div>
        <section class="component">

            <div class="box">
                <div class="top">
                    <h2>Daily </h2>
                    <p style="color:black; ">Lorem ipsum dolor sit amet,</p>
                </div>
                <input type="text" placeholder="">
                <textarea placeholder="" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="box">
                <div class="head">
                    <h1>Branches:</h1>
                </div>


                <div class="calendar">



      <div class="calendar-header">
        <span class="month-picker" id="month-picker"> May </span>
        <div class="year-picker" id="year-picker">
          <span class="year-change" id="pre-year">
            <pre><</pre>
          </span>
          <span id="year">2020 </span>
          <span class="year-change" id="next-year">
            <pre>></pre>
          </span>
        </div>
      </div>

      <div class="calendar-body">
        <div class="calendar-week-days">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="calendar-days">
        </div>
      </div>
      <div class="calendar-footer">
      </div>

      <div class="date-time-formate">
        <div class="day-text-formate">TODAY</div>
        <div class="date-time-value">
          <div class="time-formate">01:41:20</div>
          <div class="date-formate">03 - march - 2022</div>
        </div>
      </div>

      <div class="month-list"></div>
    </div>
  </div>

        </section>
    </section>
</body>
</html>
