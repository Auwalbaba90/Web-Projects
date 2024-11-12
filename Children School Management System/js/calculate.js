function enTotal(){
    var arr = document.getElementsByClassName('en-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('en-total').value = tot;

}
function mathTotal(){
    var arr = document.getElementsByClassName('math-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('math-total').value = tot;
}

function verTotal(){
    var arr = document.getElementsByClassName('ver-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('ver-total').value = tot;
}

function quaTotal(){
    var arr = document.getElementsByClassName('qua-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('qua-total').value = tot;
}

function phonTotal(){
    var arr = document.getElementsByClassName('phon-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('phon-total').value = tot;
}

function HanTotal(){
    var arr = document.getElementsByClassName('Han-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('Han-total').value = tot;
}

function nurTotal(){
    var arr = document.getElementsByClassName('nur-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('nur_total').value = tot;
}

function nuraverage(){
    var nur_total=document.getElementById('nur_total').value;
    var nurave;
    if(nur_total !=""){
        nurave=nur_total/2
        
        document.getElementById('nuraver-total').value=nurave.toFixed(0); 
    }
}
//===================================Primary part =================================

function penTotal(){
    var arr = document.getElementsByClassName('pen-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pen-total').value = tot;
}

function pmathTotal(){
    var arr = document.getElementsByClassName('pmath-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pmath-total').value = tot;
}

function pcivTotal(){
    var arr = document.getElementsByClassName('pciv-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pciv-total').value = tot;
}

function pbsTotal(){
    var arr = document.getElementsByClassName('pbs-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pbs-total').value = tot;
}

function pquaTotal(){
    var arr = document.getElementsByClassName('pqua-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pqua-total').value = tot;
}

function ppheTotal(){
    var arr = document.getElementsByClassName('pphe-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pphe-total').value = tot;
}

function phalTotal(){
    var arr = document.getElementsByClassName('phal-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('phal-total').value = tot;
}

function phalTotal(){
    var arr = document.getElementsByClassName('phal-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('phal-total').value = tot;
}

function pverTotal(){
    var arr = document.getElementsByClassName('pver-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pver-total').value = tot;
}

function pcomTotal(){
    var arr = document.getElementsByClassName('pcom-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pcom-total').value = tot;
}

function prelTotal(){
    var arr = document.getElementsByClassName('prel-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('prel-total').value = tot;
}

function pagrTotal(){
    var arr = document.getElementsByClassName('pagr-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pagr-total').value = tot;
}

function pccaTotal(){
    var arr = document.getElementsByClassName('pcca-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pcca-total').value = tot;
}

function psosTotal(){
    var arr = document.getElementsByClassName('psos-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('psos-total').value = tot;
}

function priTotal(){
    var arr = document.getElementsByClassName('pri-cal');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('pri_total').value = tot;
}

function average(){
    var pri_total=document.getElementById('pri_total').value;
    var ave;
    if(pri_total !=""){
        ave=pri_total/2
        
        document.getElementById('aver-total').value=ave.toFixed(0); 
    }
}