
paypal.Buttons({
  style:{
    color:'blue',
    shape:'pill'
  },
    createOrder: function(data, actions) {

        return actions.order.create({

          purchase_units: [{

            amount: {

              value: document.getElementById('total').innerHTML// Can reference variables or functions. Example: `value: document.getElementById('...').value`
              
            }

          }]

        });

      },
      onApprove: function(data, actions) {

        return actions.order.capture().then(function(orderData) {

          // Successful capture! For dev/demo purposes:

              console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

              var transaction = orderData.purchase_units[0].payments.captures[0];

              

            swal('','Transaction '+ transaction.status + ': ' ,'success');
            

          // When ready to go live, remove the alert and show a success message within this page. For example:

          // var element = document.getElementById('paypal-button-container');

          // element.innerHTML = '';

          // element.innerHTML = '<h3>Thank you for your payment!</h3>';

          // Or go to another URL:  actions.redirect('thank_you.html');
          $.get("process.php",{payment:"payment"})
        },
       
        );

      },
      onCancel: function(data,actions){
        swal('transaction n\'est pas complet','completer votre paiement','error');
        
      }
}).render('#paypal-button-container') ;



