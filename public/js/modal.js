// get modal element

let butterFinger = document.getElementById('butterFingerModal');
let okotoks = document.getElementById('okotoksModal');
let prism = document.getElementById('prismModal');
// get open modal button
let bfBtn = document.getElementById('butterfinger');
let okoBtn = document.getElementById('okotoks');
let priBtn = document.getElementById('prism');
 // get close button
 let closeBf = document.getElementById('closeBf');
 let closeOko = document.getElementById('closeOko');
 let closePri = document.getElementById('closePri');

 //Listen for a open click
 bfBtn.addEventListener('click', openBf);
 okoBtn.addEventListener('click', openOko);
 priBtn.addEventListener('click', openPri);

 //Listen for close click
 closeBf.addEventListener('click', closeBfModal);
 closeOko.addEventListener('click', closeOkoModal);
 closePri.addEventListener('click', closePriModal);
// listen for outside click

 window.addEventListener('click', clickOutside);

 // Function to open modalBtn
 function openBf(){
     butterFinger.style.display = 'block';
 }
 function openOko(){
     okotoks.style.display = 'block';
 }
 function openPri(){
     prism.style.display = 'block';
 }
// Function to Close Modal
 function closeBfModal(){
     butterFinger.style.display = 'none';
 }
 function closeOkoModal(){
     okotoks.style.display = 'none';
 }
 function closePriModal(){
     prism.style.display = 'none';
 }
// function to close modal if clicked outside
 function clickOutside(e){
     if(e.target == butterFinger){
         butterFinger.style.display = 'none';
     } else if(e.target == okotoks){
         okotoks.style.display = 'none';
     } else if(e.target == prism){
         prism.style.display = 'none';
     }
 }
