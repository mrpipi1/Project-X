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
                    "colors": colors[i]
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

                  var pie = new d3pie("test", {
                     "header":{
                        "title":{
                           "text": name,
                           "color":"#51bd4c",
                           "fontSize":22,
                           "font":"open sans"
                        },

                        "subtitle":{
                           "text": subtitle,
                           "color":"#999999",
                           "fontSize":12,
                           "font":"open sans"
                        },

                        "location":"top-left",
                        "titleSubtitlePadding":10
                     },

                     "footer":{
                        "color":"#999999",
                        "fontSize":11,
                        "font":"open sans",
                        "location":"bottom-center"
                     },

                     "size":{
                        "canvasHeight":400,
                        "pieOuterRadius":"70%"
                     },

                     "data": {
                         "sortOrder": "label-desc",
                         "content": data,
                         "colors": colors
                      },

                     "labels":{
                        "outer":{
                           "pieDistance":20
                        },

                        "inner":{
                           "format":"value"
                        },

                        "mainLabel":{
                           "font":"open sans",
                           "fontSize":12
                        },

                        "percentage":{
                           "color":"#e1e1e1",
                           "font":"open sans",
                           "decimalPlaces":0
                        },

                        "value":{
                           "color":"#e1e1e1",
                           "font":"open sans",
                           "fontSize":12
                        },

                        "lines":{
                              "enabled":true,
                              "color":"#cccccc"
                           },"truncation":{
                              "enabled":true}
                           },
                           "effects":{
                              "pullOutSegmentOnClick":{
                                 "effect":"linear",
                                 "speed":400,
                                 "size":8}
                              },
                              "callbacks":{}});
                         }
                  }

         }else{
           console.log('error');
         }
     });

 }
 // here are the colors for the statistics defined
var colors = ['#000', '#848484', '#dddddd', '#e98e8e', '#3b5457', '#4752d1', '#71f067'];
statistik_data_Query('users', 'gender', ['female', 'male'], colors, 'Gender');
statistik_data_Query('users', 'pref_delivery', ['DHL', 'Post', 'express'], colors, 'prefered Payment', 'Test Subheadline');
statistik_data_Query('users', 'pref_payment', ['Rechnung', 'Vorkasse', 'Kreditkarte'], colors, 'prefered Delivery');
statistik_data_Query('users', 'city', ['Wien', 'Berlin'], colors, 'City');
