/**
 * Created by alex on 05/05/16.
 */
 function statistik_data_Query(tablename, column, values, colors, name, subtitle) {
   var data = [];
     $.post('logic/statistik_data.php', {statistik_table: tablename, statistik_col: column, satistik_values: values }, function(response, status) {
         if(status == 'success') {
            response = jQuery.parseJSON(response);
            for(i = 0; i < response.length; i++){
              if(response[i] > 0){
                data.push( {
                    "label": values[i],
                    "value": response[i],
                    "color": colors[i]
                });
              }
                if(i == response.length - 1){
                  if(name){
                    name = name;
                  }else{
                    name = column;
                  }
                  if(subtitle){
                    subtitle = subtitle;
                  }else{
                    subtitle = '';
                  }
                  var pie = new d3pie("pieChart", {
                      "header": {
                          "title": {
                              "text": name,
                              "fontSize": 24,
                              "font": "helvetica"
                          },
                          "subtitle": {
                              "text": subtitle,
                              "color": "#999999",
                              "fontSize": 10,
                              "font": "helvetica"
                          },
                          "location": "pie-center",
                          "titleSubtitlePadding": 10
                      },
                      "footer": {
                          "color": "#999999",
                          "fontSize": 10,
                          "font": "open sans",
                          "location": "bottom-left"
                      },
                      "size": {
                          "canvasHeight": 300,
                          "canvasWidth": 340,
                          "pieInnerRadius": "92%",
                          "pieOuterRadius": "72%"
                      },
                      "data": {
                          "sortOrder": "label-desc",
                          "content":
                              data

                      },
                      "labels": {
                          "outer": {
                              "format": "label-percentage1",
                              "pieDistance": 10
                          },
                          "inner": {
                              "format": "none"
                          },
                          "mainLabel": {
                              "font": "helvetica",
                              "fontSize": 11
                          },
                          "percentage": {
                              "color": "#999999",
                              "font": "helvetica",
                              "fontSize": 11,
                              "decimalPlaces": 0
                          },
                          "value": {
                              "color": "#cccc43",
                              "font": "helvetica",
                              "fontSize": 11
                          },
                          "lines": {
                              "enabled": true,
                              "style": "straight",
                              "color": "#777777"
                          },
                          "truncation": {
                              "enabled": true
                          }
                      },
                      "effects": {
                          "pullOutSegmentOnClick": {
                              "effect": "linear",
                              "speed": 400,
                              "size": 8
                          }
                      },
                      "misc": {
                          "colors": {
                              "segmentStroke": "#000000"
                          }
                      }
                  });
                }

             }

         }else{
           console.log('error');
         }
     });

 }
 // here are the colors for the statistics defined
var colors = ['#000', '#848484', '#dddddd'];
statistik_data_Query('users', 'gender', ['female', 'male'], colors, 'Gender');
statistik_data_Query('users', 'pref_delivery', ['DHL', 'Post', 'express'], colors, 'prefered Payment', 'Test Subheadline');
statistik_data_Query('users', 'pref_payment', ['Rechnung', 'Vorkasse', 'Kreditkarte'], colors, 'prefered Delivery');
statistik_data_Query('users', 'city', ['Wien', 'Berlin'], colors, 'City');
