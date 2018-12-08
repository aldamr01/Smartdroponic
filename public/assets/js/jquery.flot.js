/*
Template Name: Greeva - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
File: Flot Chart
*/
! function($) {
	"use strict";

	var FlotChart = function() {
		this.$body = $("body")
		this.$realData = []
	};

	//creates plot graph
	FlotChart.prototype.createPlotGraph = function(selector, data1, data2, data3, labels, colors, borderColor, bgColor) {
		//shows tooltip
		function showTooltip(x, y, contents) {
			$('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css({
				position : 'absolute',
				top : y + 5,
				left : x + 5
			}).appendTo("body").fadeIn(200);
		}


		$.plot($(selector), [{
			data : data1,
			label : labels[0],
			color : colors[0]
		}, {
			data : data2,
			label : labels[1],
			color : colors[1]
		},
			{
			data : data3,
			label : labels[2],
			color : colors[2]
		}], {
			series : {
				lines : {
					show : true,
					fill : true,
					lineWidth : 2,
					fillColor : {
						colors : [{
							opacity : 0.5
						}, {
							opacity : 0.5
						}, {
							opacity: 0.8
						}]
					}
				},
				points : {
					show : false
				},
				shadowSize : 2
			},

			grid : {
				hoverable : true,
				clickable : true,
				borderColor : borderColor,
				tickColor : "#f9f9f9",
				borderWidth : 1,
				labelMargin : 30,
				backgroundColor : bgColor
			},
			legend : {
				position: "ne",
				margin : [0, -32],
				noColumns : 0,
				labelBoxBorderColor : null,
				labelFormatter : function(label, series) {
					// just add some space to labes
					return '' + label + '&nbsp;&nbsp;';
				},
				width : 30,
				height : 2
			},
			yaxis : {
				axisLabel: "Daily Visits",
				tickColor : '#f5f5f5',
				font : {
					color : '#bdbdbd'
				}
			},
			xaxis : {
				axisLabel: "Last Days",
				tickColor : '#f5f5f5',
				font : {
					color : '#bdbdbd'
				}
			},
			tooltip : true,
			tooltipOpts : {
				content : '%s: Value of %x is %y',
				shifts : {
					x : -60,
					y : 25
				},
				defaultTheme : false
			},
			splines: {
				show: true,
				tension: 0.4, // float between 0 and 1, defaults to 0.5
				lineWidth: 1 // number, defaults to 2
			}
		});
	},
	//end plot graph

	//creates plot Dot graph
	FlotChart.prototype.createPlotDotGraph = function(selector, data1, data2, labelsDot, colorsDot, borderColorDot, bgColorDot) {
		//shows tooltip
		function showTooltip(x, y, contents) {
			$('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css({
				position : 'absolute',
				top : y + 5,
				left : x + 5
			}).appendTo("body").fadeIn(200);
		}


		$.plot($(selector), [{
			data : data1,
			label : labelsDot[0],
			color : colorsDot[0]
		}, {
			data : data2,
			label : labelsDot[1],
			color : colorsDot[1]
		}],
			{
			series : {
				lines : {
					show : true,
					fill : false,
					lineWidth : 3,
					fillColor : {
						colors : [{
							opacity : 0.3
						}, {
							opacity : 0.3
						}]
					}
				},
				curvedLines: {
					apply: true,
					active: true,
					monotonicFit: true
				},
				splines: {
					show: true,
					tension: 0.4,
					lineWidth: 5,
					fill: 0.4
				}
			},

			grid : {
				hoverable : true,
				clickable : true,
				borderColor : borderColorDot,
				tickColor : "#f9f9f9",
				borderWidth : 1,
				labelMargin : 10,
				backgroundColor : bgColorDot
			},
			legend : {
				position : "ne",
				margin : [0, -32],
				noColumns : 0,
				labelBoxBorderColor : null,
				labelFormatter : function(label, series) {
					// just add some space to labes
					return '' + label + '&nbsp;&nbsp;';
				},
				width : 30,
				height : 2
			},
			yaxis : {
				axisLabel: "Value",
				tickColor : '#f5f5f5',
				font : {
					color : '#bdbdbd'
				}
			},
			xaxis : {
				axisLabel: "Numbers",
				tickColor : '#f5f5f5',
				font : {
					color : '#bdbdbd'
				}
			},
			tooltip : false,
		});
	},
	//end plot Dot graph


	//returns some random data
	FlotChart.prototype.randomData = function() {
		var totalPoints = 300;
		if (this.$realData.length > 0)
			this.$realData = this.$realData.slice(1);

		// Do a random walk
		while (this.$realData.length < totalPoints) {

			var prev = this.$realData.length > 0 ? this.$realData[this.$realData.length - 1] : 50,
			    y = prev + Math.random() * 10 - 5;

			if (y < 0) {
				y = 0;
			} else if (y > 100) {
				y = 100;
			}

			this.$realData.push(y);
		}

		// Zip the generated y values with the x values
		var res = [];
		for (var i = 0; i < this.$realData.length; ++i) {
			res.push([i, this.$realData[i]])
		}

		return res;
	}, FlotChart.prototype.createRealTimeGraph = function(selector, data, colors) {
		var plot = $.plot(selector, [data], {
			colors : colors,
			series : {
				grow : {
					active : false
				}, //disable auto grow
				shadowSize : 0, // drawing is faster without shadows
				lines : {
					show : true,
					fill : true,
					lineWidth : 2,
					steps : false
				}
			},
			grid : {
				show : true,
				aboveData : false,
				color : '#dcdcdc',
				labelMargin : 15,
				axisMargin : 0,
				borderWidth : 0,
				borderColor : null,
				minBorderMargin : 5,
				clickable : true,
				hoverable : true,
				autoHighlight : false,
				mouseActiveRadius : 20
			},
			tooltip : true, //activate tooltip
			tooltipOpts : {
				content : "Value is : %y.0" + "%",
				shifts : {
					x : -30,
					y : -50
				}
			},
			yaxis : {
				axisLabel: "Response Time (ms)",
				min : 0,
				max : 100,
				tickColor : '#f5f5f5',
				color : 'rgba(0,0,0,0.7)'
			},
			xaxis : {
				axisLabel: "Point Value (1000)",
				show : true,
				tickColor : '#f5f5f5'
			}
		});

		return plot;
	},
	

	//initializing various charts and components
	FlotChart.prototype.init = function() {
		
		//plot graph Dot data
		var uploadsDot 		= [[0, 2], [1, 4], [2, 7], [3, 9], [4, 6], [5, 3], [6, 10],[7, 8], [8, 5], [9, 14], [10, 10], [11, 10], [12, 8]];
		var downloadsDot 	= [[0, 1], [1, 31], [2, 6], [3, 7], [4, 4], [5, 2], [6, 8],[7, 6], [8, 4], [9, 10], [10, 8], [11, 14], [12, 5]];
		var plabelsDot 		= [ "Ethereum"];
		var pcolorsDot 		= ['',''];
		var borderColorDot 	= '#f5f5f5';
		var bgColorDot 		= '#fff';
		this.createPlotDotGraph("#website-stats1", downloadsDot, plabelsDot, pcolorsDot, borderColorDot, bgColorDot);
		this.createPlotDotGraph("#website-stats2", downloadsDot, plabelsDot, pcolorsDot, borderColorDot, bgColorDot);
		this.createPlotDotGraph("#website-stats3", downloadsDot, plabelsDot, pcolorsDot, borderColorDot, bgColorDot);

		
		updatePlot();

		
		
	},

	//init flotchart
	$.FlotChart = new FlotChart, $.FlotChart.Constructor =
	FlotChart

}(window.jQuery),

//initializing flotchart
function($) {
	"use strict";
	$.FlotChart.init()
}(window.jQuery);