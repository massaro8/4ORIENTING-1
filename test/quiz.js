function raccogli1() {
var c=0;
var q1=document.test1.q1.value;
var q2=document.test2.q2.value;
var q3=document.test3.q3.value;
var q4=document.test4.q4.value;
var primapagina=[];

if(q1=="11") {primapagina[0]="MOLTO INTERESSATO"}
if(q1=="12") {primapagina[0]="POCO INTERESSATO"}
if(q1=="13") {primapagina[0]="ABBASTANZA INTERESSATO"}
if(q1=="14") {primapagina[0]="POCO INTERESSATO"}
if(q2=="21") {primapagina[1]="MOLTO INTERESSATO"}
if(q2=="22") {primapagina[1]="POCO INTERESSATO"}
if(q2=="23") {primapagina[1]="ABBASTANZA INTERESSATO"}
if(q2=="24") {primapagina[1]="PER NULLA INTERESSATO"}
if(q3=="31") {primapagina[2]="MOLTO INTERESSATO"}
if(q3=="32") {primapagina[2]="POCO INTERESSATO"}
if(q3=="33") {primapagina[2]="ABBASTANZA INTERESSATO"}
if(q3=="34") {primapagina[2]="PER NULLA INTERESSATO"}
if(q4=="41") {primapagina[3]="MOLTO INTERESSATO"}
if(q4=="42") {primapagina[3]="POCO INTERESSATO"}
if(q4=="43") {primapagina[3]="ABBASTANZA INTERESSATO"}
if(q4=="44") {primapagina[3]="PER NULLA INTERESSATO"}

console.log(primapagina[0]);
console.log(primapagina[1]);
console.log(primapagina[2]);
console.log(primapagina[3]);

}