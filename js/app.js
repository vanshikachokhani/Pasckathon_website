$(document).ready(function(){
    $.ajax({
      url: "http://localhost/FirstPage/Graph/data.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var month = [];
        var rating = [];
  
        for(var i in data) {
          month.push("Month " + data[i].Hospital);
          rating.push(data[i].Rating);
        }
  
        var chartdata = {
          labels: month,
          datasets : [
            {
              label: 'Hospital Rating',
              backgroundColor: 'rgba(200, 200, 200, 0.75)',
              borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: Rating
            }
          ]
        };
  
        var ctx = $("#mycanvas");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });
