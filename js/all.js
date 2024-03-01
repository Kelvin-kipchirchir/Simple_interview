/* globals Chart:false, feather:false */

(() => {
    'use strict'
  
    feather.replace({ 'aria-hidden': 'true' })
  
    // Graphs
    const ctx = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars
    const myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          'Sunday',
          'Monday',
          'Tuesday',
          'Wednesday',
          'Thursday',
          'Friday',
          'Saturday'
        ],
        datasets: [{
          data: [
            15339,
            21345,
            18483,
            24003,
            23489,
            24092,
            12034
          ],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false
        }
      }
    })
  })()
function loadprojects() {
  var home=document.getElementById('homediv').style.display = 'none';
  var contact=document.getElementById('contactdiv').style.display = 'none';
  var quotes=document.getElementById('quotesdiv').style.display = 'none';
  var resume=document.getElementById('resumediv').style.display = 'none';
  var projects=document.getElementById('projectsdiv').style.display = 'block';

} 
function loadhome(){
  var home=document.getElementById('homediv').style.display = 'block';
  var contact=document.getElementById('contactdiv').style.display = 'none';
  var quotes=document.getElementById('quotesdiv').style.display = 'none';
  var resume=document.getElementById('resumediv').style.display = 'none';
  var projects=document.getElementById('projectsdiv').style.display = 'none';
}
function loadcontacts(){
  var home=document.getElementById('homediv').style.display = 'none';
  var contact=document.getElementById('contactdiv').style.display = 'block';
  var quotes=document.getElementById('quotesdiv').style.display = 'none';
  var resume=document.getElementById('resumediv').style.display = 'none';
  var projects=document.getElementById('projectsdiv').style.display = 'none';
}
function loadresume(){
  var home=document.getElementById('homediv').style.display = 'none';
  var contact=document.getElementById('contactdiv').style.display = 'none';
  var quotes=document.getElementById('quotesdiv').style.display = 'none';
  var resume=document.getElementById('resumediv').style.display = 'block';
  var projects=document.getElementById('projectsdiv').style.display = 'none';
}
function loadquotes(){
  var home=document.getElementById('homediv').style.display = 'none';
  var contact=document.getElementById('contactdiv').style.display = 'none';
  var quotes=document.getElementById('quotesdiv').style.display = 'block';
  var resume=document.getElementById('resumediv').style.display = 'none';
  var projects=document.getElementById('projectsdiv').style.display = 'none';
}