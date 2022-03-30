function changeH1(e,newText){
    e.preventDefault();
    document.querySelector('h1').innerHTML=newText;
    document.querySelector('form').reset();
}
