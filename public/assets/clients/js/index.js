
let amountElement = document.getElementById('amount')
let amount = amountElement.value

let render = (amount) => {
   amountElement.value = amount
}
let inc = () => {
   amount++
   render(amount)
   document.getElementById('amount').setAttribute('value', amount);
   // console.log(amount);
  }
let dec = () => {
   amount++
   render(amount)
   document.getElementById('amount').setAttribute('value', amount);
   console.log(amount);
  }
amountElement.addEventListener('input',function (){
   amount = amountElement.value
   amount = parseInt(amount)
   amount = (isNaN(amount) || amount == 0) ? 1 : amount
   render(amount)
   console.log(amount);
})
const incBtn = document.getElementById('inc')
const decBtn = document.getElementById('dec')
incBtn.addEventListener('click',function (e){
   e.preventDefault()
   console.log(this.previousElementSibling.value);
   inc()

   // $.ajax({
   //    url: "./Ajax",
   //    method: "POST",
   //    data: {
   //      id: 1,
   //    },
   //    success: function (data) {
   //     console.log(data);
   //    },
   //  });
})
decBtn.addEventListener('click',function (e){
   e.preventDefault()
   dec()
})