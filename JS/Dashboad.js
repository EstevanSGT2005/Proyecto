const chart = document.querySelector('#chart').getContext('2d');

//create


Chart.defaults.borderColor = '#546E7A';
Chart.defaults.color = '#546E7A';
Chart.defaults.font.size = 18;
Chart.defaults.font.weight = 700;

new Chart(chart, {
    type:"line",
    data: {
        labels: ["Jan", "Fed", "Mar","Apr","May","Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
        

        datasets:[

            {        
                label:"Ganancias",
                pointBackgroundColor: "#5719c2",
                backgroundColor:'#5719c2',
                data: [30000, 35537, 49631, 59095, 57828, 36684, 33572, 39974, 48847, 48116, 61004],
                borderColor:"#5719c2",
                borderWidth: 3
            },
            
            {        
                label:"Inversión",
                pointBackgroundColor: "#607d8b",
                backgroundColor:'#607d8b',
                data: [30000, 41000, 88800, 26000, 46000, 32698, 5000, 3000, 18656, 24856, 36844],
                borderColor:"#607d8b",
                borderWidth: 3
            }
        ]
        
    },
    options:{
        responsive: true
    }
})