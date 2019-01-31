var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};
	
	//var lineChartData = {
	//		labels : ["January","February","March","April","May","June","July"],
	//		datasets : [
	//			{
	//				label: "My First dataset",
	//				fillColor : "rgba(220,220,220,0.2)",
	//				strokeColor : "rgba(220,220,220,1)",
	//				pointColor : "rgba(220,220,220,1)",
	//				pointStrokeColor : "#fff",
	//				pointHighlightFill : "#fff",
	//				pointHighlightStroke : "rgba(220,220,220,1)",
	//				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
	//			},
	//			{
	//				label: "My Second dataset",
	//				fillColor : "rgba(48, 164, 255, 0.2)",
	//				strokeColor : "rgba(48, 164, 255, 1)",
	//				pointColor : "rgba(48, 164, 255, 1)",
	//				pointStrokeColor : "#fff",
	//				pointHighlightFill : "#fff",
	//				pointHighlightStroke : "rgba(48, 164, 255, 1)",
	//				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
	//			}
	//		]

	//	}
		
	var barChartData = {
			labels : ["1 Star","2 Star","3 Star","4 Star","5 Star"],
			datasets : [
				//{
				//	fillColor : "rgba(220,220,220,0.5)",
				//	strokeColor : "rgba(220,220,220,0.8)",
				//	highlightFill: "rgba(220,220,220,0.75)",
				//	highlightStroke: "rgba(220,220,220,1)",
				//	data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				//},
				{
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 0.8)",
					highlightFill : "rgba(48, 164, 255, 0.75)",
					highlightStroke : "rgba(48, 164, 255, 1)",
					data : [d1,d2,d3,d4,d5]
				}
			]
	
		}

	var barChart1Data = {
	    labels: ["1 Star", "2 Star", "3 Star", "4 Star", "5 Star"],
	    datasets: [
            //{
            //	fillColor : "rgba(220,220,220,0.5)",
            //	strokeColor : "rgba(220,220,220,0.8)",
            //	highlightFill: "rgba(220,220,220,0.75)",
            //	highlightStroke: "rgba(220,220,220,1)",
            //	data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            //},
            {
                fillColor: "rgba(48, 164, 255, 0.2)",
                strokeColor: "rgba(48, 164, 255, 0.8)",
                highlightFill: "rgba(48, 164, 255, 0.75)",
                highlightStroke: "rgba(48, 164, 255, 1)",
                data: [b1, b2, b3, b4, b5]
            }
	    ]

	}
	var pieData = [
				{
					value: 300,
					color:"#30a5ff",
					highlight: "#62b9fb",
					label: "Blue"
				},
				{
					value: 50,
					color: "#ffb53e",
					highlight: "#fac878",
					label: "Orange"
				},
				{
					value: 100,
					color: "#1ebfae",
					highlight: "#3cdfce",
					label: "Teal"
				},
				{
					value: 120,
					color: "#f9243f",
					highlight: "#f6495f",
					label: "Red"
				}

			];
			
	//var doughnutData = [
	//				{
	//					value: 300,
	//					color:"#30a5ff",
	//					highlight: "#62b9fb",
	//					label: "Blue"
	//				},
	//				{
	//					value: 50,
	//					color: "#ffb53e",
	//					highlight: "#fac878",
	//					label: "Orange"
	//				},
	//				{
	//					value: 100,
	//					color: "#1ebfae",
	//					highlight: "#3cdfce",
	//					label: "Teal"
	//				},
	//				{
	//					value: 120,
	//					color: "#f9243f",
	//					highlight: "#f6495f",
	//					label: "Red"
	//				}
	
	//			];

window.onload = function(){
	//var chart1 = document.getElementById("line-chart").getContext("2d");
	//window.myLine = new Chart(chart1).Line(lineChartData, {
	//	responsive: true
	//});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive : true
	});
	var chart5 = document.getElementById("bar-chart1").getContext("2d");
	window.myBar = new Chart(chart5).Bar(barChart1Data, {
	    responsive: true
	});
	//var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	//window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {responsive : true
	//});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {responsive : true
	});
	
};