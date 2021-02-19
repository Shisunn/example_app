let url = '';

// JQUERY

$('.deletion').click(function () {
   url = $(this).attr('href');
   return url;
});


$('#deleteBtn').click(function(){
    window.location.href = url;
});

// VANILLA JS

// const deletionLink = document.querySelectorAll('.deletion');

// deletionLink.forEach((link, index)=>{
//     link.onclick = function(){
//         url = this.href;
//         return url;
//     }
// });

// const confirmationBtn = document.getElementById('deleteBtn');

// confirmationBtn.addEventListener('click', ()=>{
//     window.location.href = url;
// });