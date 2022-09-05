/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
         200,
         150,
         700,
         190,
         50,
         200,
         380
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#5a5aea',
        borderWidth: 4,
        pointBackgroundColor: '#5a5aea'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
})()




/* <script>

function addmenu(){
      var namep=$('#nprodact').val();
      var prixp=$('#pprodact').val();

$.ajax({
  url="dash_insert.php",
  type:'POST',
  data:{
       nsnd : namep,
       psend : prixp
      },

success:function(data,status){
  console.log(status);
}

});

}



</script> -->


<!-- <script>

$(document).ready(function(){
    $("form").submit(function(event){
        /*Si la longueur de la valeur du champ #prenom est 0 (c'est-à-dire si
        le champ n'a pas été rempli), on affiche un message et on empêche l'envoi
        if($("#nom").val().length === 0){
            $("#nom").after("<span>Merci de remplir ce champ</span>");
            event.preventDefault();
        }else{
            
         


            let chaine = $("form").serialize();
        }
    });
});


  </script> */


  
