//Morris charts snippet - js

$.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
$.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

var valueSafe = safeArray.length;
var valueDanger = dangerArray.length;
var valueWarning = warningArray.length;

 var totalSafe= (valueSafe/(valueDanger+valueSafe+valueWarning))*100;
 var totalWarning= (valueWarning/(valueDanger+valueSafe+valueWarning))*100;
var totalDanger= (valueDanger/(valueDanger+valueSafe+valueWarning))*100;
      Morris.Donut({
        element: 'donut-example',
        colors: [
          '#388E3C',
          '#4CAF50'
        ],
        data: [
         {label: "Safe", value: totalSafe},
         {label: "Danger", value: totalDanger},
          {label: "Warning", value: totalWarning}
       ],
        formatter: function (y) {
          return y + "%";
        },
        resize: true
      });

      Morris.Bar({
         element: 'bar-example',
         data: [
            {y: 'Day', a: valueSafe,  b: valueWarning,c: valueDanger},
            {y: 'Week', a: valueSafe,  b: valueWarning,c: valueDanger},
            {y: 'Month', a: valueSafe,  b: valueWarning,c: valueDanger},
            {y: 'Year', a: valueSafe,  b: valueWarning,c: valueDanger}
         ],
         xkey: 'y',
         ykeys: ['a', 'b','c'],
         labels: ['Safe', 'Warning','Danger'],
         barColors: function(row, series, type) {
  if(series.key == 'b')
  {
      return "#388E3C";
  }
  else
  {
    return "#4CAF50";
  }
}

      });
      Morris.Line({
  element: 'line-example',
  data: [

    { y: '2012', a: 50,b: 30,c: 20},
    { y: '2013', a: 50,b: 10,c: 40},
      { y: '2013', a: 30,b: 60,c: 10}
  ],
  xkey: 'y',
  ykeys: ['a','b','c'],
  postUnits:['%'],
  labels: ['Safe','Warning','Danger'],
  lineColors: function(row, series, type) {
if(series.key == 'a')
{
return "#388E3C";
}
else
{
return "#4CAF50";
}
}
});

});
});
