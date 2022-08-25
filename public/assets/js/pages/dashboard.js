const leader =document.getElementsByClassName('leader');
const leader_name = [...leader].map(input => input.value);

const mark =document.getElementsByClassName('final_mark');
const final_mark = [...mark].map(input => input.value);


var leaderDuties = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 350
	},
	fill: {
		opacity:1
	},
	plotOptions: {
	},
	series: [{
		name: 'Weekly Rate',
		data: final_mark
	}],
	colors: '#435ebe',
	xaxis: {
		categories: leader_name
    },
}


var chartLeaderDuties = new ApexCharts(document.querySelector("#chart-profile-visit"), leaderDuties);
chartLeaderDuties.render()
