<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1421:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2019-11-29', 0,0,0], ['2019-11-30', 0,0,0], ['2019-12-01', 0,0,0], ['2019-12-02', 0,0,0], ['2019-12-03', 0,0,0], ['2019-12-04', 0,0,0], ['2019-12-05', 0,0,0], ['2019-12-06', 0,0,0], ['2019-12-07', 0,0,0], ['2019-12-08', 0,0,0], ['2019-12-09', 0,0,0], ['2019-12-10', 0,0,0], ['2019-12-11', 0,0,0], ['2019-12-12', 0,0,0], ['2019-12-13', 0,0,0], ['2019-12-14', 0,0,0], ['2019-12-15', 0,0,0], ['2019-12-16', 0,0,0], ['2019-12-17', 0,0,0], ['2019-12-18', 0,0,0], ['2019-12-19', 0,0,0], ['2019-12-20', 0,0,0], ['2019-12-21', 0,0,0], ['2019-12-22', 0,0,0], ['2019-12-23', 0,0,0], ['2019-12-24', 0,0,0], ['2019-12-25', 0,0,0], ['2019-12-26', 0,0,0], ['2019-12-27', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Friday, 29 November 2019 to Saturday, 28 December 2019',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}s:6:"output";s:0:"";}