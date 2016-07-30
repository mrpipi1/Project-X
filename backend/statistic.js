/**
 * Created by alex on 05/05/16.
 */

 function statistik_data_Query(tablename, column, value) {
     $.post('logic/statistik_data.php', {statistik_table: tablename, statistik_col: column, satistik_value: value}, function(response, status) {
         if(status == 'success') {
             console.log(response);
             var bla = response;
             return response;

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
                             "label": "male",
                             "value": male,
                             "color": "#3f9999"
                         },
                         {
                             "label": "female",
                             "value": female,
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

             var female = statistik_data_Query('users', 'gender', 'female');
             var male = statistik_data_Query('users', 'gender', 'male');
             console.log('hallo');

         }else{
           console.log('error');
         }
     });

 }


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
