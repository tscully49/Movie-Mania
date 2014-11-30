 // Load the fonts
    Highcharts.createElement('link', {
       href: 'http://fonts.googleapis.com/css?family=Unica+One',
       rel: 'stylesheet',
       type: 'text/css'
    }, null, document.getElementsByTagName('head')[0]);

    Highcharts.theme = {
       colors: ["#0000FF", "#00CC00", "#FF3300", "#FFFF00", "#FFFFFF", "#000000", "#00FFFF",
          "#CC0099", "#FF9900", "#7798BF", "#aaeeee"],
       chart: {
          backgroundColor: {
             linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
             stops: [
                [0, '#2a2a2b'],
                [1, '#3e3e40']
             ]
          },
          style: {
             fontFamily: "'Unica One', sans-serif"
          },
          plotBorderColor: '#606063'
       },
       title: {
          style: {
             color: '#E0E0E3',
             textTransform: 'uppercase',
             fontSize: '20px'
          }
       },
       subtitle: {
          style: {
             color: '#E0E0E3',
             textTransform: 'uppercase'
          }
       },
       xAxis: {
          gridLineColor: '#707073',
          labels: {
             style: {
                color: '#E0E0E3'
             }
          },
          lineColor: '#707073',
          minorGridLineColor: '#505053',
          tickColor: '#707073',
          title: {
             style: {
                color: '#A0A0A3'

             }
          }
       },
       yAxis: {
          gridLineColor: '#707073',
          labels: {
             style: {
                color: '#E0E0E3'
             }
          },
          lineColor: '#707073',
          minorGridLineColor: '#505053',
          tickColor: '#707073',
          tickWidth: 1,
          title: {
             style: {
                color: '#A0A0A3'
             }
          }
       },
       tooltip: {
          backgroundColor: 'rgba(0, 0, 0, 0.85)',
          style: {
             color: '#F0F0F0'
          }
       },
       plotOptions: {
          series: {
             dataLabels: {
                color: '#B0B0B3'
             },
             marker: {
                lineColor: '#333'
             }
          },
          boxplot: {
             fillColor: '#505053'
          },
          candlestick: {
             lineColor: 'white'
          },
          errorbar: {
             color: 'white'
          }
       },
       legend: {
          itemStyle: {
             color: '#E0E0E3'
          },
          itemHoverStyle: {
             color: '#FFF'
          },
          itemHiddenStyle: {
             color: '#606063'
          }
       },
       credits: {
          style: {
             color: '#666'
          }
       },
       labels: {
          style: {
             color: '#707073'
          }
       },

       drilldown: {
          activeAxisLabelStyle: {
             color: '#F0F0F3'
          },
          activeDataLabelStyle: {
             color: '#F0F0F3'
          }
       },

       navigation: {
          buttonOptions: {
             symbolStroke: '#DDDDDD',
             theme: {
                fill: '#505053'
             }
          }
       },

       // scroll charts
       rangeSelector: {
          buttonTheme: {
             fill: '#505053',
             stroke: '#000000',
             style: {
                color: '#CCC'
             },
             states: {
                hover: {
                   fill: '#707073',
                   stroke: '#000000',
                   style: {
                      color: 'white'
                   }
                },
                select: {
                   fill: '#000003',
                   stroke: '#000000',
                   style: {
                      color: 'white'
                   }
                }
             }
          },
          inputBoxBorderColor: '#505053',
          inputStyle: {
             backgroundColor: '#333',
             color: 'silver'
          },
          labelStyle: {
             color: 'silver'
          }
       },

       navigator: {
          handles: {
             backgroundColor: '#666',
             borderColor: '#AAA'
          },
          outlineColor: '#CCC',
          maskFill: 'rgba(255,255,255,0.1)',
          series: {
             color: '#7798BF',
             lineColor: '#A6C7ED'
          },
          xAxis: {
             gridLineColor: '#505053'
          }
       },

       scrollbar: {
          barBackgroundColor: '#808083',
          barBorderColor: '#808083',
          buttonArrowColor: '#CCC',
          buttonBackgroundColor: '#606063',
          buttonBorderColor: '#606063',
          rifleColor: '#FFF',
          trackBackgroundColor: '#404043',
          trackBorderColor: '#404043'
       },

       // special colors for some of the
       legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
       background2: '#505053',
       dataLabelsColor: '#B0B0B3',
       textColor: '#C0C0C0',
       contrastTextColor: '#F0F0F3',
       maskColor: 'rgba(255,255,255,0.3)'
    };

    // Apply the theme
    Highcharts.setOptions(Highcharts.theme);


//Genres Pie Chart Information
$(function genresChart () { 
    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });
    // Build the chart
    $('#genres').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotShadow: false
        },
        title: {
            text: 'Genre Breakdown'
        },
        subtitle: {
            text: 'Mouse over to view'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            }
            }
        },
        series: [{
            type: 'pie',
            name: 'Genre Percentage',
            //Hardcoding
            data: [
                ['Comedy', 1884],
                ['Drama', 1862],
                ['Action', 1079],
                ['Adventure', 830],
                ['Crime', 826],
                ['Romance', 764],
                ['Thriller', 694],
                ['Family', 411],
                ['Horror', 384],
                ['Fantasy', 375],
                ['Mystery', 341],
                ['Sci-Fi', 336],
                ['Animation', 236],
                ['Biography', 175],
                ['Sport', 154],
                ['Music', 135],
                ['History', 86],
                ['War', 59],
                ['Documentary', 55],
                ['Musical', 45],
                ['Western', 31],
                ['Film-Noir', 2]
            ]
        }]
    });
});

//Box Office Bar Chart information
$(function grossBarChart () {
    $('#grossing').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Top Ten Grossing Films of All Time'
        },
        subtitle: {
            text: 'According to us.'
        },
        xAxis: {
            type: 'category',
            labels: {
               // rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Unica One, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            max: 850,
            tickInterval: 50,
            title: {
                text: 'Total Gross (in millions)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            yDecimals: 2,
            pointFormat: 'Total Gross: <b>{point.y:.3f} million dollars</b>'
        },
        series: [{
            name: 'Grossing Films',
            data: [
            {
                name: 'Avatar',
                y: 760.507,
                color: Highcharts.getOptions().colors[0]
            }, {
                name: 'The Avengers',
                y: 623.357,
                color: Highcharts.getOptions().colors[1]
            }, {
                name: 'Titanic',
                y: 600.788,
                color: Highcharts.getOptions().colors[2]
            },
               {
                name: 'The Dark Knight Rises',
                y: 448.139,
                color: Highcharts.getOptions().colors[3]
            },
               {
                name: 'The Dark Knight',
                y: 441.226,
                color: Highcharts.getOptions().colors[4]
            }, {
                name: 'Shrek 2',
                y: 441.226,
                color: Highcharts.getOptions().colors[5]
            }, {
                name: 'Star Wars: Episode I',
                y: 431.088,
                color: Highcharts.getOptions().colors[6]
            }, {
                name: 'The Hunger Games',
                y: 424.668,
                color: Highcharts.getOptions().colors[7] 
            }, {
                name: 'Pirates 2',
                y: 423.415,
                color: Highcharts.getOptions().colors[8] 
            }, {
                name: 'Toy Story 3',
                y: 415.004,
                color: Highcharts.getOptions().colors[9]
            }, 
            ],
            dataLabels: {
                enabled: true,
                color: '#FFFFFF',
                align: 'center',
                style: {
                    fontSize: '13px',
                    fontFamily: 'Unica One, sans-serif',
                    textShadow: '0 0 3px black'
                }
            }
        }]
    });
});

//Combination Chart information
 $(function comboChart () {
    $('#combo').highcharts({
        title: {
            text: 'Highest Grossing Films'
        },
        xAxis: {
            categories: ['Avatar', 'The Avengers', 'Titanic', 'The Dark Knight Rises', 'The Dark Knight', 'Shrek 2', 'Star Wars: Episode I', 'The Hunger Games', 'Pirates 2', 'Toy Story 3']
        },
        series: [{
            type: 'column',
            name: 'Total Gross',
            //Hard Coding data right now
            data: [{
                name: 'Avatar',
                y: 760.507,
                color: Highcharts.getOptions().colors[0]
            }, {
                name: 'The Avengers',
                y: 623.357,
                color: Highcharts.getOptions().colors[1]
            }, {
                name: 'Titanic',
                y: 600.788,
                color: Highcharts.getOptions().colors[2]
            },
               {
                name: 'The Dark Knight Rises',
                y: 448.139,
                color: Highcharts.getOptions().colors[3]
            },
               {
                name: 'The Dark Knight',
                y: 441.226,
                color: Highcharts.getOptions().colors[4]
            }, {
                name: 'Shrek 2',
                y: 441.226,
                color: Highcharts.getOptions().colors[5]
            }, {
                name: 'Star Wars: Episode I',
                y: 431.088,
                color: Highcharts.getOptions().colors[6]
            }, {
                name: 'The Hunger Games',
                y: 424.668,
                color: Highcharts.getOptions().colors[7] 
            }, {
                name: 'Pirates 2',
                y: 423.415,
                color: Highcharts.getOptions().colors[8] 
            }, {
                name: 'Toy Story 3',
                y: 415.004,
                color: Highcharts.getOptions().colors[9]
            }, ],
        }, {
            type: 'pie',
            name: 'Highest Grossing',
            //Hardcoding
            data: [{
                name: 'Avatar',
                y: 760.507,
                color: Highcharts.getOptions().colors[0]
            }, {
                name: 'The Avengers',
                y: 623.357,
                color: Highcharts.getOptions().colors[1]
            }, {
                name: 'Titanic',
                y: 600.788,
                color: Highcharts.getOptions().colors[2]
            },
               {
                name: 'The Dark Knight Rises',
                y: 448.139,
                color: Highcharts.getOptions().colors[3]
            },
               {
                name: 'The Dark Knight',
                y: 441.226,
                color: Highcharts.getOptions().colors[4]
            }, {
                name: 'Shrek 2',
                y: 441.226,
                color: Highcharts.getOptions().colors[5]
            }, {
                name: 'Star Wars: Episode I',
                y: 431.088,
                color: Highcharts.getOptions().colors[6]
            }, {
                name: 'The Hunger Games',
                y: 424.668,
                color: Highcharts.getOptions().colors[7]
            }, {
                name: 'Pirates 2',
                y: 423.415,
                color: Highcharts.getOptions().colors[8]
            }, {
                name: 'Toy Story 3',
                y: 415.004,
                color: Highcharts.getOptions().colors[9]
            }, ],
            center: [300, 30],
            size: 100,
            showInLegend: false,
            dataLabels: {
                enabled: false
            }
        }]
    });
});