<html>
<h1> Processing... </h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="Chart.js-master/Chart.js"></script>
<script>
    
 var file;
var file = "# Count File for trans0_track1.>trans0_track1 Cardinality27.01 13674.0i 34.0j 1.12 13665.1i 43.20 13618.2i 58.2j 32.AC 50363.AI 263.Aj 102.BA 50560.BI 168.CB 50596.CI 131.IA 168.IB 131.IC 263.II 197322.i0 58.i1 34.i2 43.ii 74470.j0 33.jB 1.jC 101.jj 14289158";   
//make array of all the lines    
delimiter = '.' ; //make it  so that it's dynamic
var lines = file.split(delimiter);

//read first two lines
//first line is unimportant
//second line is the title 
var title = lines[1]; 
 
//initialize the object
var lineData = {
    labels: [],
    datasets: [
    {
        label: title,
        fillColor: "rgba(220,220,220,0.5)",
        strokeColor: "rgba(220,220,220,0.8)",
        highlightFill: "rgba(220,220,220,0.75)",
        highlightStroke: "rgba(220,220,220,1)",
        data: []
    }
    
    ]
} 


//convert structure into the object
for (var i = 2;i < lines.length; i ++ ){
    var line = lines[i];
    //split into the two data sets
    var values = line.split(" ");
    var label = values[0];
    var dataVal = values[1];
    //then, add to the data structure
    lineData.labels.push(label);
    lineData.datasets[0].data.push(dataVal);
    
}

console.log(lineData);

    
    
    
    
</script> 
    <div id="yo">
    hey. been dying, to meet you. 
    </div>
    <div id = "chartDiv">
                <canvas id="lineChart"></canvas>
    </div>

    
<script>
    var ctx = document.getElementById("lineChart").getContext("2d");
    var myNewChart = new Chart(ctx).Line(lineData);
    
</script>
</html>