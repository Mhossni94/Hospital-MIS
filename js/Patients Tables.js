/*global console, alert, promot*/
var users = [
    {ID:1,fName:"Omar",lName:"Elsayed",Email:"Challengeromar27@hotmail.com",PhoneNumber:'01554171056',Birthday:'09/18/1997',Insurance:5000,
    Referral:"Headache",Complain:"Headache",PaidAmount:2500,DebitAmount:0,Allergies:"IDK",MedicalHistort:"Sugar"},
    {ID:2,fName:"Abdullah",lName:"Amr",Email:"AbdullahAmr@hotmail.com",PhoneNumber:"01149112935",Birthday:'09/18/1997',Insurance:45634,
    Referral:"Emergency",Complain:"Emergency",PaidAmount:7862,DebitAmount:0,Allergies:"IDK",MedicalHistort:"Yes"},
    {ID:3,fName:"Mohamed",lName:"Hosny",Email:"MohamedHosny@hotmail.com",PhoneNumber:"0101008990",Birthday:'09/18/1997',Insurance:24524,
    Referral:"Worth",Complain:"Worth",PaidAmount:245245,DebitAmount:0,Allergies:"IDK",MedicalHistort:"Test"},
    {ID:4,fName:"Adam",lName:"Salah",Email:"AdamSalah@hotmail.com",PhoneNumber:"01149112935",Birthday:'09/18/1997',Insurance:4510,
    Referral:"Kidney",Complain:"Kidney",PaidAmount:20412,DebitAmount:0,Allergies:"IDK",MedicalHistort:"Example"},
    {ID:5,fName:"Ahmed",lName:"Mohamed",Email:"AhmedMohamed@hotmail.com",PhoneNumber:"01554171056",Birthday:'09/18/1997',Insurance:7854,
    Referral:"Stomach",Complain:"Stomach",PaidAmount:5474,DebitAmount:0,Allergies:"IDK",MedicalHistort:"Anything"},
]

function viewPatients(){
var adduser="";

for(var i=0;i<users.length;i++){
    
    adduser +="<tr>"+"<td>"+users[i].ID+"</td>"+"<td>"+users[i].fName+"</td>"+"<td>"+users[i].lName+"</td>"+"<td>"+users[i].Email+"</td>"
                +"<td>"+users[i].PhoneNumber+"</td>"+"<td>"+users[i].Birthday+"</td>"+"<td>"+users[i].Insurance+"</td>"
                +"<td>"+users[i].Referral+"</td>"+"<td>"+users[i].Complain+"</td>"+"<td>"+users[i].PaidAmount+"</td>"
                +"<td>"+users[i].DebitAmount+"</td>"+"<td>"+users[i].Allergies+"</td>"+"<td>"+users[i].MedicalHistort+"</td>"+"</tr>";
    
    
}
document.getElementById('tableBody').innerHTML=adduser;
    
}
viewPatients();

function hide(){
   document.getElementById("addPatient").style.display =  "none";
   document.getElementById("removePatient").style.display =  "none";
   document.getElementById("editPatient").style.display =  "none";
    
}
function addOnePatient(){
   document.getElementById("addPatient").style.display =  "none";
    users.push(
                {   ID:users.length+1,
                    fName:document.getElementById('fName').value,
                    lName:document.getElementById('lName').value,
                    Email:document.getElementById('mail').value,
                    PhoneNumber:document.getElementById('pNumber').value,
                    Birthday:document.getElementById('birthday').value,
                    Insurance:document.getElementById('insurance').value,
                    Referral:document.getElementById('referral').value,
                    Complain:document.getElementById('complain').value,
                    PaidAmount:document.getElementById('pAmount').value,
                    DebitAmount:document.getElementById('dAmount').value,
                    Allergies:document.getElementById('allergies').value,
                    MedicalHistort:document.getElementById('mHistory').value,
                 
               }
               )
    
    
    
    viewPatients();
    
    
}
function addPatient(){
   document.getElementById("addPatient").style.display =  "block";
}
function removeOnePatient(){
   document.getElementById("removePatient").style.display =  "none";
    
    users.splice(document.getElementById('idRemove').value-1,1);
    viewPatients();
    
    
}

function removePatient(){
   document.getElementById("removePatient").style.display =  "block";
}

function editPatient(){
   document.getElementById("editPatient").style.display =  "block";
}
function confirm(){
   document.getElementById("addPatient").style.display =  "none";
    
}