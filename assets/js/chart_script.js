/*!
 * Chart_script.js
 * Author       : Bestwebcreator.
 * Template Name: Cryptocash – ICO, Cryptocurrency Website & ICO Landing Page HTML + Dashboard Template
 * Version      : 1.7
*/
var config = {
type: 'doughnut',
data: {
 
 datasets: [{
  data: [10, 5, 15, 5, 65],
  backgroundColor: ['#f69040','#78c596','#f17776','#0eadc9','#5b5da8'],
  borderColor: [
   'rgba(255,255,255,0.5)',
   'rgba(255,255,255,0.5)',
   'rgba(255,255,255,0.5)',
   'rgba(255,255,255,0.5)',
   'rgba(255,255,255,0.5)',
  ],
  borderWidth: 1,
  label: 'Dataset 1'
 }],
 labels: [
  'Founder & Team',
  'Advisors',
  'Marketing',
  'Partnership',
  'Crowdsale'
 ]
},
options: {
 responsive: true,
 legend: {
   display: false,
 },
 title: {
   display: false,
   text: ''
 },
 pieceLabel: {
  render: 'percentage',
  fontColor: ['#f69040','#78c596','#f17776','#0eadc9','#5b5da8'],
  fontSize: 16,
  fontStyle: 'bold',
  position: 'outside',
  precision: 2
 },
 animation: {
   animateScale: true,
   animateRotate: true
 }
}
};

var config2 = {
type: 'doughnut',
data: {
 
 datasets: [{
  data: [40, 20, 35, 2, 3],
  backgroundColor: ['#f69040','#78c596','#f17776','#0eadc9','#5b5da8'],
  borderColor: [
   'rgba(255,255,255,0.5)',
   'rgba(255,255,255,0.5)',
   'rgba(255,255,255,0.5)',
   'rgba(255,255,255,0.5)',
   'rgba(255,255,255,0.5)',
  ],
  borderWidth: 1,
  label: 'Dataset 1'
 }],
 labels: [
  'R & D',
  'Marketing',
  'Ops',
  'Legal',
  'Licensing '
 ]
},
options: {
 responsive: true,
 legend: {
   display: false,
 },
 title: {
   display: false,
   text: ''
 },
 pieceLabel: {
  render: 'percentage',
  fontColor: ['#f69040','#78c596','#f17776','#0eadc9','#5b5da8'],
  fontSize: 16,
  fontStyle: 'bold',
  position: 'outside',
  precision: 2
 },
 animation: {
   animateScale: true,
   animateRotate: true
 }
 
}
};


window.onload = function() {
var ctx = document.getElementById('token_sale').getContext('2d');
window.myPie = new Chart(ctx, config);
var ctx2 = document.getElementById('token_dist').getContext('2d');
window.myPie = new Chart(ctx2, config2);
};