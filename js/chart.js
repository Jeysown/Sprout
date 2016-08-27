//Morris charts snippet - js

$.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
$.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

var valueSafe = safeArray.length;

var valueDanger = dangerArray.length;

 var totalSafe= (valueSafe/(valueDanger+valueSafe))*100;
var totalDanger= (valueDanger/(valueDanger+valueSafe))*100;
      Morris.Donut({
        element: 'donut-example',
        colors: [
          '#388E3C',
          '#4CAF50'
        ],
        data: [
         {label: "Safe", value: totalSafe},
         {label: "Danger", value: totalDanger},
          {label: "Warning", value: totalDanger}
       ],
        formatter: function (y) {
          return y + "%";
        },
        resize: true
      });

      Morris.Bar({
         element: 'bar-example',
         data: [
            {y: 'Day', a: valueSafe,  b: valueDanger,c: valueDanger},
            {y: 'Week', a: valueSafe,  b: valueDanger,c: valueDanger},
            {y: 'Month', a: valueSafe,  b: valueDanger,c: valueDanger},
            {y: 'Year', a: valueSafe,  b: valueDanger,c: valueDanger}
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
    { y: '2006', a: 60,b: 100,c: 70},
    { y: '2007', a: 75,b: 60,c: 30},
    { y: '2008', a: 50,b: 100,c: 20},
    { y: '2009', a: 75,b: 30,c: 100},
    { y: '2010', a: 50 ,b: 100,c: 100},
    { y: '2011', a: 75 ,b: 100,c: 100},
    { y: '2012', a: 10,b: 30,c: 100}
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
