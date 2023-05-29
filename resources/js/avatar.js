document.querySelector('#avatar101').addEventListener('click', () =>{
    document.querySelector('#choose-avt').click();
    document.querySelector('#choose-avt').addEventListener('change',()=>{
        document.querySelector('#submit-avt').click();
    });
})
document.querySelector('#back-to-home').addEventListener('click', () =>{
    document.querySelector('#back-to-home > a').click();
});