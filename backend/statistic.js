/**
 * Created by alex on 05/05/16.
 */

 function statistik_data_Query(tablename, Id, bla) {
     console.log(el);
     $.post('logic/delete_contents.php', {id: Id, table: tablename}, function(response, status) {
         if(response === 1 && status == success) {
             notification('success', 'Eintrag erfolgreich gelöscht!');
             //todo reload the data
         }else{
             notification('error', 'Eintrag konnte nicht gelöscht werden!');
         }
     });

 }
 var female = statistik_data_Query('users', 'gender', 'female')

var pie = new d3pie("pie_gender", {
    "header": {
        "title": {
            "text": "gender",
            "fontSize": 24,
            "font": "helvetica"
        },
        "subtitle": {
            "text": "user gender",
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
                "value": 4,
                "color": "#3e4f99"
            },
            {
                "label": "female",
                "value": 2,
                "color": "#cb83d5"
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


    //####################

    var pie = new d3pie("pieChart", {
        "header": {
            "title": {
                "text": "prev. delivery",
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
                    "label": "Post",
                    "value": 8,
                    "color": "#3f9999"
                },
                {
                    "label": "DHL",
                    "value": 3,
                    "color": "#709925"
                },
                {
                    "label": "Express",
                    "value": 6,
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
