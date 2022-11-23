

const statusIcon = document.getElementById('status');
const statusBtn  = document.getElementById('statusBtn');

statusBtn.addEventListener('click', (e)=>{
    
    if(statusIcon.style.backgroundColor === 'red'){
        statusIcon.style.backgroundColor = 'green';
    }else{
        statusIcon.style.backgroundColor = 'red';
    }
})

window.addEventListener('load', ()=>{
    window.stop();
})