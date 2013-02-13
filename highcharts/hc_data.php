<script type="text/javascript">
    var chartKills;
    var chartCK;
    var chartGold;

	$(document).ready(function() { 
        chartKills = new Highcharts.Chart({
            chart: {
                renderTo: 'killsGraph',
                width: $('#kills').width(),
                backgroundColor: {
                    linearGradient: [0, 0, 500, 500],
                    stops: [
                        [0, 'rgba(0, 0, 0, 0)'],
                        [1, 'rgba(0, 0, 0, 0)']
                        ]
                },
                borderWidth: 0,
                plotBackgroundColor: 'rgba(0, 0, 0, 0)',
                plotShadow: true,
                plotBorderWidth: 1,
                events: {
                    load: function() {
                        // set up the updating of the chart each second
                        var timer = 0;
                        var seriesb = this.series[0];
                        var seriesr = this.series[1];

                        var seriesbtotal = 0;
                        var seriesrtotal = 0;
                        setInterval(function() {
                        	timer+=0.5;//Half a minute
                            var x = timer; // current time
                            seriesbtotal += Math.floor(Math.random()*3);
    	                    seriesrtotal += Math.floor(Math.random()*3);
                            seriesb.addPoint([x, seriesbtotal], true, false);
                            seriesr.addPoint([x, seriesrtotal], true, false);
                        }, 30000);
                    }
                }
            },
            title: {
                text: 'Kills'
            },
            xAxis: {
                title: {
                    text: 'Time (Minutes)'
                }
            },
            yAxis: {
                title: {
                    text: 'Kills'
                },
                type: 'linear',
                startOnTick: false,
            	showFirstLabel: false
            },
            tooltip: {
    		    formatter: function() {
    		        return  this.series.name + ': '+ this.y;
    		    }
    		},
            series: [{
                name: 'Blue team',
                color: '#0000cc',
                data: [0]
            }, {
                name: 'Red team',
                color: '#cc0000',
                data: [0]
            }]
        });
        
        //CreepsKill
        chartCK = new Highcharts.Chart({
            chart: {
                renderTo: 'CKGraph',
                width: $('#ckills').width(),
                backgroundColor: {
                    linearGradient: [0, 0, 500, 500],
                    stops: [
                        [0, 'rgba(0, 0, 0, 0)'],
                        [1, 'rgba(0, 0, 0, 0)']
                        ]
                },
                borderWidth: 0,
                plotBackgroundColor: 'rgba(0, 0, 0, 0)',
                plotShadow: true,
                plotBorderWidth: 1,
                events: {
                    load: function() {
                        // set up the updating of the chart each second
                        var timer = 0;
                        var seriesb1 = this.series[0];
                        var seriesb2 = this.series[1];
                        var seriesb3 = this.series[2];
                        var seriesb4 = this.series[3];
                        var seriesb5 = this.series[4];
                        var seriesr1 = this.series[5];
                        var seriesr2 = this.series[6];
                        var seriesr3 = this.series[7];
                        var seriesr4 = this.series[8];
                        var seriesr5 = this.series[9];

                        var seriesb1total = 0;
                        var seriesb2total = 0;
                        var seriesb3total = 0;
                        var seriesb4total = 0;
                        var seriesb5total = 0;
                        var seriesr1total = 0;
                        var seriesr2total = 0;
                        var seriesr3total = 0;
                        var seriesr4total = 0;
                        var seriesr5total = 0;
                        setInterval(function() {
                            timer+=0.5;//Half a minute
                            var x = timer; // current time
                            seriesb1total += Math.floor(Math.random()*10);
                            seriesb2total += Math.floor(Math.random()*10);
                            seriesb3total += Math.floor(Math.random()*10);
                            seriesb4total += Math.floor(Math.random()*10);
                            seriesb5total += Math.floor(Math.random()*2);
                            seriesr1total += Math.floor(Math.random()*10);
                            seriesr2total += Math.floor(Math.random()*10);
                            seriesr3total += Math.floor(Math.random()*10);
                            seriesr4total += Math.floor(Math.random()*10);
                            seriesr5total += Math.floor(Math.random()*2);
                            seriesb1.addPoint([x, seriesb1total], true, false);
                            seriesb2.addPoint([x, seriesb2total], true, false);
                            seriesb3.addPoint([x, seriesb3total], true, false);
                            seriesb4.addPoint([x, seriesb4total], true, false);
                            seriesb5.addPoint([x, seriesb5total], true, false);
                            seriesr1.addPoint([x, seriesr1total], true, false);
                            seriesr2.addPoint([x, seriesr2total], true, false);
                            seriesr3.addPoint([x, seriesr3total], true, false);
                            seriesr4.addPoint([x, seriesr4total], true, false);
                            seriesr5.addPoint([x, seriesr5total], true, false);
                        }, 30000);
                    }
                }
            },
            title: {
                text: 'Creeps Kill'
            },
            xAxis: {
                title: {
                    text: 'Time (Minutes)'
                }
            },
            yAxis: {
                title: {
                    text: 'Creeps Kill'
                },
                type: 'linear',
                startOnTick: false,
                showFirstLabel: false
            },
            tooltip: {
                formatter: function() {
                    return  this.series.name + ': '+ this.y;
                }
            },
            series: [{
                name: 'Player 1 Blue',
                color: '#000077',
                data: [0]
            }, {
                name: 'Player 2 Blue',
                color: '#000099',
                data: [0]
            }, {
                name: 'Player 3 Blue',
                color: '#0000bb',
                data: [0]
            }, {
                name: 'Player 4 Blue',
                color: '#0000dd',
                data: [0]
            }, {
                name: 'Player 5 Blue',
                color: '#0000ff',
                data: [0]
            }, {
                name: 'Player 1 Red',
                color: '#770000',
                data: [0]
            }, {
                name: 'Player 2 Red',
                color: '#990000',
                data: [0]
            }, {
                name: 'Player 3 Red',
                color: '#bb0000',
                data: [0]
            }, {
                name: 'Player 4 Red',
                color: '#dd0000',
                data: [0]
            }, {
                name: 'Player 5 Red',
                color: '#ff0000',
                data: [0]
            }]
        });

        //Gold
        chartGold = new Highcharts.Chart({
            chart: {
                renderTo: 'goldGraph',
                width: $('#gold').width(),
                backgroundColor: {
                    linearGradient: [0, 0, 500, 500],
                    stops: [
                        [0, 'rgba(0, 0, 0, 0)'],
                        [1, 'rgba(0, 0, 0, 0)']
                        ]
                },
                borderWidth: 0,
                plotBackgroundColor: 'rgba(0, 0, 0, 0)',
                plotShadow: true,
                plotBorderWidth: 1,
                events: {
                    load: function() {
                        // set up the updating of the chart each second
                        var timer = 0;
                        var seriesb1 = this.series[0];
                        var seriesb2 = this.series[1];
                        var seriesb3 = this.series[2];
                        var seriesb4 = this.series[3];
                        var seriesb5 = this.series[4];
                        var seriesr1 = this.series[5];
                        var seriesr2 = this.series[6];
                        var seriesr3 = this.series[7];
                        var seriesr4 = this.series[8];
                        var seriesr5 = this.series[9];

                        var seriesb1total = 0;
                        var seriesb2total = 0;
                        var seriesb3total = 0;
                        var seriesb4total = 0;
                        var seriesb5total = 0;
                        var seriesr1total = 0;
                        var seriesr2total = 0;
                        var seriesr3total = 0;
                        var seriesr4total = 0;
                        var seriesr5total = 0;
                        setInterval(function() {
                            timer+=0.5;//Half a minute
                            var x = timer; // current time
                            seriesb1total += Math.floor(Math.random()*70+30);
                            seriesb2total += Math.floor(Math.random()*70+30);
                            seriesb3total += Math.floor(Math.random()*70+30);
                            seriesb4total += Math.floor(Math.random()*70+30);
                            seriesb5total += Math.floor(Math.random()*70+30);
                            seriesr1total += Math.floor(Math.random()*70+30);
                            seriesr2total += Math.floor(Math.random()*70+30);
                            seriesr3total += Math.floor(Math.random()*70+30);
                            seriesr4total += Math.floor(Math.random()*70+30);
                            seriesr5total += Math.floor(Math.random()*70+30);
                            seriesb1.addPoint([x, seriesb1total], true, false);
                            seriesb2.addPoint([x, seriesb2total], true, false);
                            seriesb3.addPoint([x, seriesb3total], true, false);
                            seriesb4.addPoint([x, seriesb4total], true, false);
                            seriesb5.addPoint([x, seriesb5total], true, false);
                            seriesr1.addPoint([x, seriesr1total], true, false);
                            seriesr2.addPoint([x, seriesr2total], true, false);
                            seriesr3.addPoint([x, seriesr3total], true, false);
                            seriesr4.addPoint([x, seriesr4total], true, false);
                            seriesr5.addPoint([x, seriesr5total], true, false);
                        }, 30000);
                    }
                }
            },
            title: {
                text: 'Gold'
            },
            xAxis: {
                title: {
                    text: 'Time (Minutes)'
                }
            },
            yAxis: {
                title: {
                    text: 'Gold'
                },
                type: 'linear',
                startOnTick: false,
                showFirstLabel: false
            },
            tooltip: {
                formatter: function() {
                    return  this.series.name + ': '+ this.y;
                }
            },
            series: [{
                name: 'Player 1 Blue',
                color: '#000077',
                data: [0]
            }, {
                name: 'Player 2 Blue',
                color: '#000099',
                data: [0]
            }, {
                name: 'Player 3 Blue',
                color: '#0000bb',
                data: [0]
            }, {
                name: 'Player 4 Blue',
                color: '#0000dd',
                data: [0]
            }, {
                name: 'Player 5 Blue',
                color: '#0000ff',
                data: [0]
            }, {
                name: 'Player 1 Red',
                color: '#770000',
                data: [0]
            }, {
                name: 'Player 2 Red',
                color: '#990000',
                data: [0]
            }, {
                name: 'Player 3 Red',
                color: '#bb0000',
                data: [0]
            }, {
                name: 'Player 4 Red',
                color: '#dd0000',
                data: [0]
            }, {
                name: 'Player 5 Red',
                color: '#ff0000',
                data: [0]
            }]
        });
        resizeChart();
        $('a[data-toggle="tab"]').on('shown', function (e) {
            resizeChart();
        })
        setTimeout('resizeChart()',1000);
    });

function resizeChart(){
    chartKills.setSize($('#killsGraph').width(),$('#graphsspace').height()-50);
    chartCK.setSize($('#CKGraph').width(),$('#graphsspace').height()-50);
    chartGold.setSize($('#goldGraph').width(),$('#graphsspace').height()-50);
}
</script>