/**
 * Created by alex on 05/05/16.
 */

 function statistik_data_Query(tablename, column, value, tablename2, column2, value2) {
     $.post('logic/statistik_data.php', {statistik_table: tablename, statistik_col: column, satistik_value: value, statistik_table2: tablename2, statistik_col2: column2, satistik_value2: value2}, function(response, status) {
         if(status == 'success') {
             console.log(response);
             response = jQuery.parseJSON(response);;

             var pie = new d3pie("pieChart", {
                 "header": {
                     "title": {
                         "text": "gender",
                         "fontSize": 24,
                         "font": "helvetica"
                     },
                     "subtitle": {
                         "text": "",
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
                     "content": [
                         {
                             "label": value,
                             "value": response[0],
                             "color": "#3f9999"
                         },
                         {
                             "label": value2,
                             "value": response[1],
                             "color": "#206999"
                         }
                     ]
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


         }else{
           console.log('error');
         }
     });

 }
statistik_data_Query('users', 'gender', 'female', 'users', 'gender', 'male');
//statistik_data_Query('users', 'pref_delivery', 'female', 'users', 'gender', 'male');


    //####################

    // var pie = new d3pie("pieChart", {
    //     "header": {
    //         "title": {
    //             "text": "prev. delivery",
    //             "fontSize": 24,
    //             "font": "helvetica"
    //         },
    //         "subtitle": {
    //             "text": "",
    //             "color": "#999999",
    //             "fontSize": 10,
    //             "font": "helvetica"
    //         },
    //         "location": "pie-center",
    //         "titleSubtitlePadding": 10
    //     },
    //     "footer": {
    //         "color": "#999999",
    //         "fontSize": 10,
    //         "font": "open sans",
    //         "location": "bottom-left"
    //     },
    //     "size": {
    //         "canvasHeight": 300,
    //         "canvasWidth": 340,
    //         "pieInnerRadius": "92%",
    //         "pieOuterRadius": "72%"
    //     },
    //     "data": {
    //         "sortOrder": "label-desc",
    //         "content": [
    //             {
    //                 "label": "Post",
    //                 "value": 8,
    //                 "color": "#3f9999"
    //             },
    //             {
    //                 "label": "DHL",
    //                 "value": 3,
    //                 "color": "#709925"
    //             },
    //             {
    //                 "label": "Express",
    //                 "value": 6,
    //                 "color": "#206999"
    //             }
    //         ]
    //     },
    //     "labels": {
    //         "outer": {
    //             "format": "label-percentage1",
    //             "pieDistance": 10
    //         },
    //         "inner": {
    //             "format": "none"
    //         },
    //         "mainLabel": {
    //             "font": "helvetica",
    //             "fontSize": 11
    //         },
    //         "percentage": {
    //             "color": "#999999",
    //             "font": "helvetica",
    //             "fontSize": 11,
    //             "decimalPlaces": 0
    //         },
    //         "value": {
    //             "color": "#cccc43",
    //             "font": "helvetica",
    //             "fontSize": 11
    //         },
    //         "lines": {
    //             "enabled": true,
    //             "style": "straight",
    //             "color": "#777777"
    //         },
    //         "truncation": {
    //             "enabled": true
    //         }
    //     },
    //     "effects": {
    //         "pullOutSegmentOnClick": {
    //             "effect": "linear",
    //             "speed": 400,
    //             "size": 8
    //         }
    //     },
    //     "misc": {
    //         "colors": {
    //             "segmentStroke": "#000000"
    //         }
    //     }
    // });
