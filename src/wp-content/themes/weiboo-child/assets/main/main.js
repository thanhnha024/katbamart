document.addEventListener("DOMContentLoaded",function(){{const r=document.querySelector('ul[role="radiogroup"]');var e=Array.from(r.querySelectorAll("li")).sort((e,r)=>{var t=e=>{e=e.getAttribute("data-value").toLowerCase();return e.includes("kg")?1e3*parseFloat(e):e.includes("g")?parseFloat(e):0};return t(e)-t(r)});r.innerHTML="",e.forEach(e=>{r.appendChild(e)})}});